<?php

require __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;

/**
 * Load variable env
 **/

$env = Dotenv::create(__DIR__);
$env->load();

/**
 * Config database
 * */

define('__ROOT__', dirname(__FILE__));

define('DB_HOST',   (isset($_ENV['DB_HOST'])) ? $_ENV['DB_HOST'] : '127.0.0.1');
define('DB_NAME',   (isset($_ENV['DB_NAME'])) ? $_ENV['DB_NAME'] : 'todo');
define('DB_USER',   (isset($_ENV['DB_USER'])) ? $_ENV['DB_USER'] : 'root');
define('DB_PASS',   (isset($_ENV['DB_PASS'])) ? $_ENV['DB_PASS'] : '');

ini_set('error_reporting', E_ALL);
