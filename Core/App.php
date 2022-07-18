<?php

namespace Core;

use App\Connection;

class CoreApp {

    const DB_NAME = 'todo';
    const DB_USER = 'root';
    const DB_PASS = 'root';
    const DB_HOST = 'localhost';

    private static $title = 'Mon super titre';
    private static $db;


    public static function load()
    {
        session_start();
        require '../vendor/autoload.php';
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

    // public function getTitle()
    // {
    //     return self::$title;
    // }

    // public function setTitle($title)
    // {
    //     self::$title = $title;
    // }
}