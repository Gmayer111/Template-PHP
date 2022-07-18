<?php

namespace Core\Controller;


class Controller {


    protected $viewPath = '../App/views/';
    protected $template;


    public function render($view) {

        ob_start();
        require($this->viewPath . str_replace('.', '/', $view) . '.php');
        $content = ob_get_clean();
        require($this->viewPath . 'layouts/default' . $this->template . '.php');

    }

        // Je dois require le dossier controller
    // Je passe en param le nom du controleur et le nom de la fonction
    // public function loadController($controller, $fn)
    // {

    //     $controller_from = '../App/Controller/' . $controller . '.php';
    //     $viewFn = $controller_from . '->' . $fn;
    //     require($viewFn);
    // }

}