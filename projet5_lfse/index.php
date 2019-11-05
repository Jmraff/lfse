<?php
session_start();
require_once "vendor/autoload.php";

use App\Controllers\Frontend\UserController;
use App\Controllers\Backend\BackendController;
use App\Controllers\Backend\StoryController;

try {
    $action = $_GET['action'];
    if (isset($action)) {
        if ($action == 'home') {
            $home = new UserController;
            $goHome = $home->home();




            // Connection routes
        } elseif ($action == 'register') {

            $register = new UserController;
            $createAccount = $register->register();
        } elseif ($action == 'connect') {
            $connect = new UserController;
            $connection = $connect->connect();
        } elseif ($_GET['action'] == 'createUser') {
            $newUser = new UserController;
            $addUser = $newUser->createUser();
            header('location: index.php?action=connect');
        } elseif ($action == 'userConnect') {
            $checkConnect = new UserController;

            $connectUser = $checkConnect->userConnect();
            if ($_SESSION['isAdmin'] == '1') { // check if Admin connect

                header('location: index.php?action=adminHome'); // if admin is connected, redirect to admin Homepage
            } else {
                echo ('great');
            }
            // header("Location: index.php?action=home"); // if not redirect to user homepage

        } elseif ($action == 'disconnect') {
            if (isset($_SESSION['userId'])) {
                $kill = new UserController;

                $sessionKill = $kill->disconnect();
                header("Location: index.php?action=home");
            }






            // Admin Routes
        } elseif ($_SESSION['isAdmin'] == '1') {



            if ($action == 'adminHome') {
                $admin = new BackendController;
                $adminHome = $admin->adminHome();
            } elseif ($action == 'newStory') {
                $add = new StoryController;
                $addStory = $add->newStory();
            } elseif ($action == 'addStory') {
                $addNew = new StoryController;
                $addNewStory = $addNew->addStory($_POST['story_title']);
            } elseif ($action == 'adminListStories') {
                $listStories = new BackendController;
                $adminList = $listStories->listStories();
            } elseif ($_GET['action'] == 'editStory') {
                $edit = new BackendController;
                $editStory = $edit->editStoryPage();
            } elseif ($action == 'addFinnMain') {
                $addSound = new StoryController;
                $addNewSound = $addSound->addMainSoundFynn($fileDestination, $fileName, $_GET['StoryId']);
            }
            //         addSound();













            // if (isset($_GET['action'])) {
            //     if ($_GET['action'] == 'addFinnMain') {
            //         addSound();


            //         // header("Location: views/backend/EditStory.php");

        }
    }
} catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
