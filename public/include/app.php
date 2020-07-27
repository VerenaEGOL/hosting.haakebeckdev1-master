<?php 

use Whoops\Run;
use Dotenv\Dotenv;
use Whoops\Handler\PrettyPageHandler;

/**
 * Compose Autoload
 */
require __DIR__ . '/../../private/vendor/autoload.php';

/**
 * Load Dotenv
 */
$dotenv = new Dotenv(__DIR__ . '/../../');
$dotenv->load();

/**
 * PDO
 */
require __DIR__ . '/pdo.php';

/**
 * General Config and functions
 */
require __DIR__ . '/config.php';
require __DIR__ . '/../../private/functions.php';

/**
 * Debug Mode
 */
if (getenv('MARLIN_STAGE') != 'production') {
    error_reporting();
    ini_set('display_errors', 1);

    $whoops = new Run;
    $whoops->pushHandler(new PrettyPageHandler);
    $whoops->register();
}