<?php ob_start(); ?>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<h4></h4>



<div class="player">
    <p>
        Example trackswitch.js instance.
    </p>
    <!-- <img src="mix.png" class="seekable" /> -->
    <ts-track title="Drums">
        <ts-source src="<?= $displayStory['MainSoundFinnPath'];
                        ?>" type="audio/mp3"></ts-source>
    </ts-track>
    <ts-track title="Synth">
        <ts-source src="<?= $displayStory['isolateSound1Path'];
                        ?>" type="audio/mp3"></ts-source>
    </ts-track>
    <ts-track title="Bass">
        <ts-source src="<?= $displayStory['isolateSound2Path'];
                        ?>" type="audio/mp3"></ts-source>
    </ts-track>
    <ts-track title="Violins">
        <ts-source src="<?= $displayStory['isolateSound3Path'];
                        ?>" type="audio/mp3"></ts-source>
    </ts-track>
</div>


<div>

    <div id="waveform">
        <script>
            var fynn = new Howl({
                src: ["<?= $displayStory['MainSoundFinnPath'];
                        ?>"],
                autoplay: false,
                volume: 1
            });
            var fynnIsolate1 = new Howl({
                src: ["<?= $displayStory['isolateSound1Path'];
                        ?>"],
                autoplay: false,
                volume: 0.5
            });
            var fynnIsolate2 = new Howl({
                src: ["<?= $displayStory['isolateSound2Path'];
                        ?>"],
                autoplay: false,
                volume: 0.5
            });
            var fynnIsolate3 = new Howl({
                src: ["<?= $displayStory['isolateSound3Path'];
                        ?>"],
                autoplay: false,
                volume: 0.5
            });
        </script>
    </div><button id='howler-play' type="button" onclick="fynn.play(),fynnIsolate1.play(),fynnIsolate2.play(),fynnIsolate3.play()">Play</button>
    <button id='howler-pause' type="button" onclick="fynn.pause(),fynnIsolate1.pause(),fynnIsolate2.pause(),fynnIsolate3.pause()">Pause</button>
    <button id='howler-stop' type="button" onclick="fynn.stop(),fynnIsolate1.stop(),fynnIsolate2.stop(),fynnIsolate3.stop()">Stop</button>
    <button id='howler-volup' type="button" onclick="fynn.play(),fynnIsolate1.play(),fynnIsolate2.play(),fynnIsolate3.play()">Vol+</button>
    <button id='howler-voldown' onclick="fynn.play(),fynnIsolate1.play(),fynnIsolate2.play(),fynnIsolate3.play()">Vol-</button>



</div>
<div>
    <script>
        var police = new Howl({
            src: ["<?= $displayStory['MainSoundPolicePath'];
                    ?>"],
            autoplay: false,
            volume: 1
        });
        var policeIsolate1 = new Howl({
            src: ["<?= $displayStory['isolateSound4Path'];
                    ?>"],
            autoplay: false,
            volume: 0.5
        });
        var policeIsolate2 = new Howl({
            src: ["<?= $displayStory['isolateSound5Path'];
                    ?>"],
            autoplay: false,
            volume: 0.5
        });
        var policeIsolate3 = new Howl({
            src: ["<?= $displayStory['isolateSound6Path'];
                    ?>"],
            autoplay: false,
            volume: 0.5
        });
    </script> <button id='howler-play' type="button" onclick="police.play(),policeIsolate1.play(),policeIsolate2.play(),policeIsolate3.play()">Play</button>
    <button id='howler-pause' type="button" onclick="police.pause(),policeIsolate1.pause(),policeIsolate2.pause(),policeIsolate3.pause()">Pause</button>
    <button id='howler-stop' type="button" onclick="police.stop(),policeIsolate1.stop(),policeIsolate2.stop(),policeIsolate3.stop()">Stop</button>
    <button id='howler-volup' type="button" onclick="police.play(),policeIsolate1.play(),policeIsolate2.play(),policeIsolate3.play()">Vol+</button>
    <button id='howler-voldown' onclick="police.play(),policeIsolate1.play(),policeIsolate2.play(),policeIsolate3.play()">Vol-</button>




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
        <script src="/lfse/projet5_lfse/public/vendor/node_modules/trackswitch/dist/js/trackswitch.min.js"></script>
        <!-- <script src="/lfse/projet5_lfse/public/vendor/node_modules/howler/dist/howler.js"></script> -->
        <script src="/lfse/projet5_lfse/public/vendor/node_modules/howler/dist/howler.core.min.js"></script>
        <script src="/lfse/projet5_lfse/public/vendor/node_modules/howler/dist/howler.min.js"></script>
        <script src="/lfse/projet5_lfse/public/vendor/node_modules/howler/dist/howler.spatial.min.js"></script>
        <script src="/lfse/projet5_lfse/public/vendor/node_modules/howler/src/howler.core.js"></script>

        <?php require('UserTemplate.php'); ?>