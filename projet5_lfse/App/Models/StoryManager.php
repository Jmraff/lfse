<?php

namespace App\Models;


use App\Models\DBConnectManager;

class StoryManager extends DBConnectManager
{

    public function listStories()
    {
        $db = $this->dbConnect();


        $list = $db->query('SELECT * FROM StoryContent ORDER BY StoryId DESC');

        return $list;
    }
    public function listUserStories()
    {
        $db = $this->dbConnect();


        $list = $db->query('SELECT * FROM StoryContent WHERE published = 1 ORDER BY StoryId DESC');

        return $list;
    }
    public function displaySingleStory($StoryId)
    {
        $db = $this->dbConnect();
        $display_story = $db->prepare('SELECT * FROM StoryContent WHERE StoryId = ?');
        $display_story->execute(array($StoryId));
        $displayStory = $display_story->fetch();
        return $displayStory;
    }
    public function checkAnswers($StoryId)
    {
        $db = $this->dbConnect();
        $checkAnswers = $db->prepare('SELECT answer1, answer2, answer3, answer4, finalAnswer FROM StoryContent WHERE StoryId = ?');
        $checkAnswers->execute(array($StoryId));
        $getAnswers = $checkAnswers->fetch();
        return $getAnswers;
    }
    public function createStory($storyName)
    {

        $db = $this->dbConnect();
        $ins = $db->prepare('INSERT INTO StoryContent(storyName) VALUES (?)');
        $name = $ins->execute(array($storyName));
        return $name;
    }
    public function editStory($updateStoryId)
    {



        $db = $this->dbConnect();


        $edit_story = $db->prepare('SELECT * FROM StoryContent WHERE StoryId = ?');
        $edit_story->execute(array($updateStoryId));
        $editStory = $edit_story->fetch();
        return $editStory;
    }




    public function addSoundFinn($updateMainSoundFinnPath, $updateMainSoundFinnName, $updateStoryId)
    {
        $db = $this->dbConnect();
        $ins = $db->prepare('UPDATE StoryContent SET MainSoundFinnPath = ?, MainSoundFinnName = ? WHERE  StoryId = ?');
        $soundPost = $ins->execute(array($updateMainSoundFinnPath, $updateMainSoundFinnName, $updateStoryId));
        return $soundPost;
    }
    public function addSoundPolice($MainSoundPolicePath, $MainSoundPoliceName, $updateStoryId)
    {
        $db = $this->dbConnect();

        $ins = $db->prepare('UPDATE StoryContent SET MainSoundPolicePath = ?, MainSoundPoliceName = ? WHERE StoryId = ?');
        $soundPost = $ins->execute(array($MainSoundPolicePath, $MainSoundPoliceName, $updateStoryId));

        return $soundPost;
    }
    public function addSoundIsolate1($isolateSound1Path, $isolateSound1Name, $updateStoryId)
    {
        $db = $this->dbConnect();

        $ins = $db->prepare('UPDATE StoryContent SET isolateSound1Path = ?, isolateSound1Name = ? WHERE StoryId = ?');
        $soundPost = $ins->execute(array($isolateSound1Path, $isolateSound1Name, $updateStoryId));

        return $soundPost;
    }
    public function addSoundIsolate2($isolateSound2Path, $isolateSound2Name, $updateStoryId)
    {
        $db = $this->dbConnect();
        $ins = $db->prepare('UPDATE StoryContent SET isolateSound2Path = ?, isolateSound2Name = ? WHERE StoryId = ?');
        $soundPost = $ins->execute(array($isolateSound2Path, $isolateSound2Name, $updateStoryId));
        return $soundPost;
    }
    public function addSoundIsolate3($isolateSound3Path, $isolateSound3Name, $updateStoryId)
    {
        $db = $this->dbConnect();
        $ins = $db->prepare('UPDATE StoryContent SET isolateSound3Path = ?, isolateSound3Name = ? WHERE StoryId = ?');
        $soundPost = $ins->execute(array($isolateSound3Path, $isolateSound3Name, $updateStoryId));
        return $soundPost;
    }
    public function addSoundIsolate4($isolateSound4Path, $isolateSound4Name, $updateStoryId)
    {
        $db = $this->dbConnect();
        $ins = $db->prepare('UPDATE StoryContent SET isolateSound4Path = ?, isolateSound4Name = ? WHERE StoryId = ?');
        $soundPost = $ins->execute(array($isolateSound4Path, $isolateSound4Name, $updateStoryId));
        return $soundPost;
    }
    public function addSoundIsolate5($isolateSound5Path, $isolateSound5Name, $updateStoryId)
    {
        $db = $this->dbConnect();
        $ins = $db->prepare('UPDATE StoryContent SET isolateSound5Path = ?, isolateSound5Name = ? WHERE StoryId = ?');
        $soundPost = $ins->execute(array($isolateSound5Path, $isolateSound5Name, $updateStoryId));
        return $soundPost;
    }
    public function addSoundIsolate6($isolateSound6Path, $isolateSound6Name, $updateStoryId)
    {
        $db = $this->dbConnect();
        $ins = $db->prepare('UPDATE StoryContent SET isolateSound6Path = ?, isolateSound6Name = ? WHERE StoryId = ?');
        $soundPost = $ins->execute(array($isolateSound6Path, $isolateSound6Name, $updateStoryId));
        return $soundPost;
    }

