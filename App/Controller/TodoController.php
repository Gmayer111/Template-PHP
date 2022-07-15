<?php

namespace App\Controller;

use Core\Controller\Controller;

class TodoController extends Controller {


    public function AddList()
    {
        $this->render('todo.index');
        
    }
}