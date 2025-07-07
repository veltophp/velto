<?php

namespace Modules\Auth;

use Velto\Core\Controller\Controller;
use Velto\Core\Request\Request;
use Velto\Core\Session\Session;
use Velto\Core\Env\Env;
use Velto\Core\Mail\Mail;

use Modules\Auth\Models\User;
class AuthController extends Controller
{
    public function login()
    {
        if (!Env::get('AUTH_LOGIN')) {
            return to_route('home');
        }    

        return view('auth.login');
    }

    public function register()
    {
        if (!Env::get('AUTH_REGISTER')) {
            return to_route('home');
        } 
        
        return view('auth.register');
    }

    public function submitLogin(Request $request)
    {
        $errors = validate($request->all(), [
            'email'    => 'required|email',
            'password' => 'required|min:6',
        ]);
        
        if (!empty($errors)) {
            flash()->to('#form-login')->error($errors);
            return to_route('login');
        }
    
        $user = User::findBy('email', $request->email);
    
        if (!isset($user->password) || !hash_check($request->password, $user->password)) {
            flash()->to('#form-login')->error('Wrong email or password!');
            return to_route('login');
        }
    
        if (is_email_verification_enabled() && !$user->email_verified) {
            flash()->to('#form-verify-email')->error('Please verify your email before logging in.');
            return to_route('verify.email');
        }

        Session::regenerate();
        Session::set('user', [
            'id'    => $user->id,
            'email' => $user->email,
            'role'  => $user->role,
        ]);
         
        return to_route('axion.dashboard');
    }

    public function submitRegister(Request $request)
    {
        $errors = validate($request->all(), [
            'name'     => 'required|string|min:3|max:100',
            'email'    => 'required|email',
            'password' => 'required|string|min:6|confirmed',
        ]);
        
        if (!empty($errors)) {
            flash()->to('#form-register')->error($errors);
            return to_route('register');
        }

        if (User::findBy('email', $request->email)){
            flash()->to('#form-register')->error('Email was already used by another account!');
            return to_route('register');
        }

        User::create([
            'user_id' => uvid(8),
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'email_verified' => is_email_verification_enabled() ? false : true,
        ]);


        if (is_email_verification_enabled()) {

            Session::set('email', $request->email);
            send_verification_code($request->email);
            return to_route('verify.email');

        }

        $user = User::findBy('email', $request->email);
        Session::regenerate();
        Session::set('user', [
            'id'    => $user->id,
            'email' => $user->email,
            'role'  => $user->role,
        ]);
        
        return to_route('axion.dashboard');

    }

    public function verifyEmail()
    {
        $email = session()->email;

        if (!$email) {
            return to_route('login');
        }

        $user = User::findBy('email', $email);

        if (!$user) {
            flash()->to('#form-verify-email')->error('Account not found.');
            return to_route('verify.email');
        }

        if ($user->email_verified) {
            flash()->to('#form-login')->error('Your email is already verified. You can now log in.');
            return to_route('login');
        }

        return view('auth.verify-email')->with('email' , $email);

    }

    public function submitVerifyEmail()
    {
        $inputCode = request()->post('code');
        $email = session()->email;
        $storedCodes = session()->verification_code;
        $attempts = Session::get('verification_attempt') ?? [];
        $expectedCode = $storedCodes[$email] ?? null;
        $currentAttempt = $attempts[$email] ?? 0;
    
        if (!$expectedCode) {
            flash()->to('#form-verify-email')->error('Verification code not found for this email.');
            return to_route('verify.email');
        }
    
        if ($currentAttempt >= 3) {
            flash()->to('#form-verify-email')->error('You have exceeded the maximum number of attempts (3). Please request a new code.');
            return to_route('verify.email');
        }
    
        if ((string) $inputCode !== (string) $expectedCode) {
            $attempts = Session::get("verification_attempt.{$email}", 0);
            $attempts++;
            
            Session::set("verification_attempt.{$email}", $attempts);
            $remainingAttempts = 3 - $attempts;
        
            flash()->to('#form-verify-email')->error("Incorrect verification code. You have {$remainingAttempts} attempt(s) left.");
            return to_route('verify.email');
        }
    
        User::where('email',$email)->update('email_verified',true);
    
        flash()->to('#form-login')->error('Email successfully verified. Please login.');
        return to_route('login');
    } 

    public function resendCode()
    {
        $email = session()->email ?? null;

        if (!$email) {
            flash()->to('#form-login')->error('Your session has expired. Please log in again.');
            return to_route('login');
        }

        Session::set("verification_attempt.{$email}", 0);

        send_verification_code($email);

        flash()->to('#form-verify-email')->error('A new verification code has been sent to your email.');
        return to_route('verify.email');
    }

    public function forgotPasswordForm()
    {
        return view('auth.forgot-password');
    }

    public function submitForgotPassword(Request $request)
    {
        $email = $request->email;
    
        if (!$email) {
            flash()->to('#form-forgot-password')->error('Please enter your email address.');
            return to_route('forgot.password');
        }
    
        $user = User::findBy('email', $email);
    
        if (!$user) {
            flash()->to('#form-forgot-password')->error('We couldn’t find an account with that email address.');
            return to_route('forgot.password');
        }
    
        $token = bin2hex(random_bytes(36));
    
        Session::set("reset_password_tokens.{$email}", $token);
    
        $url = route('reset.password', [
            'token' => $token,
            'email' => $email,
        ]);
        
        Mail::send(
            to: $email,
            subject: 'Reset Your Password',
            view: 'reset-password',
            data: ['url' => $url, 'email' => $email]
        );
    
        flash()->to('#form-forgot-password')->error('A password reset link has been sent to your email address.');
        return to_route('forgot.password');
    }

    public function resetPasswordForm($token, $email)
    {
        $decodedEmail = urldecode($email);

        $allTokens = Session::get('reset_password_tokens', []);
        $savedToken = $allTokens[$decodedEmail] ?? null;
        
        if (!$savedToken || $savedToken !== $token) {
            flash()->to('#form-forgot-password')->error('Invalid or expired reset link.');
            return to_route('forgot.password');
        }

        return view('auth.reset-password', [
            'token' => $token,
            'email' => $decodedEmail,
        ]);
    }

    public function resetPassword(Request $request)
    {

        $token = $request->token;
        $email = $request->email;
        $password = $request->password;
        $confirmPassword = $request->password_confirmation;

        if (!$token || !$confirmPassword) {
            flash()->to('#form-reset-password')->error('All fields are required.');
            return redirect("/reset-password/{$token}/" . rawurlencode($email));
        }
    
        if ($password !== $confirmPassword) {
            flash()->to('#form-reset-password')->error('Password confirmation does not match.');
            return redirect("/reset-password/{$token}/" . rawurlencode($email));
        }
    
        $decodedEmail = urldecode($email);
        $allTokens = Session::get('reset_password_tokens', []);
        $savedToken = $allTokens[$decodedEmail] ?? null;

        if (!$savedToken || $savedToken !== $token) {
            flash()->to('#form-forgot-password')->error('Invalid or expired reset token.');
            return to_route('forgot.password');
        }
    
        $user = User::findBy('email', $decodedEmail);
        if (!$user) {
            flash()->to('#form-forgot-password')->error('User not found.');
            return to_route('forgot.password');
        }
        
        User::where('email', $email)->update('password', bcrypt($password ));

        Session::remove("reset_password_tokens.{$decodedEmail}");
    
        flash()->to('#form-login')->error('Your password has been reset successfully. Please login back again.');
        return to_route('login');

    }

    public function logout()
    {
        Session::destroy();
        return to_route('home');
    }

}