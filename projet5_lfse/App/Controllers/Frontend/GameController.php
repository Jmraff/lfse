<?php

namespace App\Controllers\Frontend;



use App\Models\StoryManager;

class GameController
{

    public function userConnected()
    {


        require 'App/Views/Frontend/GameHome.php';
    }
    public function listGames()
    {
        $loadStories = new StoryManager;
        $displayStories = $loadStories->listStories();
    }
    public function displayStory($StoryId)
    {
        $loadStory = new StoryManager;
        $displayStory = $loadStory->displaySingleStory($_GET['StoryId']);
        $currentStory = $_GET['StoryId'];

        require 'App/Views/Frontend/DisplayStory.php';
    }
    public function playVideo($StoryId)
    {
        $loadStory = new StoryManager;
        $displayStory = $loadStory->displaySingleStory($_GET['StoryId']);
        $currentStory = $_GET['StoryId'];
        require 'App/Views/Frontend/VideoSuccess.php';
    }
    public function verifyAnswer1($storyId)
    {

        $getAnswers = new StoryManager;
        $answers = $getAnswers->checkAnswers($_GET['StoryId']);
        $transliterator = \Transliterator::create('NFD; [:Nonspacing Mark:] Remove; NFC');
        $checkAnswer1 = $transliterator->transliterate($answers['answer1']);
        $userAnswer1 = $transliterator->transliterate($_POST['dataPost1']);


        if (isset($_POST['dataPost1'])) {


            if ($checkAnswer1 == $userAnswer1) {

                echo "success";
            } else {

                echo "fail";
            }
            return true;
        } else {
            echo ('loupé1');
            return false;
        }
    }



    public function verifyAnswer2($storyId)
    {

        $getAnswers = new StoryManager;
        $answers = $getAnswers->checkAnswers($_GET['StoryId']);
        $transliterator = \Transliterator::create('NFD; [:Nonspacing Mark:] Remove; NFC');
        $checkAnswer2 = $transliterator->transliterate($answers['answer2']);
        $userAnswer2 = $transliterator->transliterate($_POST['dataPost2']);


        if (isset($_POST['dataPost2'])) {


            if ($checkAnswer2 == $userAnswer2) {

                echo "success";
            } else {

                echo "fail";
            }
            return true;
        } else {
            echo ('loupé2');
            return false;
        }
    }



    public function verifyAnswer3($storyId)
    {

        $getAnswers = new StoryManager;
        $answers = $getAnswers->checkAnswers($_GET['StoryId']);
        $transliterator = \Transliterator::create('NFD; [:Nonspacing Mark:] Remove; NFC');
        $checkAnswer3 = $transliterator->transliterate($answers['answer3']);
        $userAnswer3 = $transliterator->transliterate($_POST['dataPost3']);


        if (isset($_POST['dataPost3'])) {


            if ($checkAnswer3 == $userAnswer3) {

                echo "success";
            } else {

                echo "fail";
            }
            return true;
        } else {
            echo ('loupé3');
            return false;
        }
    }



    public function verifyAnswer4($storyId)
    {

        $getAnswers = new StoryManager;
        $answers = $getAnswers->checkAnswers($_GET['StoryId']);
        $transliterator = \Transliterator::create('NFD; [:Nonspacing Mark:] Remove; NFC');
        $checkAnswer4 = $transliterator->transliterate($answers['answer4']);
        $userAnswer4 = $transliterator->transliterate($_POST['dataPost4']);

        if (isset($_POST['dataPost4'])) {

            if ($checkAnswer4 == $userAnswer4) {


                echo "success";
            } else {

                echo "fail";
            }
            return true;
        } else {
            echo ('loupé4');
            return false;
        }
    }


    public function verifyAnswerFinal($storyId)
    {

        $getAnswers = new StoryManager;
        $answers = $getAnswers->checkAnswers($_GET['StoryId']);
        $transliterator = \Transliterator::create('NFD; [:Nonspacing Mark:] Remove; NFC');
        $checkAnswerFinal = $transliterator->transliterate($answers['finalAnswer']);
        $userAnswerFinal = $transliterator->transliterate($_POST['dataPostFinal']);


        if (isset($_POST['dataPostFinal'])) {


            if ($checkAnswerFinal == $userAnswerFinal) {

                echo $_GET['StoryId'];
            } else {

                echo "fail";
            }
            return true;
        } else {
            echo ('loupéFinal');
            return false;
        }
    }
}
