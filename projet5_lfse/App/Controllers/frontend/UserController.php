<?php

namespace App\Controllers\Frontend;

require "vendor/autoload.php";

use App\Models\UserManager;

class UserController
{
    public function home()
    {


        require 'App/Views/Frontend/Home.php';
    }

    public function register()
    {

        require 'App/Views/Frontend/SignUpView.php';
    }
    public function connect()
    {

        require 'App/Views/Frontend/SignInView.php';
    }


    public function disconnect()
    {


        session_destroy();
    }

    public function createUser()
    {

        $usermanager = new UserManager;

        if (isset($_POST['forminscription'])) {
            //protect html entries
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $mail = htmlspecialchars($_POST['mail']);
            $mail2 = htmlspecialchars($_POST['mail2']);
            $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
            $region = htmlspecialchars($_POST['locality']);



            // check if all fields are not empty
            if (!empty($_POST['pseudo']) and !empty($_POST['mail']) and !empty($_POST['mail2']) and !empty($_POST['pass']) and !empty($_POST['pass2']) and !empty($_POST['locality'])) {
                $pseudolength = strlen($pseudo);
                if ($pseudolength <= 255) {
                    if ($mail == $mail2) {
                        if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                            // check if mail already exists
                            $verify_email = $usermanager->checkMail($mail);
                            $verify_email->execute(array($mail));
                            // check if pseudo already exists
                            $verify_pseudo = $usermanager->checkPseudo($pseudo);
                            $verify_pseudo->execute(array($pseudo));
                            $reqmail = $verify_email->rowCount($mail);
                            $reqpseudo = $verify_pseudo->rowCount($pseudo);



                            if (($reqmail == 0) && ($reqpseudo == 0)) {
                                if ($_POST['pass'] == $_POST['pass2']) {
                                    $usermanager->createUser($pseudo, $mail, $pass, $region);
                                } else {
                                    $error = "Vos mots de passe ne correspondent pas !";
                                }
                            } else {
                                if ($reqmail != 0) {
                                    $error = "Adresse mail déjà utilisée !";
                                } else {
                                    $error = "Pseudo déjà utilisé !";
                                }
                            }
                        } else {
                            $error = "Votre adresse mail n'est pas valide !";
                        }
                    } else {
                        $error = "Vos adresses mail ne correspondent pas !";
                    }
                } else {
                    $error = "Votre pseudo ne doit pas dépasser 255 caractères !";
                }
            } else {
                $error = "Tous les champs doivent être complétés !";
            }
            // require 'App/Views/Frontend/SignUpView.php';
        }
    }
    public function userConnect()
    {

        $usermanager = new UserManager;



        if (isset($_POST['formconnection'])) {
            //secure html entries
            $pseudoconnect = htmlspecialchars($_POST['pseudoconnect']);

            if (!empty($pseudoconnect) and !empty($_POST['passconnect'])) {

                $checkuser = $usermanager->userConnect();

                $userexist = $checkuser->rowCount();



                if ($userexist != 0) {

                    $userCheck = $checkuser->fetch();




                    $mdpconnect = password_verify($_POST['passconnect'], $userCheck['pass']);




                    if ($mdpconnect == true) {



                        $_SESSION['userId'] = $userCheck['userId'];
                        $_SESSION['username'] = $userCheck['username'];
                        $_SESSION['email'] = $userCheck['email'];
                        $_SESSION['isAdmin'] = $userCheck['isAdmin'];
                        var_dump($_SESSION['userId'], $_SESSION['username'],  $_SESSION['email'], $_SESSION['isAdmin']);
                    } else {
                        $error  = "Le mot de passe est incorrect!";
                    }
                } else {
                    $error  = "Le mail n'existe pas !";
                }
            } else {
                $error =  "Tous les champs doivent être complétés !";
            }
        }
        // include 'App/Views/Frontend/SignInView.php';
    }
}
