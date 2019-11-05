<?php ob_start(); ?>

<div class="container-fluid">
    <div class="row no-gutter">
        <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
        <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-lg-8 mx-auto">
                            <h3 class="login-heading mb-4">Bienvenue</h3>
                            <form method="post" action="index.php?action=userConnect">

                                <div class="form-label-group">
                                    <input type="email" id="inputEmail" class="form-control" name="pseudoconnect" placeholder="Email" required autofocus>
                                    <label for="inputEmail">Email</label>
                                </div>


                                <div class="form-label-group">
                                    <input type="password" id="inputPassword" name="passconnect" class="form-control" placeholder="Mot de Passe" required>
                                    <label for="inputPassword">Mot de Passe</label>
                                </div>


                                <input class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" name="formconnection" type="submit">
                                <div class="text-center">
                                    <a class="small" href="#">Forgot password?</a></div>
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
    </div>
</div>


<?php $content = ob_get_clean(); ?>
<?php require('HomeTemplate.php'); ?>