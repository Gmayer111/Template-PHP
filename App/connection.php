<?php

namespace App;

use PDO;

class Connection {

    public static function getPdo(): PDO
    {
        return $pdo = new PDO('mysql:dbname=todolist;host=localhost', 'root', 'root', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    }

}