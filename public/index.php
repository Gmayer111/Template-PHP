<?php

use Core\CoreApp;

define('ROOT', dirname(__DIR__));
require ROOT . '/Core/App.php';

CoreApp::load();

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

if (isset($_GET['action'])) {
    if ($_GET['action'] === 'Contact') {
        $controller = new App\Controller\ContactController;
        $controller->ContactView();
    }else if ($_GET['action'] === 'todo') {
        $controller = new App\Controller\TodoController;
        $controller->AddList();
    }
}else {
    $controller = new App\Controller\HomeController;
    $controller->homeView();
}



