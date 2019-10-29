<?php

require_once "models/DBConnectModel.php";

class StoryManager extends DBConnectManager
{
    public function addSoundFinn($MainSoundFinnName, $MainSoundFinnPath)
    {
        $db = $this->dbConnect();
        $ins = $db->prepare('INSERT INTO StoryContent(idStory, MainSoundFinnName, MainSoundFinnPath) VALUES  ?, ?');
        $soundPost = $ins->execute(array($MainSoundFinnName, $MainSoundFinnPath));
        return $soundPost;
    }
    public function addSoundPolice($storyId, $MainSoundPoliceName, $MainSoundPolicePath)
    {
        $db = $this->dbConnect();
        $ins = $db->prepare('INSERT INTO StoryContent(idStory, MainSoundPoliceName, MainSoundPolicePath) VALUES ?, ?, ?');
        $soundPost = $ins->execute(array($storyId, $MainSoundPoliceName, $MainSoundPolicePath));
        return $soundPost;
    }
    public function addSoundIsolate1($storyId, $isolateSound1Name, $isolateSound1Path)
    {
        $db = $this->dbConnect();
        $ins = $db->prepare('INSERT INTO StoryContent(idStory, isolateSound1Name, isolateSound1Path) VALUES ?, ?, ?');
        $soundPost = $ins->execute(array($storyId, $isolateSound1Name, $isolateSound1Path));
        return $soundPost;
    }
    public function addSoundIsolate2($storyId, $isolateSound2Name, $isolateSound2Path)
    {
        $db = $this->dbConnect();
        $ins = $db->prepare('INSERT INTO StoryContent(idStory, isolateSound2Name, isolateSound2Path) VALUES ?, ?, ?');
        $soundPost = $ins->execute(array($storyId, $isolateSound2Name, $isolateSound2Path));
        return $soundPost;
    }
    public function addSoundIsolate3($storyId, $isolateSound3Name, $isolateSound3Path)
    {
        $db = $this->dbConnect();
        $ins = $db->prepare('INSERT INTO StoryContent(idStory, isolateSound3Name, isolateSound3Path) VALUES ?, ?, ?');
        $soundPost = $ins->execute(array($storyId, $isolateSound3Name, $isolateSound3Path));
        return $soundPost;
    }
    public function addSoundIsolate4($storyId, $isolateSound4Name, $isolateSound4Path)
    {
        $db = $this->dbConnect();
        $ins = $db->prepare('INSERT INTO StoryContent(idStory, isolateSound4Name, isolateSound4Path) VALUES ?, ?, ?');
        $soundPost = $ins->execute(array($storyId, $isolateSound4Name, $isolateSound4Path));
        return $soundPost;
    }
    public function addSoundIsolate5($storyId, $isolateSound5Name, $isolateSound5Path)
    {
        $db = $this->dbConnect();
        $ins = $db->prepare('INSERT INTO StoryContent(idStory, isolateSound5Name, isolateSound5Path) VALUES ?, ?, ?');
        $soundPost = $ins->execute(array($storyId, $isolateSound5Name, $isolateSound5Path));
        return $soundPost;
    }
    public function addSoundIsolate6($storyId, $isolateSound6Name, $isolateSound6Path)
    {
        $db = $this->dbConnect();
        $ins = $db->prepare('INSERT INTO StoryContent(idStory, isolateSound6Name, isolateSound6Path) VALUES ?, ?, ?');
        $soundPost = $ins->execute(array($storyId, $isolateSound6Name, $isolateSound6Path));
        return $soundPost;
    }

    public function addQuestions($storyId, $question1, $question2, $question3, $question4)
    {

        $db = $this->dbConnect();
        $ins = $db->prepare('INSERT INTO StoryContent(idStory, question1, question2, question3, question4) VALUES ?, ?, ?, ?, ?');
        $questions = $ins->execute(array($storyId, $question1, $question2, $question3, $question4));
        return $questions;
    }
    public function addAnswers($storyId, $answer1, $answer2, $answer3, $answer4)
    {
        $db = $this->dbConnect();
        $ins = $db->prepare('INSERT INTO StoryContent(idStory, answer1, answer2, answer3, answer4) VALUES ?, ?, ?, ?, ?');
        $answers = $ins->execute(array($storyId, $answer1, $answer2, $answer3, $answer4));
        return $answers;
    }
    public function addFinalAnswer($storyId, $finalAnswer1)
    {
        $db = $this->dbConnect();
        $ins = $db->prepare('INSERT INTO StoryContent(idStory, finalAnswer ) VALUES ?, ?');
        $finalAnswer = $ins->execute(array($storyId, $finalAnswer1));
        return $finalAnswer;
    }
    public function addAnswerVideo($storyId, $videoLink, $videoLinkPath)
    {
        $db = $this->dbConnect();
        $ins = $db->prepare('INSERT INTO StoryContent(idStory, videoLink, videoLinkPath) VALUES ?, ?, ?');
        $soundPost = $ins->execute(array($storyId, $videoLink, $videoLinkPath));
        return $soundPost;
    }
}
