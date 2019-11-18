<?php ob_start(); ?>


<div class="container">
    <?php
    while ($data = $displayStories->fetch()) :
        ?>




        <div class="jumbotron">
            <h1> <?= htmlspecialchars($data['storyName']) ?></h1>

            <p><a href="index.php?action=displayStory&StoryId=<?= $data['StoryId'] ?>" class="btn btn-primary btn-large">Jouer »</a> </p>
        </div>








    <?php
    endwhile;
    $displayStories->closeCursor();

    ?>


    <?php $content = ob_get_clean(); ?>


    <?php require('UserTemplate.php'); ?>