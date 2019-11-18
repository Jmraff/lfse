<?php

namespace App\Models;

class DBConnectManager
{

    protected function dbConnect()
    {
        try {
            $db = new \PDO('mysql:host=db5000224049.hosting-data.io;dbname=dbs218724;charset=utf8', 'dbu340435', '@Narcos24',);
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (Exception $e) {

            die('Erreur : ' . $e->getMessage());
        }
    }
}
