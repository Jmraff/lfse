<?php
// require_once 'models/StoryManager.php';
require 'UploadController.php';


// class EditStory extends Upload
// {


function addSound()

{
    if (isset($_POST['submit_finn'])) {

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
    }
    // require 'views/backend/EditStory.php';
}








    //     $target_dir = "public/audio/uploads/";
    //     $target_file = $target_dir . basename($_FILES["finn_main"]["name"]);
    //     $uploadOk = 1;
    //     $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    //     // Check if image file is a actual image or fake image
    //     if (isset($_POST["submitFinn"])) {
    //         $check = getSoundSize($_FILES["finn_main"]["tmp_name"]);
    //         if ($check !== false) {
    //             echo "File is an audio - " . $check["mime"] . ".";
    //             $uploadOk = 1;
    //             $addMainSound = new StoryManager;
    //             $addFinn = $addMainSound->addSoundFinn($MainSoundFinnName, $MainSoundFinnPath);
    //             move_uploaded_file($_FILES['finn_main']['tmp_name'], $target_dir . $_FILES['finn_main']['name']);
    //         } else {
    //             echo "File is not an image.";
    //             $uploadOk = 0;
    //         }
    //     }
    // }
