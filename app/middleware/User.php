<?php

namespace Velto\App\Middleware;

use Velto\Core\Request\Request;
use Velto\Core\Session\Session;

class User
{
    public static function handle(Request $request, callable $next)
    {
        $user = Session::get('user');

        if (!$user || ($user['role'] ?? 'user') !== 'user') {
            abort(404, "Only regular users can access this page.");
        }

        return $next($request);
    }
}
