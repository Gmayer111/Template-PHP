<?php

define('ROOT', dirname(__DIR__));
require ROOT . '/app/App.php';

require '../vendor/autoload.php';



    
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

if (isset($_GET['action'])) {
    if ($_GET['action'] === 'Contact') {
        $controller = new App\Controller\ContactController();
        $controller->ContactView();
    }
}else {
    $controller = new App\Controller\HomeController();
    $controller->homeView();
}



