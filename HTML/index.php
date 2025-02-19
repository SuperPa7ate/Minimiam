<?php
?>

<html>

    <head>
        <!-- utilisation de defer pour charger les scripts après le chargement de la page -->
        <script type="text/javascript" src="../JS/jquery-3.5.1.min.js"></script>
        <meta charset="utf-8" />
        <title>MiniMiaM</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="../JS/script.js" crossorigin="anonymous" defer></script>
        <link rel="stylesheet" href="../CSS/stylesheet.css"/>
        <!-- ajouter logo miniature MMM -->
    </head>

    <body class="text-center bg-dark">
        <div class="mx-auto">

            <nav class="navbar navbar-expand-lg bg-light fixed-top">
                <div class="container-fluid">
                    <div class="logo mr-auto">
                        <img id="logoH" src="IMAGES/Elements transparents-02.png" alt="Logo Mini" class="img-fluid" />
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ms-auto">
                            <button type="button" class="btn btn-link nav-link" onclick="document.location.href='connexion.html';">Connexion/Inscription</button>
                            <button type="button" class="btn btn-link nav-link" onclick="document.location.href='contact.html';">Contact</button>
                            <button type="button" class="btn btn-link nav-link" onclick="document.location.href='presentation.html';">Qui sommes-nous ?</button>
                        </div>
                    </div>
                </div>
            </nav>
    
            <!-- Application -->
            <section id="app" class="py-5">
                <div id="barreR" class="container py-5">
                    <div class="pb-5">

                        <div class="row justify-content-center align-items-center">

                            <div class="col-8 col-sm-6 col-lg-3">
                                <img id="" src="IMAGES/LOGO-transparent-01.png" alt="Logo" class="img-fluid" />
                            </div>
                            
                            <div class="col-12">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-12 col-lg-4">
                                        <input class="form-control w-100" type="text" id="recherche1" placeholder="Entrez une recette">
                                        <button class="btn btn-primary mt-4" id="GO" >Rechercher</button>
                                        <button class="btn btn-primary mt-4" id="omqcs" >On mange quoi ce soir ?</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Sous division de le Recherche : partie réglages et historique --> 
                        <div id="features">
                            <div id="repFeatures">
                        <!-- Création d'un tableau pour set-up les réglages-->
                                <button class="btn btn-secondary mt-4" id="reg">Réglages</button>
                                <button class="btn btn-secondary mt-4" id="hist">Historique</button>
                                <button class="btn btn-secondary mt-4" id="double_rech">Double recherche</button>
                                <!-- Tableau-->
                                <div id="reglages" style="display:none">

                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="750g">750g</label>
                                        <input class="form-check-input" type="checkbox" id="750g" name="site" value="0">
                                    </div>
                                    
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="HelloFresh">HelloFresh</label>
                                        <input class="form-check-input" type="checkbox" id="HelloFresh" name="site" value="1">
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="Marmiton">Marmiton</label>
                                        <input class="form-check-input" type="checkbox" id="Marmiton" name="site" value="2">
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="CuisineAZ">CuisineAZ</label>
                                        <input class="form-check-input" type="checkbox" id="CuisineAZ" name="site" value="3">
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="AtelierDesChefs">AtelierDesChefs</label>
                                        <input class="form-check-input" type="checkbox" id="AtelierDesChefs" name="site" value="4">
                                    </div>
                                </div>
                    
                                <!-- Titre tableau affichage -->
                                <div id="historique" style="display:none">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div id="omqcs_result" class="alert alert-light mt-4" style="display:none">
                            </div>
                        </div>
                        <div id="main_result" class="row justify-content-center">
                            <div class="col-5">
                                <div id="resultats" class="alert alert-light mt-4" style="display:none">
                                </div>
                            </div>
                            
                            <div id="double_recherche" class="col-5" style="display:none">
                                <div id="resultats_double_recherche" class="alert alert-light mt-4">
                                    Pour afficher une autre recherche, lancez une nouvelle requête.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>     
            </section>
            <section id="bottomapp" class="py-5" style="display:none">
            </section>

            <!-- Pied de page-->
            <footer class="footer mt-auto py-4 fixed-bottom bg-dark">
                <div class="container">
                    <p>Tous droits réservés, LUFFROY Raphaël, FERNANDEZ Romain</p>
                    <p class="mb-0">MiniMiam, 24/03/2022, Logo par Jonas Nujaym</p>
                </div>
            </footer>


        </div>

    </body>

</html>