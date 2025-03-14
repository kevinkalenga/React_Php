<?php

abstract class Model
{
    private static $pdo;

    private static function setBdd()
    {
        self::$pdo = new PDO("mysql:host=localhost;dbname=dbanimaux;charset=utf8", "root", "");
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    // Fonction permettant à recup la connexion

    protected function getBdd()
    {
        if (self::$pdo === null) {
            self::setBdd();
        }
        return self::$pdo;
    }

    //renvois de data au format json
    public static function sendJSON($info)
    {
        // tout le monde pourra ecceder pour recup la data(frontend) et la data sera au format json
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json");
        echo json_encode($info);
    }
}
