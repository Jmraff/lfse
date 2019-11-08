<?php ob_start(); ?>


<h1>Edition d'une histoire</h1>



<form action="index.php?action=publish&StoryId=<?= $displayEditStory['StoryId'] ?>" method="post">
    <select name="makeAvailable">
        <option value="online">Publié</option>
        <option value="unpublish" selected>Non Publié</option>

    </select>
    <input type="submit" name="publish" value="Submit">
</form>



<div id="publishState">

    <?php if ($displayEditStory['published'] == 1) : ?><p>L'histoire est en ligne<?php else : ?><p>L'histoire n'est pas en ligne<?php endif;

                                                                                                                                    ?>
</div>



<div>
    <form action="index.php?action=addFinnMain&StoryId=<?= $displayEditStory['StoryId'] ?>" method="post" enctype="multipart/form-data">

        <input type="file" name="file" />
        <input type="submit" name="submit_finn" value="Envoyer">

    </form>
</div>
<form action="index.php?action=addIsolate1&StoryId=<?= $displayEditStory['StoryId'] ?>" method="post" enctype="multipart/form-data">

    <input type="file" name="file" />
    <input type="submit" name="submit_isolate1" value="Envoyer">

</form>
<form action="index.php?action=addIsolate2&StoryId=<?= $displayEditStory['StoryId'] ?>" method="post" enctype="multipart/form-data">

    <input type="file" name="file" />
    <input type="submit" name="submit_isolate2" value="Envoyer">

</form>
<form action="index.php?action=addIsolate3&StoryId=<?= $displayEditStory['StoryId'] ?>" method="post" enctype="multipart/form-data">

    <input type="file" name="file" />
    <input type="submit" name="submit_isolate3" value="Envoyer">

</form>
<form action="index.php?action=addPolice&StoryId=<?= $displayEditStory['StoryId'] ?>" method="post" enctype="multipart/form-data">

    <input type="file" name="file" />
    <input type="submit" name="submit_police" value="Envoyer">

</form>
<form action="index.php?action=addIsolate4&StoryId=<?= $displayEditStory['StoryId'] ?>" method="post" enctype="multipart/form-data">

    <input type="file" name="file" />
    <input type="submit" name="submit_isolate4" value="Envoyer">

</form>
<form action="index.php?action=addIsolate5&StoryId=<?= $displayEditStory['StoryId'] ?>" method="post" enctype="multipart/form-data">

    <input type="file" name="file" />
    <input type="submit" name="submit_isolate5" value="Envoyer">

</form>
<form action="index.php?action=addIsolate6&StoryId=<?= $displayEditStory['StoryId'] ?>" method="post" enctype="multipart/form-data">

    <input type="file" name="file" />
    <input type="submit" name="submit_isolate6" value="Envoyer">

</form>


<form method="POST" action="index.php?action=updateQuestion1&StoryId=<?= $displayEditStory['StoryId'] ?>">
    <input type="text" id="question" name="new_question1" placeholder="Question 1" value="<?= $displayEditStory['question1'] ?>">

    <input id="question" name="new_answer1" placeholder="Réponse 1" value="<?= $displayEditStory['answer1'] ?>"><br />

    <input type=" submit" name="submit_question1" value="Valider la question" />
</form>

<br />

<form method="POST" action="index.php?action=updateQuestion2&StoryId=<?= $displayEditStory['StoryId'] ?>">
    <input type="text" id="question" name="new_question2" placeholder="Question 2" value="<?= $displayEditStory['question2'] ?>">

    <input id="question" name="new_answer2" placeholder="Réponse 2" value="<?= $displayEditStory['answer2'] ?>"><br />

    <input type="submit" name="submit_question2" value="Valider la question" />
</form>


<br />
<form method="POST" action="index.php?action=updateQuestion3&StoryId=<?= $displayEditStory['StoryId'] ?>">
    <input type="text" id="question" name="new_question3" placeholder="Question 3" value="<?= $displayEditStory['question3'] ?>">

    <input id="question" name="new_answer3" placeholder="Réponse 3" value="<?= $displayEditStory['answer3'] ?>"><br />

    <input type="submit" name="submit_question3" value="Valider la question" />
</form>

<br />

<form method="POST" action="index.php?action=updateQuestion4&StoryId=<?= $displayEditStory['StoryId'] ?>">
    <input type="text" id="question" name="new_question4" placeholder="Question 4" value="<?= $displayEditStory['question4'] ?>">

    <input id="question" name="new_answer4" placeholder="Réponse 4"><?= $displayEditStory['answer4'] ?><br />

    <input type="submit" name="submit_question4" value="Valider la question" />
</form>
<br />
<br />
<form method="POST" action="index.php?action=updateFinalQuestion&StoryId=<?= $displayEditStory['StoryId'] ?>">
    <input type="text" id="question" name="final_question" placeholder="Question finale" value="<?= $displayEditStory['finalAnswer'] ?>">

    <input id="question" name="final_answer" placeholder="Réponse Finale" value="<?= $displayEditStory['finalAnswer'] ?>"><br />

    <input type="submit" name="submit_finalQuestion" value="Valider la question" />
</form>

<br />

<form action="index.php?action=addVideo&StoryId=<?= $displayEditStory['StoryId'] ?>" method="post" enctype="multipart/form-data">

    <input type="file" name="file" />
    <input type="submit" name="submit_video" value="Envoyer">

</form>


<?php $content = ob_get_clean(); ?>

<?php require('AdminTemplate.php'); ?>