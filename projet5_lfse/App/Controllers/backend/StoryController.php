<?php

namespace App\Controllers\Backend;

require "vendor/autoload.php";

use App\Controllers\Backend\Upload;
use App\Models\StoryManager;


class StoryController
{
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
    public function addSound()

    {
        // if (isset($_POST['submit_finn'])) {

        $file = $_FILES['file'];

        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        var_dump('=filetypeAct' . $fileActualExt);

        $allowed = 'mp3';


        $newSound = new Upload;
        $uploadNewSound = $newSound->newUpload($file, $fileName, $fileTmpName, $fileSize, $fileError, $fileType, $fileExt, $fileActualExt, $allowed);

        // require 'views/backend/EditStory.php';
    }

    public function addMainSoundFynn($updateMainSoundFinnPath, $updateMainSoundFinnName, $updateStoryId)
    {
        if (isset($_POST['submit_finn'])) {

            $this->addSound();
            $addSound = new StoryManager;
            $addNewSound = $addSound->addSoundFinn($updateMainSoundFinnPath, $updateMainSoundFinnName, $updateStoryId);
        }
    }
    public function addSoundIsolate1($isolateSound1Name, $isolateSound1Path, $updateStoryId)
    {
        if (isset($_POST['submit_isolate1'])) {
            addSound();
            $addSound = new StoryManager;
            $addNewSound = $addSound->addSoundIsolate1($isolateSound1Name, $isolateSound1Path, $updateStoryId);
        }
    }
    public function addSoundIsolate2($isolateSound2Name, $isolateSound2Path, $updateStoryId)
    {
        if (isset($_POST['submit_isolate2'])) {
            addSound();
            $addSound = new StoryManager;
            $addNewSound = $addSound->addSoundIsolate2($isolateSound2Name, $isolateSound2Path, $updateStoryId);
        }
    }
    public function addSoundIsolate3($isolateSound3Name, $isolateSound3Path, $updateStoryId)
    {
        if (isset($_POST['submit_isolate3'])) {
            addSound();
            $addSound = new StoryManager;
            $addNewSound = $addSound->addSoundIsolate3($isolateSound3Name, $isolateSound3Path, $updateStoryId);
        }
    }
    public function addSoundIsolate4($isolateSound4Name, $isolateSound4Path, $updateStoryId)
    {
        if (isset($_POST['submit_isolate4'])) {
            addSound();
            $addSound = new StoryManager;
            $addNewSound = $addSound->addSoundIsolate4($isolateSound4Name, $isolateSound4Path, $updateStoryId);
        }
    }
    public function addSoundIsolate5($isolateSound5Name, $isolateSound5Path, $updateStoryId)
    {
        if (isset($_POST['submit_isolate5'])) {
            addSound();
            $addSound = new StoryManager;
            $addNewSound = $addSound->addSoundIsolate5($isolateSound5Name, $isolateSound5Path, $updateStoryId);
        }
    }
    public function addSoundIsolate6($isolateSound6Name, $isolateSound6Path, $updateStoryId)
    {
        if (isset($_POST['submit_isolate6'])) {
            addSound();
            $addSound = new StoryManager;
            $addNewSound = $addSound->addSoundIsolate6($isolateSound6Name, $isolateSound6Path, $updateStoryId);
        }
    }
    public function addSoundPolice($MainSoundPoliceName, $MainSoundPolicePath, $updateStoryId)
    {
        if (isset($_POST['submit_police'])) {
            addSound();
            $addSound = new StoryManager;
            $addNewSound = $addSound->addSoundPolice($MainSoundPoliceName, $MainSoundPolicePath, $updateStoryId);
        }
    }
}
