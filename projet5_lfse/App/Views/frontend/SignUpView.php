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
                    <h5 id="registerForm" class="card-title text-center">Inscription</h5>
                    <form class="form-signin" id="createAccountId" name="createAccountName" method="POST" action="/index.php?action=createUser">
                        <div class="form-label-group">
                            <input type="text" class="form-control" placeholder="Votre pseudo" id="inputUserame" name="pseudo" required autofocus>
                            <label for="inputUserame">Pseudo :</label>

                        </div>
                        <div class="form-label-group">

                            <input type="email" placeholder="Votre mail" id="mailId" name="mail" value="<?php if (isset($mail)) :
                                                                                                            echo $mail;
                                                                                                        endif; ?>" class="form-control" required>
                            <label for="mailId">Mail :</label>
                        </div>
                        <div class="form-label-group">

                            <input type="email" placeholder="Confirmez votre mail" id="mail2" name="mail2" value="<?php if (isset($mail2)) :
                                                                                                                        echo $mail2;
                                                                                                                    endif; ?>" class="form-control">
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

                        <input name="forminscription" value="Je m'inscris" id="forminscriptionId" class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">

                        <a id="registerFormConnect" class="d-block text-center mt-2 small" href="index.php?action=connect">J'ai déjà un compte</a>
                        <hr class="my-4">
                        <div id="errorForm"></div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>



<?php $content = ob_get_clean(); ?>

<?php require('HomeTemplate.php'); ?>