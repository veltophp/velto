<?php

namespace Modules\Axion\Controllers;

use Velto\Core\Controller\Controller;
use Velto\Core\Request\Request;
use Velto\Core\Session\Session;
use Velto\Core\Support\Hash;


use Modules\Auth\Models\User;
use Modules\Auth\Models\Auth;
use Modules\Axion\Models\Axion;


class AxionController extends Controller
{
    public function axionDashboard()
    {
        return view('axion.axion-dashboard')->with('message', 'Welcome to Axion Dashboard.');
    }

    public function axionProfile()
    {
        return view('axion.axion-profile');
    }

    public function updateName(Request $request)
    {
        $errors = validate($request->all(), [
            'name' => 'required|string|min:3|max:50',
        ]);
    
        if (!empty($errors)) {
            flash()->to('#form-update-name')->error($errors);
            return to_route('axion.profile');
        }

        $user = Auth::user();

        if (!$user) {
            flash()->to('#form-update-name')->error('Session expired. Please login again.');
            return to_route('login');
        }

        $updateName = User::where('id', $user->id)->update('name', $request->name);

        if (!$updateName) {
            flash()->to('#form-update-name')->error('Failed to update name. Please try again.');
            return to_route('axion.profile');
        }

        flash()->to('#form-update-name')->success('Name updated successfully.');
        return to_route('axion.profile');


    }

    public function deleteAccount(Request $request)
    {
        $password = $request->password;

        if (!$password) {
            flash()->to('#form-delete-account')->error('Password is required.');
            return to_route('axion.profile');
        }

        $user = Auth::user();

        if (!$user) {
            flash()->to('#form-delete-account')->error('Session expired. Please login again.');
            return to_route('login');
        }
        
        if (!hash_check($password, $user->password)) {
            flash()->to('#form-delete-account')->error('Incorrect password.');
            return to_route('axion.profile');
        }

        $deleted = User::where('email', $user->email)->delete();

        if (!$deleted) {
            flash()->to('#form-delete-account')->error('Failed to delete account. Please try again.');
            return to_route('axion.profile');
        }

        Session::destroy();
        return to_route('home');
    }

    public function changePassword(Request $request)
    {
        $errors = validate($request->all(), [
            'current_password'          => 'required',
            'new_password'              => 'required|min:8',
            'new_password_confirmation' => 'required|same:new_password',
        ]);

        if (!empty($errors)) {
            flash()->to('#form-change-password')->error($errors);
            return to_route('axion.profile');
        }

        $user = Auth::user();

        if (!$user) {
            flash()->to('#form-change-password')->error('Session expired. Please login again.');
            return to_route('login');
        }
        
        if (Hash::check($request->current_password, $user->password)) {
            flash()->to('#form-change-password')->error('Incorrect current password.');
            return to_route('axion.profile');
        }

        $changePassword = User::where('id', $user->id)->update('password', bcrypt($request->input('new_password')));

        if (!$changePassword) {
            flash()->to('#form-change-account')->error('Failed to change password. Please try again.');
            return to_route('axion.profile');
        }

        flash()->to('#form-change-password')->success('Password updated successfully.');
        return to_route('axion.profile');

    }

}

