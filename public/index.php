<?php


use Core\CoreApp;

define('ROOT', dirname(__DIR__));
require ROOT . '/Core/CoreApp.php';

CoreApp::load();

if (isset($_GET['action'])) {
    if ($_GET['action'] === 'Contact') {
        CoreApp::loadController('ContactController', 'ContactView');
    }else if ($_GET['action'] === 'todo') {
        CoreApp::loadController('TodoController', 'AddList');
    }
}else {
    CoreApp::loadController('HomeController', 'homeView');
}



