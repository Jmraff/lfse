<?php ob_start(); ?>
<br />
<br />
<br />
<br />
<br />
<br />
<br />


<button type="button" onclick="play()">Play</button>
<button type="button">Pause</button>







<?php $content = ob_get_clean(); ?>

<?php require('UserTemplate.php'); ?>