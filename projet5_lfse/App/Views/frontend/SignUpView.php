<?php ob_start();


?>


<div class="container">
    <div class="row">
        <div class="col-lg-10 col-xl-9 mx-auto">
            <div class="card card-signin flex-row my-5">
                <div class="card-img-left d-none d-md-flex">
                    <!-- Background image for card set in CSS! -->
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Inscription</h5>
                    <form class="form-signin" method="POST" action="/lfse/projet5_lfse/index.php?action=createUser">
                        <div class="form-label-group">
                            <input type="text" class="form-control" placeholder="Votre pseudo" id="inputUserame" name="pseudo" value="<?php if (isset($pseudo)) {
                                                                                                                                            echo $pseudo;
                                                                                                                                        } ?>" required autofocus>
                            <label for="pseudo">Pseudo</label>

                        </div>
                        <div class="form-label-group">

                            <input type="email" placeholder="Votre mail" id="mail" name="mail" value="<?php if (isset($mail)) {
                                                                                                            echo $mail;
                                                                                                        } ?>" class="form-control" required>
                            <label for="mail">Mail :</label>
                        </div>
                        <div class="form-label-group">

                            <input type="email" placeholder="Confirmez votre mail" id="mail2" name="mail2" value="<?php if (isset($mail2)) {
                                                                                                                        echo $mail2;
                                                                                                                    } ?>" class="form-control">
                            <label for="mail2">Confirmation du mail :</label>
                        </div>

                        <div class="form-label-group">
                            <select class="form-control" id="locality-dropdown" name="locality">
                            </select>

                        </div>

                        <hr>

                        <div class="form-label-group">

                            <input type="password" placeholder="Votre mot de passe" id="pass" name="pass" class="form-control">
                            <label for="pass">Mot de passe :</label>
                        </div>

                        <div class="form-label-group">

                            <input type="password" placeholder="Confirmez votre mdp" id="pass2" name="pass2" class="form-control">
                            <label for="pass2">Confirmation du mot de passe :</label>
                        </div>

                        <button name="forminscription" value="Je m'inscris" class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Je m'inscris</button>
                        <a class="d-block text-center mt-2 small" href="#">J'ai déjà un compte</a>
                        <hr class="my-4">
                        <?php
                        if (isset($error)) {
                            echo '<font color="red">' . $error . "</font>";
                        }
                        ?>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>



<?php $content = ob_get_clean(); ?>

<?php require('HomeTemplate.php'); ?>