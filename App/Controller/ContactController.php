<?php

namespace App\Controller;

use Core\Controller\Controller;

class ContactController extends Controller{

    public function contactView() 
    {
        $this->render('contact.index');
    }
}