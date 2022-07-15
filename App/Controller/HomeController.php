<?php

namespace App\Controller;

use Core\Controller\Controller;

class HomeController extends Controller {

    public function homeView() 
    {
        $this->render('home.index');
    }

}