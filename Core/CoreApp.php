<?php

namespace Core;

use App\Connection;
use App\Controller\HomeController;

class CoreApp {

    const DB_NAME = 'todo';
    const DB_USER = 'root';
    const DB_PASS = 'root';
    const DB_HOST = 'localhost';

    private static $title = 'Mon super titre';
    private static $db;
    protected $viewPath = '../App/Controller/';


    public static function load()
    {
        session_start();
        require '../vendor/autoload.php';
        // $whoops = new \Whoops\Run;
        // $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        // $whoops->register();
    }


    public function getDb()
    {
        if (self::$db === null) {
            self::$db = new Connection(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST);
        }
        return self::$db;

        
    }


    public static function notFound()
    {
        header("HTTP/1.0 404 not found");
        header("Location:index.php?action=404");
    }
    public static function loadController($controller, $fn)
    {

        $controller_from = new ('App\Controller\\' . $controller);
        print_r($controller_from->homeView());
            


        
    }

    // public function getTitle()
    // {
    //     return self::$title;
    // }

    // public function setTitle($title)
    // {
    //     self::$title = $title;
    // }
}