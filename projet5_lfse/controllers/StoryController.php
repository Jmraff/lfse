<?php
require_once 'models/StoryManager.php';


function addMainSoundFinn($MainSoundFinnName, $MainSoundFinnPath)

{

    if (isset($_POST['finn_main'])) {

        $target_dir = "public/audio/uploads/";
        $target_file = $target_dir . basename($_FILES["finn_main"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if (isset($_POST["submitFinn"])) {
            $check = getSoundSize($_FILES["finn_main"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an audio - " . $check["mime"] . ".";
                $uploadOk = 1;
                $addMainSound = new StoryManager;
                $addFinn = $addMainSound->addSoundFinn($MainSoundFinnName, $MainSoundFinnPath);
                move_uploaded_file($_FILES['finn_main']['tmp_name'], $target_dir . $_FILES['finn_main']['name']);
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
    }
    require 'views/backend/EditStory.php';
}
