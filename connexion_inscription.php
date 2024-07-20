<?php
include_once("scripts_php/connexion.php");
include("MODULES/head_nav.php");

?>

    <form id="formConnexion" method="get" action="script_connexion.php"> <!-- Formulaire pour envoyer par url le login et le mdp -->
        <input type="text" id="login" placeholder="Entrez votre Login" name='login'>
        <input type="password" id="mdp" placeholder="Entrez votre mot de passe" name='mdp'>
        <input type="submit" value="Se Connecter">                       <!-- Le bouton renvoie vers une page transitoire-->
    </form>
    <!-- pq pas a href ? -->
    <div><button onclick="document.location.href='inscription.php'">Inscription</button></div>
<?php

include("MODULES/footer.php");
?>
