<?php

use Core\Controller\Controller;
use Core\CoreApp;

define('ROOT', dirname(__DIR__));
require ROOT . '/Core/CoreApp.php';

CoreApp::load();

if (isset($_GET['action'])) {
    if ($_GET['action'] === 'Contact') {
        Controller::loadController('ContactController', 'ContactView');
    }else if ($_GET['action'] === 'todo') {
        Controller::loadController('TodoController', 'AddList');
    }
}else {
    Controller::loadController('HomeController', 'homeView');
}



