<?php

define('VELTO_START', microtime(true));

if (!defined('BASE_PATH')) {
    define('BASE_PATH', dirname(__DIR__));
}

if (!defined('MODULES_PATH')) {
    define('MODULES_PATH', BASE_PATH . '/modules');
}

if (!defined('CONFIG_PATH')) {
    define('CONFIG_PATH', BASE_PATH . '/config');
}

require_once BASE_PATH . '/vendor/autoload.php';
require_once BASE_PATH . '/vendor/veltophp/velto-core/src/helper/LoadHelpers.php';

use Velto\Core\View\View;
use Velto\Core\Env\Env;
use Velto\Core\App\Kernel;
use Velto\Core\Session\Session;

Env::load(BASE_PATH . '/.env');

Session::start();

View::configure(MODULES_PATH, BASE_PATH . '/resources/cache/views');

$kernel = new Kernel();
$kernel->run();
