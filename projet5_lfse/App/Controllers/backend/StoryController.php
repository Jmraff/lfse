<?php

namespace App\Controllers\Backend;

require "vendor/autoload.php";

use App\Controllers\Backend\Upload;
use App\Models\StoryManager;


class StoryController
{

    public $fileDestination;

    // public $file;

    // public $fileName;
    // public   $fileTmpName;
    // public   $fileSize;
    // public   $fileError;
    // public   $fileType;

    // public $fileExt;
    // public   $fileActualExt;
    // // var_dump('=filetypeAct' . $fileActualExt);

    // public $allowed;
    public function newStory()
    {

        require 'App/Views/Backend/AddStory.php';
    }
    public function addStory($storyName)
    {

        if (!empty($_POST['story_title'])) {
            $addStory = new StoryManager;
            $newStory = $addStory->createStory($storyName);
        } else {
            $error = "Le titre est obligatoire";
        }
    }
    public function publish($updateStoryId)
    {
        if (isset($_POST['publish'])) {
            $publishOrNot = $_POST['makeAvailable'];
            if ($publishOrNot == 'online') {
                $publish = new StoryManager;
                $available = $publish->publish($updateStoryId);
                header('Location: index.php?action=editStory&StoryId=' . $updateStoryId);
            } else {
                $unpublish = new StoryManager;
                $unavailable = $unpublish->unpublish($updateStoryId);
                header('Location: index.php?action=editStory&StoryId=' . $updateStoryId);
            }
        }
    }








    public function addVideo()

    {


        $file = $_FILES['file'];

        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $this->fileDestination = '/Users/jean-maryraffegeau/Documents/mampfolders/lfse/projet5_lfse/App/uploads/' . $fileName;
        $allowed = 'mp4';




        if (strcmp($fileActualExt, $allowed) == 0) {

            if ($fileError === 0) {
                if ($fileSize < 8000000) {



                    $result = move_uploaded_file($fileTmpName, $this->fileDestination);
                } else {
                    echo "Le fichier dépasse la taille autorisée";
                }
            } else {
                echo  "Une erreur est survenue durant l'import";
            }
        } else {
            echo "Seul le format MP4 est accepté" . $fileActualExt . $allowed;
        }
    }




    public function addSound()

    {


        $file = $_FILES['file'];

        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $this->fileDestination = '/Users/jean-maryraffegeau/Documents/mampfolders/lfse/projet5_lfse/App/uploads/' . $fileName;
        $allowed = 'mp3';



        if (strcmp($fileActualExt, $allowed) == 0) {

            if ($fileError === 0) {
                if ($fileSize < 8000000) {



                    $result = move_uploaded_file($fileTmpName, $this->fileDestination);
                } else {
                    echo "Le fichier dépasse la taille autorisée";
                }
            } else {
                echo  "Une erreur est survenue durant l'import";
            }
        } else {
            echo "Seul le format MP3 est accepté" . $fileActualExt . $allowed;
        }
    }