    public function addQuestion1($question1, $answer1, $updateStoryId)
    {

        $db = $this->dbConnect();
        $ins = $db->prepare('UPDATE StoryContent SET question1 = ?, answer1 = ? WHERE StoryId = ?');
        $question_answer = $ins->execute(array($question1, $answer1, $updateStoryId));
        return $question_answer;
    }
    public function addQuestion2($question2, $answer2, $updateStoryId)
    {

        $db = $this->dbConnect();
        $ins = $db->prepare('UPDATE StoryContent SET question2 = ?, answer2 = ? WHERE StoryId = ?');
        $question_answer = $ins->execute(array($question2, $answer2, $updateStoryId));
        return $question_answer;
    }
    public function addQuestion3($question3, $answer3, $updateStoryId)
    {

        $db = $this->dbConnect();
        $ins = $db->prepare('UPDATE StoryContent SET question3 = ?, answer3 = ? WHERE StoryId = ?');
        $question_answer = $ins->execute(array($question3, $answer3, $updateStoryId));
        return $question_answer;
    }
    public function addQuestion4($question4, $answer4, $updateStoryId)
    {

        $db = $this->dbConnect();
        $ins = $db->prepare('UPDATE StoryContent SET question4 = ?, answer4 = ? WHERE StoryId = ?');
        $question_answer = $ins->execute(array($question4, $answer4, $updateStoryId));
        return $question_answer;
    }
    public function addFinalAnswer($finalQuestion, $finalAnswer, $updateStoryId)
    {
        $db = $this->dbConnect();
        $ins = $db->prepare('UPDATE StoryContent SET finalQuestion = ?, finalAnswer = ? WHERE StoryId = ?');
        $finalAnswer = $ins->execute(array($finalQuestion, $finalAnswer, $updateStoryId));
        return $finalAnswer;
    }
    public function addAnswerVideo($videoLinkPath, $videoLink, $updateStoryId)
    {
        $db = $this->dbConnect();


        $ins = $db->prepare('UPDATE StoryContent SET videoLinkPath = ?, videoLink = ? WHERE StoryId = ?');

        $videoPost = $ins->execute(array($videoLinkPath, $videoLink, $updateStoryId));

        return $videoPost;
    }

    public function publish($updateStoryId)
    {
        $db = $this->dbConnect();


        $ins = $db->prepare('UPDATE StoryContent SET published = 1 WHERE StoryId = ?');

        $published = $ins->execute(array($updateStoryId));

        return $published;
    }
    public function unpublish($updateStoryId)
    {
        $db = $this->dbConnect();


        $ins = $db->prepare('UPDATE StoryContent SET published = 0 WHERE StoryId = ?');

        $unpublished = $ins->execute(array($updateStoryId));

        return $unpublished;
    }
}
