<?php

namespace App\Controllers\Frontend;

require "vendor/autoload.php";

use App\Models\UserManager;
use Exception;

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
        $userForm = $_POST['formData'];

        $userForm = array();
        parse_str($_POST['formData'], $userForm);
        echo $userForm['input1']; //Outputs 'meeting


        if (isset($userForm)) {





            //protect html entries
            $pseudo = htmlspecialchars($userForm['pseudo']);
            $mail = htmlspecialchars($userForm['mail']);
            $mail2 = htmlspecialchars($userForm['mail2']);
            $pass = htmlspecialchars($userForm['pass']);
            $pass2 = htmlspecialchars($userForm['pass2']);
            $region = htmlspecialchars($userForm['locality']);


            // check if all fields are not empty
            if (!empty($pseudo) && !empty($mail) && !empty($mail2) && !empty($pass) && !empty($pass2) && !empty($region)) {
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
                                if ($pass == $pass2) {
                                    $pass = password_hash($userForm['pass'], PASSWORD_DEFAULT);
                                    $usermanager->createUser($pseudo, $mail, $pass, $region);
                                    echo 'create';
                                } else {
                                    // $error = "Vos mots de passe ne correspondent pas !";
                                    echo 'passDiffer';
                                }
                            } else {
                                if ($reqmail != 0) {
                                    // $error = "Adresse mail déjà utilisée !";
                                    echo 'mailUsed';
                                } else {
                                    // $error = "Pseudo déjà utilisé !";
                                    echo 'pseudoUsed';
                                }
                            }
                        } else {
                            // $error = "Votre adresse mail n'est pas valide !";
                            echo 'invalidMail';
                        }
                    } else {
                        // $error = "Vos adresses mail ne correspondent pas !";
                        echo 'mailDiffer';
                    }
                } else {
                    // $error = "Votre pseudo ne doit pas dépasser 255 caractères !";
                    echo 'tooLong';
                }
            } else {
                // $error = "Tous les champs doivent être complétés !";
                echo 'empty';
            }
            return true;
        } else {
            echo ('loupé1');
            return false;
        }
    }
    public function userConnect()
    {

        $usermanager = new UserManager;

        $connectForm = $_POST['connectData'];

        $connectForm = array();
        parse_str($_POST['connectData'], $connectForm);
        echo $connectForm['input1']; //Outputs 'meeting
        if (isset($connectForm)) {
            //secure html entries
            $mailConnect = htmlspecialchars($connectForm['emailConnectName']);

            if (!empty($mailConnect) && !empty($connectForm['passconnect'])) {

                $checkuser = $usermanager->userConnect($mailConnect);

                $userexist = $checkuser->rowCount();



                if ($userexist != 0) {

                    $userCheck = $checkuser->fetch();
                    $mdpconnect = password_verify($connectForm['passconnect'], $userCheck['pass']);
                    if ($mdpconnect == true) {



                        $_SESSION['userId'] = $userCheck['userId'];
                        $_SESSION['username'] = $userCheck['username'];
                        $_SESSION['email'] = $userCheck['email'];
                        $_SESSION['isAdmin'] = $userCheck['isAdmin'];
                        if ($_SESSION['isAdmin'] == 1) {
                            echo 'adminConnect';
                        } else {
                            echo 'userConnect';
                        }
                    }
                } else {


                    echo 'connectFailure';
                }
            } else {
                echo 'emptyField';
            }
            return true;
        }




        // include 'App/Views/Frontend/SignInView.php';
    }
}
