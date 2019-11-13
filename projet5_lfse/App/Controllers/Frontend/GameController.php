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

        require 'App/Views/Frontend/DisplayStory.php';
    }
    public function verifyAnswers($storyId)
    {
        $getAnswers = new StoryManager;
        $answers = $getAnswers->checkAnswers($_GET['StoryId']);
        $transliterator = \Transliterator::create('NFD; [:Nonspacing Mark:] Remove; NFC');
        $checkAnswer1 = $transliterator->transliterate($answers['answer1']);
        $userAnswer1 = $transliterator->transliterate($_POST['answer1']);
        if (isset($_POST['verifyAnswer1'])) {
            if ($checkAnswer1 == $userAnswer1) {
                echo "super";
                var_dump($userAnswer1, $checkAnswer1);
            } else {
                echo "dommage";
                var_dump($userAnswer1, $checkAnswer1);
            }
        }
        // require 'App/Views/Frontend/DisplayStory.php';
    }
}
