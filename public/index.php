<?php
/**
 * VeltoPHP Framework Entry Point
 *
 * This file serves as the main entry point for VeltoPHP, initializing the framework,
 * loading core components, and handling incoming requests. Created by Ketut Dana.
 *
 * @package VeltoPHP
 * @author  Ketut Dana <dev@veltophp.com>
 * @version 2.0
 */

// Record start time for performance tracking
define('VELTO_START', microtime(true));

// Define core paths with validation to prevent path traversal
$basePath = realpath(dirname(__DIR__));
if ($basePath === false || !is_dir($basePath)) {
    exit('Error: Invalid base path. Please check your installation.');
}
define('BASE_PATH', $basePath);
define('MODULES_PATH', BASE_PATH . '/modules');
define('CONFIG_PATH', BASE_PATH . '/config');

// Securely include Composer's autoloader
$autoloadPath = BASE_PATH . '/vendor/autoload.php';
if (!file_exists($autoloadPath)) {
    exit('Error: Composer autoloader not found. Run `composer install`.');
}
require_once $autoloadPath;

// Load VeltoPHP core helpers
$helpersPath = BASE_PATH . '/vendor/veltophp/velto-core/src/Helper/LoadHelpers.php';
if (!file_exists($helpersPath)) {
    exit('Error: VeltoPHP core helpers not found.');
}
require_once $helpersPath;

use Velto\Core\View\View;
use Velto\Core\Env\Env;
use Velto\Core\App\Kernel;
use Velto\Core\Session\Session;

// Load environment variables securely
$envPath = BASE_PATH . '/.env';
if (file_exists($envPath) && is_readable($envPath)) {
    Env::load($envPath);
} else {
    exit('Error: .env file is missing or not readable.');
}

// Configure secure session settings
ini_set('session.cookie_httponly', '1'); // Prevent JavaScript access to session cookies
ini_set('session.cookie_secure', '1');   // Ensure cookies are sent over HTTPS only
ini_set('session.cookie_samesite', 'Strict'); // Mitigate CSRF attacks
ini_set('session.use_strict_mode', '1'); // Prevent session fixation
Session::start();

// Configure view paths with validation
$viewCachePath = BASE_PATH . '/resources/cache/views';
if (!is_dir($viewCachePath) && !mkdir($viewCachePath, 0755, true)) {
    exit('Error: Unable to create view cache directory.');
}
View::configure(MODULES_PATH, $viewCachePath);

// Initialize and run the application kernel
try {
    $kernel = new Kernel();
    $kernel->run();
} catch (Throwable $e) {
    // Log error (implement logging in production) and show generic message
    http_response_code(500);
    exit('Internal Server Error. Please contact the administrator.');
}

// Ensure no output after kernel execution
exit;