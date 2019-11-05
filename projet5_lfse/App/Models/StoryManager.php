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
    public function addSoundPolice($MainSoundPoliceName, $MainSoundPolicePath, $updateStoryId)
    {
        $db = $this->dbConnect();
        $ins = $db->prepare('UPDATE StoryContent SET MainSoundPoliceName = ?, MainSoundPolicePath = ? WHERE StoryId = ?');
        $soundPost = $ins->execute(array($MainSoundPoliceName, $MainSoundPolicePath, $updateStoryId));
        return $soundPost;
    }
    public function addSoundIsolate1($isolateSound1Name, $isolateSound1Path, $updateStoryId)
    {
        $db = $this->dbConnect();
        $ins = $db->prepare('UPDATE StoryContent SET isolateSound1Name = ? isolateSound1Path) = ? WHERE StoryId = ?');
        $soundPost = $ins->execute(array($isolateSound1Name, $isolateSound1Path, $updateStoryId));
        return $soundPost;
    }
    public function addSoundIsolate2($isolateSound2Name, $isolateSound2Path, $updateStoryId)
    {
        $db = $this->dbConnect();
        $ins = $db->prepare('UPDATE StoryContent SET isolateSound2Name, isolateSound2Path)  WHERE StoryId = ?');
        $soundPost = $ins->execute(array($isolateSound2Name, $isolateSound2Path, $updateStoryId));
        return $soundPost;
    }
    public function addSoundIsolate3($isolateSound3Name, $isolateSound3Path, $updateStoryId)
    {
        $db = $this->dbConnect();
        $ins = $db->prepare('UPDATE StoryContent SET isolateSound3Name, isolateSound3Path)  WHERE StoryId = ?');
        $soundPost = $ins->execute(array($isolateSound3Name, $isolateSound3Path, $updateStoryId));
        return $soundPost;
    }
    public function addSoundIsolate4($isolateSound4Name, $isolateSound4Path, $updateStoryId)
    {
        $db = $this->dbConnect();
        $ins = $db->prepare('UPDATE StoryContent SET isolateSound4Name, isolateSound4Path)  WHERE StoryId = ?');
        $soundPost = $ins->execute(array($isolateSound4Name, $isolateSound4Path, $updateStoryId));
        return $soundPost;
    }
    public function addSoundIsolate5($isolateSound5Name, $isolateSound5Path, $updateStoryId)
    {
        $db = $this->dbConnect();
        $ins = $db->prepare('UPDATE StoryContent SET isolateSound5Name, isolateSound5Path)  WHERE StoryId = ?');
        $soundPost = $ins->execute(array($isolateSound5Name, $isolateSound5Path, $updateStoryId));
        return $soundPost;
    }
    public function addSoundIsolate6($isolateSound6Name, $isolateSound6Path, $updateStoryId)
    {
        $db = $this->dbConnect();
        $ins = $db->prepare('UPDATE StoryContent SET isolateSound6Name, isolateSound6Path)  WHERE StoryId = ?');
        $soundPost = $ins->execute(array($isolateSound6Name, $isolateSound6Path, $updateStoryId));
        return $soundPost;
    }

    public function addQuestions($question1, $question2, $question3, $question4)
    {

        $db = $this->dbConnect();
        $ins = $db->prepare('UPDATE StoryContent(idStory, question1, question2, question3, question4) VALUES ?, ?, ?, ?, ?');
        $questions = $ins->execute(array($question1, $question2, $question3, $question4));
        return $questions;
    }
    public function addAnswers($storyId, $answer1, $answer2, $answer3, $answer4)
    {
        $db = $this->dbConnect();
        $ins = $db->prepare('UPDATE StoryContent(idStory, answer1, answer2, answer3, answer4) VALUES ?, ?, ?, ?, ?');
        $answers = $ins->execute(array($storyId, $answer1, $answer2, $answer3, $answer4));
        return $answers;
    }
    public function addFinalAnswer($storyId, $finalAnswer1)
    {
        $db = $this->dbConnect();
        $ins = $db->prepare('UPDATE StoryContent(idStory, finalAnswer ) VALUES ?, ?');
        $finalAnswer = $ins->execute(array($storyId, $finalAnswer1));
        return $finalAnswer;
    }
    public function addAnswerVideo($storyId, $videoLink, $videoLinkPath)
    {
        $db = $this->dbConnect();
        $ins = $db->prepare('UPDATE StoryContent(idStory, videoLink, videoLinkPath) VALUES ?, ?, ?');
        $soundPost = $ins->execute(array($storyId, $videoLink, $videoLinkPath));
        return $soundPost;
    }
}
