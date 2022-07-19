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

    public static function loadController(string $controller, string $fn)
    {

        $controller = new ('App\Controller\\' . $controller);
        // Je passe la variable fn en méthode d'instance
        echo $controller->${'fn'}();                    
    }

}