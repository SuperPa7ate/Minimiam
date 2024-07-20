<html>

    <head>
        <!-- utilisation de defer pour charger les scripts après le chargement de la page -->
        <script type="text/javascript" src="JS/jquery-3.5.1.min.js"></script>
        <meta charset="utf-8" />
        <title>MiniMiaM</title>
        <link rel="icon" type="image/x-icon" href="IMAGES/majin_minimiam.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="JS/script.js" crossorigin="anonymous" defer></script>
        <link rel="stylesheet" href="CSS/stylesheet.css"/>
        <!-- ajouter logo miniature MMM -->
    </head>

    <body class="text-center text-bg-dark">
        <div class="mx-auto">

            <nav class="navbar navbar-expand-lg bg-light fixed-top">
                <div class="container-fluid">
                    <div class="logo mr-auto">
                        <a href="main.php">
                            <img id="logoH" src="IMAGES/Elements transparents-02.png" alt="Logo Mini" class="img-fluid" />
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ms-auto">
                            <button type="button" class="btn btn-link nav-link" onclick="document.location.href='connexion_inscription.php';">Connexion/Inscription</button>
                            <button type="button" class="btn btn-link nav-link" onclick="document.location.href='contact.php';">Contact</button>
                            <button type="button" class="btn btn-link nav-link" onclick="document.location.href='presentation.php';">Qu'est-ce que Minimiam ?</button>
                        </div>
                    </div>
                </div>
            </nav>
        
        <!-- Application -->
        <section id="app" class="py-5">