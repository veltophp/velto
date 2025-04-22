<?php

require __DIR__ . '/../vendor/autoload.php';

use Velto\Core\App;
use Velto\Core\View;
use Velto\Core\Env;

// Load env dulu
Env::load(__DIR__ . '/../.env');

// dd('APP_DEBUG:', Env::get('APP_DEBUG'), Env::isDebug());


View::configure(
    __DIR__ . '/../views',
    __DIR__ . '/../storage/cache/views'
);

define('VELTO_START', microtime(true));
define('BASE_PATH', dirname(__DIR__));

require __DIR__ . '/../routes/web.php';

set_exception_handler([App::class, 'handleException']);

App::run();