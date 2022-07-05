<?php

require '../vendor/autoload.php';

use \App\Controller\TestController;

$controller = new TestController();

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'viewTest') {

        }
    }else {
        $controller->viewTest();
    }
} catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}

