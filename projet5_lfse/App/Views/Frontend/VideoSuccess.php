<?php ob_start(); ?>

<div class="row">
    <h1>Bravo, vous avez retrouvé la trace de Louis Fynn</h1>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
</div>
<div class="embed-responsive embed-responsive-16by9">
    <video width="320" height="240" controls>
        <source src="<?= $displayStory['videoLinkPath'];
                        ?>" type="video/mp4">
    </video>
</div>




<?php $content = ob_get_clean(); ?>


<?php require('UserTemplate.php'); ?>