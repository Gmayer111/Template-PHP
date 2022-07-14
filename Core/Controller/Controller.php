<?php

namespace Core\Controller;


class Controller {


    protected $viewPath = '../App/views/';
    protected $template = 'layouts/default';


    public function render($view) {

        ob_start();
        require($this->viewPath . str_replace('.', '/', $view) . '.php');
        $content = ob_get_clean();
        require($this->viewPath . $this->template . '.php');


    }

}