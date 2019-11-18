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


    <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
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


    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/public/img/favicon/ms-icon-144x144.png">
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
            <a id="homeLink" class="navbar-brand" href="index.php?action=home">La Mayenne Sur Écoute</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">

                    </li>

                    <li id="connectLink" class="nav-item">
                        <a class="nav-link" href="index.php?action=connect">Se connecter</a>
                    </li>
                    <li class="nav-item">
                        <a id="registerLink" class="nav-link" href="index.php?action=register">Créer un compte</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <section><?= $content ?>
    </section>
    <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
        <div class="container text-center">
            <a href="index.php?action=legal">Mentions légales</a>
        </div>
        <div class="container text-center">
            <small>Copyright 2019 &copy; Jmraff</small>
        </div>
    </footer>
    <div class="alert alert-dismissible text-center cookiealert" role="alert">

        <div class="cookiealert-container">

            <b>Vous aimez les cookies?</b> &#x1F36A; Nous utilisons des cookies pour améliorer votre
            expériencesur le site. <a href="http://cookiesandyou.com/" target="_blank">En savoir plus</a>



            <button type="button" class="btn btn-primary btn-sm acceptcookies" aria-label="Close">

                D'accord

            </button>

        </div>

    </div>

    <!-- JavaScript files-->
    <script src="/public/vendor/jquery/jquery.min.js"></script>
    <script src="/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/public/vendor/lightbox2/js/lightbox.min.js"></script>
    <script src="/public/vendor/leaflet/leaflet.js"></script>
    <script src="/public/js/front.js"></script>
    <script src="/public/js/Dropdown.js"></script>
    <script src="/App/js/submit.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.0/js.cookie.min.js"></script>
    <script src="cookiealert-dependencies.js"></script>
    <link rel="stylesheet" href="/public/css/cookiealert.css">

    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</body>

</html>