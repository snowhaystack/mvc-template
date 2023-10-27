<?php

/**
 * Front controller
 *
 * PHP version 7.0
 */

/**
 * Composer
 */
require dirname(__DIR__) . '/vendor/autoload.php';
ini_set('session.name', 'PHPSESSNTVERIFICAID');
session_start();

/**
 * Error and Exception handling
 */
error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');

ini_set("log_errors", 1);
ini_set("error_log", "logs/error_error.log");
ini_set('max_execution_time', -1);
ini_set('memory_limit', '3556M');
date_default_timezone_set('Europe/Rome');

$router = new Core\Router();
$router->add('/api/analyze', ['controller' => 'HomeController', 'action' => 'analyze']);
$router->dispatch($_SERVER['QUERY_STRING']);
