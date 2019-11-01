<?php ?>


<h1>Edition d'une histoire</h1>


<form action="/lfse/projet5_lfse/index.php?action=addFinnMain" method="post" enctype="multipart/form-data">

    <input type="file" name="file" required />
    <input type="submit" name="submit_finn" value="Envoyer">


</form>

<br />

<?php ob_start(); ?>