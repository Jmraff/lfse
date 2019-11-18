<?php ob_start(); ?>

<section class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div id="homeTitle" class="col-12 text-center">
                <h1 class="font-weight-light">La Mayenne Sur Écoute</h1>
                <p class="lead">Pars à la recherche de Louis Fynn</p>
            </div>
        </div>
    </div>

</section>
<!-- Page Content -->
<section class="py-5">
    <div id="homeText" class="container">
        <h2 class="font-weight-light">Tends bien l'oreille pour localiser Louis Fynn</h2>
        <p>Tu vas avoir accès à deux sources sonores : le répondeur de la police sur lequel Louis Fynn dépose ses messages taquins et les conversations talkie-walkie que les policiers entretiennent entre eux lors de leur filature.
            Peu importe ce qui se dit ! Focalise toi plutôt sur les bruits de fond des dialogues.
            Peut-être que sous la voix de Louis Fynn tu entendras en même temps le bruit d'un métro aérien et le son d'un avion gros porteur qui décolle !
            Précieux indices pour localiser ton fugitif ! Sauf qu'en Mayenne il n'y a ni métro ni aéroport !
            Pas grave ! Il y a d'autres sons à découvrir. Et il n'y a qu'un seul lieu en Mayenne où tous ces sons sont audibles en même temps.
            A toi de découvrir ce lieu grâce à ton studio son !</p>
    </div>
</section>


<?php $content = ob_get_clean(); ?>

<?php require('HomeTemplate.php'); ?>