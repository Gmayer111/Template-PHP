<?php

use App\Router;

require '../vendor/autoload.php';

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$router = new Router(dirname(__DIR__). '/views');
$router
    ->get('/', 'home/index', 'home')
    ->run();

