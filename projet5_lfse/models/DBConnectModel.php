<?php

class DBConnectManager
{

    protected function dbConnect()
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=lfse;charset=utf8', 'root', 'root');
            return $db;
        } catch (Exception $e) {

            die('Erreur : ' . $e->getMessage());
        }
    }
}
