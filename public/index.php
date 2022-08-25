<?php

require_once __DIR__.'/../vendor/autoload.php';

use KrisnaBeaute\BelajarPhpMvc\App\Router;
use KrisnaBeaute\BelajarPhpMvc\Controller\HomeController;
use KrisnaBeaute\BelajarPhpMvc\Controller\ProductController;
use KrisnaBeaute\BelajarPhpMvc\Middleware\AudhMiddleware;

Router::add('GET', '/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)', ProductController::class, 'categories');

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello', [AudhMiddleware::class]);
Router::add('GET', '/world', HomeController::class, 'world', [AudhMiddleware::class]);
Router::add('GET', '/about', HomeController::class, 'about');

Router::run();