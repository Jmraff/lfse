<?php

require 'controllers/backend/StoryController.php';


try {

    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'addFinnMain') {
            addSound();


            // header("Location: views/backend/EditStory.php");
        }
    }
} catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
