<?php ob_start(); ?>






<div class="container">


    <h3 class="login-heading mb-4">Ajout d'une histoire</h3>
    <form method="post" action="index.php?action=addStory">

        <div class="form-label-group">
            <input type="text" class="form-control" name="story_title" placeholder="Titre de l'histoire" required autofocus>

        </div>
        <div class="form-label-group">
            <input type="submit" value="Créer l'histoire" />
        </div>
        <?php
        if (isset($error)) {
            echo '<font color="red">' . $error . "</font>";
        }
        ?>
    </form>


</div>


<?php $content = ob_get_clean(); ?>

<?php require('AdminTemplate.php'); ?>