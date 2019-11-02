<?php

// require 'App/Controllers/backend/StoryController.php';
require "vendor/autoload.php";

use App\Controllers\backend\UserController;

try {

    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'addFinnMain') {
            addSound();


            // header("Location: views/backend/EditStory.php");
        } elseif ($_GET['action'] == 'createUser') {
            $newUser = new UserController;
            $addUser = $newUser->createUser();
            header("Location: App/Views/Frontend/Home.php");
        }
    }
} catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
