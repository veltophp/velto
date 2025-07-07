<?php

namespace Velto\App\Middleware;

use Velto\Core\Request\Request;
use Velto\Core\Session\Session;

class Admin
{
    public static function handle(Request $request, callable $next)
    {
        $user = Session::get('user');

        if (!$user || ($user['role'] ?? 'user') !== 'admin') {
            abort(404, "You don't have authority to access this page!");
        }
        
        return $next($request);
    }

}
