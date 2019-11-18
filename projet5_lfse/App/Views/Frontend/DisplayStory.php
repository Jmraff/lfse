<?php ob_start(); ?>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<h4></h4>

<script>
    angular.module('myApp', ['angular-vumeter']);
</script>
<div ng-app="myApp">
    <vu-meter is-active="isActive" source-id="mySong"></vu-meter>
    <audio id="mySong" controls="true" preload="metadata">
        <source src="<?= $displayStory['MainSoundFinnPath'] ?>">


        Your browser does not support the audio element.
    </audio>
    <audio class="fynnSounds" id="isolate1" type="audio/mpeg" controls="true" preload="metadata">
        <source src="<?= $displayStory['isolateSound1Path']; ?>">
    </audio>
    <audio class="fynnSounds" id="isolate2" type="audio/mpeg" controls="true" preload="metadata">
        <source src="<?= $displayStory['isolateSound2Path'] ?>">
    </audio>
    <audio class="fynnSounds" id="isolate2" type="audio/mpeg" type="audio/mpeg" controls="true" preload="metadata">
        <source src="<?= $displayStory['isolateSound3Path'] ?>">
    </audio>
    <div ng-app="myApp">
        <vu-meter is-active="isActive" source-id="mySong2"></vu-meter>
        <audio id="mySong2" controls="true" preload="metadata">
            <source src="<?= $displayStory['MainSoundPolicePath'] ?>">


            Your browser does not support the audio element.
        </audio>
        <audio class="fynnSounds" id="isolate1" type="audio/mpeg" controls="true" preload="metadata">
            <source src="<?= $displayStory['isolateSound4Path']; ?>">
        </audio>
        <audio class="fynnSounds" id="isolate2" type="audio/mpeg" controls="true" preload="metadata">
            <source src="<?= $displayStory['isolateSound5Path'] ?>">
        </audio>
        <audio class="fynnSounds" id="isolate2" type="audio/mpeg" type="audio/mpeg" controls="true" preload="metadata">
            <source src="<?= $displayStory['isolateSound6Path'] ?>">
        </audio>

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


            <script src="/public/vendor/node_modules/howler/dist/howler.js"></script>
            <script src="/public/vendor/node_modules/howler/dist/howler.core.min.js"></script>
            <script src="/public/vendor/node_modules/howler/dist/howler.min.js"></script>
            <script src="/public/vendor/node_modules/howler/dist/howler.spatial.min.js"></script>
            <script src="/public/vendor/node_modules/howler/src/howler.core.js"></script>



            <?php $content = ob_get_clean(); ?>


            <?php require('UserTemplate.php'); ?>