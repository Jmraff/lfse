<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="/public/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Google fonts-->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/public/css/custom.css">
    <!-- Icon fonts-->
    <link rel="stylesheet" href="/public/css/pe-icon-7-stroke.css">
    <!-- Lightbox CSS-->
    <link rel="stylesheet" href="/public/vendor/lightbox2/css/lightbox.min.css">
    <!-- Leaflet CSS-->
    <link rel="stylesheet" href="/public/vendor/leaflet/leaflet.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="/public/css/style.default.css" id="theme-stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />


    <link href="/vendor/node_modules/angular-vumeter/dist/angular-vumeter.min.css" rel="stylesheet" type="text/css">
    <link href="/vendor/node_modules/angular-vumeter/dist/angular-vumeter.css" rel="stylesheet" type="text/css">
    <!-- Favicon-->

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/public/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="/public/vendor/node_modules/howler/dist/howler.js"></script>


    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->


</head>



<body>
    <div id="preloadingDiv"></div>
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
                        <a class="nav-link" href="index.php?action=gameHome">Histoires</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=rules">Règles du jeu</a>
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




    <script src="/public/vendor/jquery/jquery.min.js"></script>
    <script src="/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/public/vendor/lightbox2/js/lightbox.min.js"></script>
    <script src="/public/vendor/leaflet/leaflet.js"></script>
    <script src="/public/js/front.js"></script>
    <script src="/public/vendor/node_modules/howler/dist/howler.js"></script>
    <script src="/App/js/sounds.js"></script>
    <script src="/App/js/submit.js"></script>
    <script src="/vendor/node_modules/angular-vumeter/dist/angular-vumeter.min.js"></script>
    <script src="/vendor/node_modules/angular-vumeter/dist/angular-vumeter.js"></script>


    <!-- <script src="/vendor/node_modules/trackswitch/dist/js/trackswitch.js"></script> -->







    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</body>


</html>