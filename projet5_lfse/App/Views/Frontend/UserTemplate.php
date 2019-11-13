<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="/lfse/projet5_lfse/public/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Google fonts-->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/lfse/projet5_lfse/public/css/custom.css">
    <!-- Icon fonts-->
    <link rel="stylesheet" href="/lfse/projet5_lfse/public/css/pe-icon-7-stroke.css">
    <!-- Lightbox CSS-->
    <link rel="stylesheet" href="/lfse/projet5_lfse/public/vendor/lightbox2/css/lightbox.min.css">
    <!-- Leaflet CSS-->
    <link rel="stylesheet" href="/lfse/projet5_lfse/public/vendor/leaflet/leaflet.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="/lfse/projet5_lfse/public/css/style.default.css" id="theme-stylesheet">


    <!-- Favicon-->

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/lfse/projet5_lfse/public/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->


</head>


<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
        <div class="container">
            <a class="navbar-brand">La Mayenne Sur Écoute</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=displayGames">Histoires</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=displayRules">Règles du jeu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=disconnect">Se déconnecter</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <section><?= $content ?>

    </section>


    <!-- JavaScript files-->

    <script src="/lfse/projet5_lfse/public/vendor/node_modules/howler/dist/howler.js"></script>
    <script src="/lfse/projet5_lfse/public/vendor/node_modules/howler/dist/howler.core.min.js"></script>
    <script src="/lfse/projet5_lfse/public/vendor/node_modules/howler/dist/howler.min.js"></script>
    <script src="/lfse/projet5_lfse/public/vendor/node_modules/howler/dist/howler.spatial.min.js"></script>
    <script src="/lfse/projet5_lfse/public/vendor/node_modules/howler/src/howler.core.js"></script>

    <script src="/lfse/projet5_lfse/public/vendor/jquery/jquery.min.js"></script>
    <script src="/lfse/projet5_lfse/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/lfse/projet5_lfse/public/vendor/lightbox2/js/lightbox.min.js"></script>
    <script src="/lfse/projet5_lfse/public/vendor/leaflet/leaflet.js"></script>
    <script src="/lfse/projet5_lfse/public/js/front.js"></script>
    <script src="/lfse/projet5_lfse/public/vendor/node_modules/howler/dist/howler.js"></script>
    <script src="/lfse/projet5_lfse/vendor/src/sounds.js"></script>
    <script src="/lfse/projet5_lfse/public/js/submit.js"></script>

    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</body>

</html>