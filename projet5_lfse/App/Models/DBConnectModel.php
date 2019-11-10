<?php

namespace App\Models;

class DBConnectManager
{

    protected function dbConnect()
    {
        try {
            $db = new \PDO('mysql:host=localhost;dbname=lfse;charset=utf8', 'root', 'root',);
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (Exception $e) {

            die('Erreur : ' . $e->getMessage());
        }
    }
}
