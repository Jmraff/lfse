<?php

require 'controllers/StoryController.php';


try {

    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'addFinnMain') {

            addMainSoundFinn($_FILES["finn_main"]["name"], $_FILES["finn_main"]["tmp_name"]);
            echo ($_FILES["finn_main"]["tmp_name"]);
            // header("Location: views/backend/EditStory.php");
        }
    }
} catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