    public function addMainSoundFynn($fileDestination, $fileName, $updateStoryId)
    {
        if (isset($_POST['submit_finn'])) {


            $sound = $this->addSound();

            $addSound = new StoryManager;

            $addNewSound = $addSound->addSoundFinn($this->fileDestination, $fileName, $updateStoryId);
            header('Location: index.php?action=editStory&StoryId=' . $updateStoryId);
        }
    }
    public function addSoundIsolate1($fileDestination, $fileName, $updateStoryId)
    {
        if (isset($_POST['submit_isolate1'])) {
            $sound = $this->addSound();
            $addSound = new StoryManager;
            $addNewSound1 = $addSound->addSoundIsolate1($this->fileDestination, $fileName, $updateStoryId);
            header('Location: index.php?action=editStory&StoryId=' . $updateStoryId);
        }
    }
    public function addSoundIsolate2($fileDestination, $fileName, $updateStoryId)
    {
        if (isset($_POST['submit_isolate2'])) {
            $sound = $this->addSound();
            $addSound = new StoryManager;
            $addNewSound1 = $addSound->addSoundIsolate2($this->fileDestination, $fileName, $updateStoryId);
            header('Location: index.php?action=editStory&StoryId=' . $updateStoryId);
        }
    }
    public function addSoundIsolate3($fileDestination, $fileName, $updateStoryId)
    {
        if (isset($_POST['submit_isolate3'])) {
            $sound = $this->addSound();
            $addSound = new StoryManager;
            $addNewSound1 = $addSound->addSoundIsolate3($this->fileDestination, $fileName, $updateStoryId);
            header('Location: index.php?action=editStory&StoryId=' . $updateStoryId);
        }
    }
    public function addSoundPolice($fileDestination, $fileName, $updateStoryId)
    {
        if (isset($_POST['submit_police'])) {
            $sound = $this->addSound();
            $addSound = new StoryManager;
            $addNewSound = $addSound->addSoundPolice($this->fileDestination, $fileName, $updateStoryId);
            header('Location: index.php?action=editStory&StoryId=' . $updateStoryId);
        }
    }
    public function addSoundIsolate4($fileDestination, $fileName, $updateStoryId)
    {
        if (isset($_POST['submit_isolate4'])) {
            $sound = $this->addSound();
            $addSound = new StoryManager;
            $addNewSound1 = $addSound->addSoundIsolate4($this->fileDestination, $fileName, $updateStoryId);
            header('Location: index.php?action=editStory&StoryId=' . $updateStoryId);
        }
    }
    public function addSoundIsolate5($fileDestination, $fileName, $updateStoryId)
    {
        if (isset($_POST['submit_isolate5'])) {
            $sound = $this->addSound();
            $addSound = new StoryManager;
            $addNewSound1 = $addSound->addSoundIsolate5($this->fileDestination, $fileName, $updateStoryId);
            header('Location: index.php?action=editStory&StoryId=' . $updateStoryId);
        }
    }
    public function addSoundIsolate6($fileDestination, $fileName, $updateStoryId)
    {
        if (isset($_POST['submit_isolate6'])) {
            $sound = $this->addSound();
            $addSound = new StoryManager;
            $addNewSound1 = $addSound->addSoundIsolate6($this->fileDestination, $fileName, $updateStoryId);
            header('Location: index.php?action=editStory&StoryId=' . $updateStoryId);
        }
    }
    public function addQuestion1($question, $answer, $updateStoryId)
    {
        if (isset($_POST['submit_question1'])) {

            if (!empty($_POST['new_question1']) && !empty($_POST['new_answer1'])) {

                $updateQuestion = new StoryManager();

                $insertQuestion = $updateQuestion->addQuestion1($question, $answer, $updateStoryId);
                header('Location: index.php?action=editStory&StoryId=' . $updateStoryId);
            } else {
                echo 'un truc';
            }
        }
    }
    public function addQuestion2($question, $answer, $updateStoryId)
    {
        if (isset($_POST['submit_question2'])) {

            if (!empty($_POST['new_question2']) && !empty($_POST['new_answer2'])) {

                $updateQuestion = new StoryManager();

                $insertQuestion = $updateQuestion->addQuestion2($question, $answer, $updateStoryId);
                header('Location: index.php?action=editStory&StoryId=' . $updateStoryId);
            } else {
                echo 'un truc';
            }
        }
    }
    public function addQuestion3($question, $answer, $updateStoryId)
    {
        if (isset($_POST['submit_question3'])) {

            if (!empty($_POST['new_question3']) && !empty($_POST['new_answer3'])) {

                $updateQuestion = new StoryManager();

                $insertQuestion = $updateQuestion->addQuestion3($question, $answer, $updateStoryId);
                header('Location: index.php?action=editStory&StoryId=' . $updateStoryId);
            } else {
                echo 'un truc';
            }
        }
    }
    public function addQuestion4($question, $answer, $updateStoryId)
    {
        if (isset($_POST['submit_question4'])) {

            if (!empty($_POST['new_question4']) && !empty($_POST['new_answer4'])) {

                $updateQuestion = new StoryManager();

                $insertQuestion = $updateQuestion->addQuestion4($question, $answer, $updateStoryId);
                header('Location: index.php?action=editStory&StoryId=' . $updateStoryId);
            } else {
                echo 'un truc';
            }
        }
    }
    public function addFinalAnswer($question, $answer, $updateStoryId)
    {
        if (isset($_POST['submit_finalQuestion'])) {

            if (!empty($_POST['final_question']) && !empty($_POST['final_answer'])) {

                $updateQuestion = new StoryManager();

                $insertQuestion = $updateQuestion->addFinalAnswer($question, $answer, $updateStoryId);
                header('Location: index.php?action=editStory&StoryId=' . $updateStoryId);
            } else {
                echo 'un truc';
            }
        }
    }
    public function addAnswerVideo($fileDestination, $fileName, $updateStoryId)
    {
        if (isset($_POST['submit_video'])) {
            $video = $this->addVideo();


            $addVideo = new StoryManager;
            $addNewVideo = $addVideo->addAnswerVideo($this->fileDestination, $fileName, $updateStoryId);
            header('Location: index.php?action=editStory&StoryId=' . $updateStoryId);
        }
    }
}
