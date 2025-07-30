<?php

namespace Modules\Auth\Controllers;

use Velto\Core\Support\SocialAuth;
use Velto\Core\Support\Str;
use Velto\Core\Support\Hash;
use Velto\Core\Request\Request;
use Velto\Core\Session\Session;


use Modules\Auth\Models\Auth;
use Modules\Auth\Models\User;


class SocialController
{
    public function socialRedirect($driver)
    {
        if (!driverCheck($driver)) {
            flash()->to('#form-login')->error("Oops! Social login via " . ucfirst($driver) . " isn’t set up yet.");
            return to_route('login');
        }

        try {
            $redirectUrl = SocialAuth::driver($driver)->redirect();
            return redirect($redirectUrl);

        } catch (\Throwable $e) {
            flash()->to('#form-login')->error('Failed to initiate social login: ' . $e->getMessage());
            return to_route('login');
        }
    }

    public function socialCallback($driver)
    {
        try {

            $socialUser = SocialAuth::driver($driver)->user();
            $user = User::findBy('email', $socialUser['email']);

            if($user) {

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

            } else {
                        
                User::create([
                    'name' => $socialUser['name'],
                    'username' => generateUsername($socialUser['name']),
                    'email' => $socialUser['email'],
                    'password' => bcrypt(Str::random(8)),
                    'email_verified' => true,
                ]);
        
                $user = User::findBy('email', $socialUser['email']);
                Session::regenerate();
                Session::set('user', [
                    'id'    => $user->id,
                    'email' => $user->email,
                    'role'  => $user->role,
                ]);

                return to_route('update.password.form');

            }

        } catch (\Throwable $e) {
            flash()->to('#form-login')->error('Login failed. An error occurred while processing the social login.');
            return to_route('login');
        }
    }

    public function updatePasswordForm()
    {
        return view('Auth.update-password');
    }

    public function updatePasswordProcess(Request $request)
    {
        $user = Auth::user();

        if (!$user) {
            flash()->to('#form-update-password')->error('Unauthorized access.');
            return to_route('update.password.form');
        }

    
        $errors = validate($request->all(), [
            'password' => 'required|string|min:6|confirmed',
        ]);
    
        if (!empty($errors)) {
            flash()->to('#form-update-password')->error($errors);
            return to_route('update.password.form');
        }

        $passwordUpdate = ['password' => Hash::make($request->password)];

        User::where('email', $user->email)->update($passwordUpdate);
        
        flash()->to('#form-update-password')->success('Your password has been updated successfully.');
        return to_route('axion.dashboard');
    }

}
