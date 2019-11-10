<?php
session_start();
require_once "vendor/autoload.php";

use App\Controllers\Frontend\UserController;
use App\Controllers\Backend\BackendController;
use App\Controllers\Backend\StoryController;
use App\Controllers\Backend\Upload;


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
        } elseif ($action == 'createUser') {
            $newUser = new UserController;
            $addUser = $newUser->createUser();
            header('location: index.php?action=connect');
        } elseif ($action == 'userConnect') {
            $checkConnect = new UserController;

            $connectUser = $checkConnect->userConnect();
            if ($_SESSION['isAdmin'] == '1') { // check if Admin connect

                header('location: index.php?action=adminHome'); // if admin is connected, redirect to admin Homepage
            } else {

                header("Location: index.php?action=home"); // if not redirect to user homepage

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
            } elseif ($action == 'adminListUsers') {
                $listUsers = new BackendController;
                $listAllUsers = $listUsers->listUsers();
            } elseif ($action == 'deleteUser') {
                $deleteUser = new BackendController;
                $delete = $deleteUser->deleteUser($_GET['userId']);
            } elseif ($_GET['action'] == 'editStory') {
                $edit = new BackendController;
                $editStory = $edit->editStoryPage();
            } elseif ($action == 'addFinnMain') {
                $addSound = new StoryController;
                $addNewSound = $addSound->addMainSoundFynn($addSound->fileDestination, $_FILES['file']['name'], $_GET['StoryId']);
            } elseif ($action == 'addIsolate1') {
                $addSound = new StoryController;
                $addNewSound = $addSound->addSoundIsolate1($addSound->fileDestination, $_FILES['file']['name'], $_GET['StoryId']);
            } elseif ($action == 'addIsolate2') {
                $addSound = new StoryController;
                $addNewSound = $addSound->addSoundIsolate2($addSound->fileDestination, $_FILES['file']['name'], $_GET['StoryId']);
            } elseif ($action == 'addIsolate3') {
                $addSound = new StoryController;
                $addNewSound = $addSound->addSoundIsolate3($addSound->fileDestination, $_FILES['file']['name'], $_GET['StoryId']);
            } elseif ($action == 'addPolice') {
                $addSound = new StoryController;
                $addNewSound = $addSound->addSoundPolice($addSound->fileDestination, $_FILES['file']['name'], $_GET['StoryId']);
            } elseif ($action == 'addIsolate4') {
                $addSound = new StoryController;
                $addNewSound = $addSound->addSoundIsolate4($addSound->fileDestination, $_FILES['file']['name'], $_GET['StoryId']);
            } elseif ($action == 'addIsolate5') {
                $addSound = new StoryController;
                $addNewSound = $addSound->addSoundIsolate5($addSound->fileDestination, $_FILES['file']['name'], $_GET['StoryId']);
            } elseif ($action == 'addIsolate6') {
                $addSound = new StoryController;
                $addNewSound = $addSound->addSoundIsolate6($addSound->fileDestination, $_FILES['file']['name'], $_GET['StoryId']);
            } elseif ($action == 'updateQuestion1') {
                $question = new StoryController;
                $newQuestion = $question->addQuestion1($_POST['new_question1'], $_POST['new_answer1'], $_GET['StoryId']);
            } elseif ($action == 'updateQuestion2') {
                $question = new StoryController;
                $newQuestion = $question->addQuestion1($_POST['new_question2'], $_POST['new_answer2'], $_GET['StoryId']);
            } elseif ($action == 'updateQuestion3') {
                $question = new StoryController;
                $newQuestion = $question->addQuestion1($_POST['new_question3'], $_POST['new_answer3'], $_GET['StoryId']);
            } elseif ($action == 'updateQuestion4') {
                $question = new StoryController;
                $newQuestion = $question->addQuestion1($_POST['new_question4'], $_POST['new_answer4'], $_GET['StoryId']);
            } elseif ($action == 'updateFinalQuestion') {
                $question = new StoryController;
                $newQuestion = $question->addQuestion1($_POST['final_question'], $_POST['final_answer'], $_GET['StoryId']);
            } elseif ($action == 'addVideo') {
                $addVideo = new StoryController;
                $addNewVideo = $addVideo->addAnswerVideo($addVideo->fileDestination, $_FILES['file']['name'], $_GET['StoryId']);
            } elseif ($action == 'publish') {


                $publish = new StoryController;
                $makeAvailable = $publish->publish($_GET['StoryId']);
            }
        } else {
            throw new Exception("Cet page est réservée à l'administrateur");
        }
    }
} catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
