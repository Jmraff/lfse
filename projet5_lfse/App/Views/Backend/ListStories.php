<?php ob_start(); ?>


<div class="container">
    <?php
    while ($data = $listStories->fetch()) {
        ?>




        <div class="jumbotron">
            <h1> <?= htmlspecialchars($data['storyName']) ?></h1>

            <p><a href="index.php?action=editStory&StoryId=<?= $data['StoryId'] ?>" class="btn btn-primary btn-large">Lire la suite »</a> </p>
        </div>








    <?php
    }
    $listStories->closeCursor();
    ?>
    <?php $content = ob_get_clean(); ?>

    <?php require('AdminTemplate.php'); ?>