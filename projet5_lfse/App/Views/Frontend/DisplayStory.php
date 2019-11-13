<?php ob_start(); ?>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<h4></h4>
<div>
    <script>
        var fynn = new Howl({
            src: ["<?= $displayStory['MainSoundFinnPath'];
                    ?>"],
            autoplay: false
        });
    </script> <button type="button" onclick="fynn.play()">Play</button>

    <button type="button">Pause</button>
</div>
<script>
    var police = new Howl({
        src: ["<?= $displayStory['MainSoundPolicePath'];
                ?>"],
        autoplay: false
    });
</script> <button type="button" onclick="police.play()">Play</button>

<button type="button">Pause</button>
</div>

<div id="questions">
    <form method="post" id="question1" action="index.php?action=verifyAnswer1&StoryId=<?= $displayStory['StoryId'];
                                                                                        ?>">
        <div class="form-group">
            <label><?= $displayStory['question1'];
                    ?></label>
            <input type="text" class="form-control" id="answer1" name="answer1" placeholder="Entrer la réponse">



            <input type="submit" id="submit" value="Vérifier la réponse" class="btn btn-default">

            <div id="status"></div>
        </div>
    </form>


    <!-- Question 2 -->


    <form method="post" id="question2" action="index.php?action=verifyAnswer2&StoryId=<?= $displayStory['StoryId'];
                                                                                        ?>">
        <div class="form-group">
            <label><?= $displayStory['question2'];
                    ?></label>
            <input type="text" class="form-control" id="answer2" name="answer2" placeholder="Entrer la réponse">



            <input type="submit" id="submit" value="Vérifier la réponse" class="btn btn-default">

            <div id="status2"></div>
        </div>
    </form>

    <!-- Question 3 -->


    <form method="post" id="question3" action="index.php?action=verifyAnswer3&StoryId=<?= $displayStory['StoryId'];
                                                                                        ?>">
        <div class="form-group">
            <label><?= $displayStory['question3'];
                    ?></label>
            <input type="text" class="form-control" id="answer3" name="answer3" placeholder="Entrer la réponse">



            <input type="submit" id="submit" value="Vérifier la réponse" class="btn btn-default">
            <div id="status3"></div>

        </div>
    </form>

    <!-- Question 4 -->


    <form method="post" id="question4" action="index.php?action=verifyAnswer4&StoryId=<?= $displayStory['StoryId'];
                                                                                        ?>">
        <div class="form-group">
            <label><?= $displayStory['question4'];
                    ?></label>
            <input type="text" class="form-control" id="answer4" name="answer4" placeholder="Entrer la réponse">



            <input type="submit" id="submit" value="Vérifier la réponse" class="btn btn-default">

            <div id="status4"></div>
        </div>
    </form>

    <!-- Final Answer -->


    <form method="post" id="finalQuestion" class="index.php?action=success&StoryId=<?= $displayStory['StoryId'];
                                                                                    ?>" action="index.php?action=verifyAnswerFinal&StoryId=<?= $displayStory['StoryId'];
                                                                                                                                            ?>">
        <div class="form-group">
            <label><?= $displayStory['finalQuestion'];
                    ?></label>
            <input type="text" class="form-control" id="finalAnswer" name="finalAnswer" placeholder="Entrer la réponse">



            <input type="submit" id="submitFinal" value="Vérifier la réponse" class="btn btn-default">

            <div id="status5"></div>
        </div>
    </form>




    <?php $content = ob_get_clean(); ?>
    <!-- <script src="/lfse/projet5_lfse/public/vendor/node_modules/howler/dist/howler.js"></script> -->
    <script src="/lfse/projet5_lfse/public/vendor/node_modules/howler/dist/howler.core.min.js"></script>
    <script src="/lfse/projet5_lfse/public/vendor/node_modules/howler/dist/howler.min.js"></script>
    <script src="/lfse/projet5_lfse/public/vendor/node_modules/howler/dist/howler.spatial.min.js"></script>
    <script src="/lfse/projet5_lfse/public/vendor/node_modules/howler/src/howler.core.js"></script>

    <?php require('UserTemplate.php'); ?>