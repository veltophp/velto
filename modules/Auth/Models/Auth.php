<?php

namespace Modules\Auth\Models;

use Velto\Core\Session\Session;

class Auth
{
    public static function user(): ?User
    {
        $session = Session::get('user');

        if (!$session || !isset($session['email'])) {
            return null;
        }

        return User::findBy('email', $session['email']);
    }


    public static function check(): bool
    {
        return self::user() !== null;
    }

    public static function login(User $user): void
    {
        Session::set('user', [
            'name'  => $user->name,
            'email' => $user->email,
        ]);
    }

    public static function logout(): void
    {
        Session::destroy();
    }
}
