<?php

define('VELTO_START', microtime(true));


require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../vendor/veltophp/velto-core/src/helper/LoadHelpers.php';


use Velto\Core\View\View;
use Velto\Core\Env\Env;
use Velto\Core\App\Kernel;
use Velto\Core\Session\Session;

Env::load(__DIR__ . '/../.env');

define('BASE_PATH', dirname(__DIR__));
define('MODULES_PATH', BASE_PATH . '/modules');
define('CONFIG_PATH', BASE_PATH . '/config');

Session::start();

View::configure(MODULES_PATH, BASE_PATH . '/resources/cache/views');

$kernel = new Kernel();
$kernel->run();
