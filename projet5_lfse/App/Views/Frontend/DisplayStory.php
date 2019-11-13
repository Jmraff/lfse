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
    <form method="post" action="/lfse/projet5_lfse/index.php?action=verifyAnswer&StoryId=<?= $displayStory['StoryId'];
                                                                                            ?>">
        <div class="form-group">
            <label for="reponse1"><?= $displayStory['question1'];
                                    ?></label>
            <input type="text" class="form-control" name="answer1" placeholder="Entrer la réponse">
        </div>
        <div class="form-group">

            <button type="submit" name="verifyAnswer1" class="btn btn-default">Vérifier la réponse</button>
    </form>
</div>
<form role="form">
    <div class="form-group">
        <label for="reponse1"><?= $displayStory['question2'];
                                ?></label>
        <input type="text" class="form-control" name="answer2" placeholder="Entrer la réponse">

        <div class="form-group">

            <button type="submit" class="btn btn-default">Vérifier la réponse


            </button>
        </div>s
    </div>
    </div>

</form>
</div>
<form role="form">
    <div class="form-group">
        <label for="reponse1"><?= $displayStory['question3'];
                                ?></label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Entrer la réponse">
    </div>
    <div class="form-group">

        <button type="submit" class="btn btn-default">Vérifier la réponse</button>
</form>
</div>
<form role="form">
    <div class="form-group">
        <label for="reponse1"><?= $displayStory['question4'];
                                ?></label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Entrer la réponse">
    </div>
    <div class="form-group">

        <button type="submit" class="btn btn-default">Vérifier la réponse</button>
</form>
</div>
<form role="form">
    <div class="form-group">
        <label for="reponse1"><?= $displayStory['finalQuestion'];
                                ?></label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Entrer la réponse">
    </div>
    <div class="form-group">

        <button type="submit" class="btn btn-default">Vérifier la réponse</button>
</form>




<?php $content = ob_get_clean(); ?>
<script src="/lfse/projet5_lfse/public/vendor/node_modules/howler/dist/howler.js"></script>
<script src="/lfse/projet5_lfse/public/vendor/node_modules/howler/dist/howler.core.min.js"></script>
<script src="/lfse/projet5_lfse/public/vendor/node_modules/howler/dist/howler.min.js"></script>
<script src="/lfse/projet5_lfse/public/vendor/node_modules/howler/dist/howler.spatial.min.js"></script>
<script src="/lfse/projet5_lfse/public/vendor/node_modules/howler/src/howler.core.js"></script>
<?php require('UserTemplate.php'); ?>