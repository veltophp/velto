<?php

/**
 * VeltoPHP Front Controller
 *
 * This is the main entry point for all web requests.
 * Its responsibilities include initializing the environment, loading dependencies,
 * handling sessions, setting up view configuration, managing exceptions,
 * and starting the VeltoPHP application.
 */

define('VELTO_START', microtime(true));
define('BASE_PATH', dirname(__DIR__));

require BASE_PATH . '/vendor/autoload.php';

if (function_exists('isMaintenance') && isMaintenance()) {
    http_response_code(503);
    require BASE_PATH . '/vendor/veltophp/velto-core/maintenance/index.html';
    exit;
}

use Velto\Core\App;
use Velto\Core\View;
use Velto\Core\Env;
use Velto\Core\Request;

Env::load(BASE_PATH . '/.env');

View::configure(

    BASE_PATH . '/views',
    BASE_PATH . '/storage/cache/views'

);

set_exception_handler([App::class, 'handleException']);

$request = new Request();

if (class_exists('Velto\\Axion\\Axion')) {

    try {
        \Velto\Axion\Axion::boot();

        $middleware = new \Velto\Axion\Middleware\VerifyCsrfToken();

        $middleware->handle($request, function ($request) {
            $routePath = BASE_PATH . '/axion/routes/web.php';

            if (file_exists($routePath)) {
                require $routePath;
            } else {
                require BASE_PATH . '/routes/web.php';
            }
        });

    } catch (\Throwable $e) {
        velto_log("Error loading or using Axion middleware: " . $e->getMessage());
        require BASE_PATH . '/routes/web.php';
    }

} else {
    require BASE_PATH . '/routes/web.php';
}


App::run();