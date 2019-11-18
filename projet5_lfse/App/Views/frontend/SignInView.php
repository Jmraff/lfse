<?php ob_start(); ?>

<div class="container-fluid">
    <div class="row no-gutter">
        <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
        <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-lg-8 mx-auto">
                            <h3 id="welcomeSignin" class="login-heading mb-4">Bienvenue</h3>
                            <form method="post" id="connectAccountId" action="index.php?action=userConnect">

                                <div class="form-label-group">
                                    <input type="email" id="emailConnectId" class="form-control" name="emailConnectName" placeholder="Email" required>
                                    <label for="emailConnectId">Email</label>

                                </div>


                                <div class="form-label-group">
                                    <input type="password" id="inputPassword" name="passconnect" class="form-control" placeholder="Mot de Passe" required>
                                    <label for="inputPassword">Mot de Passe</label>
                                </div>


                                <input id="connectButton" class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" placeholder="J'Y VAISs" name="formconnection" type="submit">
                                <div id="errorSignIn">


                                </div>
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