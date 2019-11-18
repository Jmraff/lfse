<?php

namespace App\Models;


use App\Models\DBConnectManager;



class UserManager extends DBConnectManager
{





    //check if the email already exists
    public function checkMail($mail)
    {

        $db = $this->dbConnect();
        $reqmail = $db->prepare("SELECT * FROM Users WHERE email = ?");
        $reqmail->execute(array($mail));
        return $reqmail;
    }

    //check if the email already exists
    public function checkPseudo($pseudo)
    {
        $db = $this->dbConnect();
        $reqpseudo = $db->prepare("SELECT * FROM Users WHERE username = ?");
        $reqpseudo->execute(array($pseudo));
        return $reqpseudo;
    }


    public function createUser($pseudo, $mail, $pass, $region)
    {

        $db = $this->dbConnect();
        $insertmbr = $db->prepare("INSERT INTO Users(username, email, pass, region) VALUES(?, ?, ?, ?)");
        $insertmbr->execute(array($pseudo, $mail, $pass, $region));
        return $insertmbr;
    }
    public function userConnect($mailConnect)
    {
        $db = $this->dbConnect();
        $reqpass = $db->prepare("SELECT userId, username, email, pass, isAdmin FROM Users WHERE email = ? ");
        $reqpass->execute(array($mailConnect));

        return $reqpass;
    }
    public function nbUsers()
    {
        $db = $this->dbConnect();
        $nbUsers = $db->prepare('SELECT userId AS nbUsers FROM Users where isAdmin = 0');
        $nbUsers->execute();
        $nbTotalUsers = $nbUsers->rowCount();
        var_dump($nbTotalUsers);



        return $nbTotalUsers;
    }


    public function listUsers($start, $usersPerPage)
    {
        $db = $this->dbConnect();


        $reqmailusers = $db->prepare('SELECT * FROM Users WHERE isAdmin = 0 ORDER BY email DESC LIMIT ' . $start . ',' . $usersPerPage);
        $reqmailusers->execute(array());



        return $reqmailusers;
    }
    public function deleteUser($userId)
    {

        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM Users WHERE userId = ?');
        $req->execute(array($userId));
    }
}
