<?php
include_once("scripts_php/connexion.php");
include("MODULES/head_nav.php");
?>

    <div id="Ins"> <!-- Formulaire pour envoyer par url le login et le mdp -->
        <input type="text" id="login" placeholder="Entrez votre Login">
        <input type="password" id="mdp" placeholder="Entrez votre mot de passe">
        <input type="text" id="mail" placeholder="Entrez votre mel">
        <button id="inscriptionBtn">S'inscrire</button>                     <!-- Le bouton renvoie vers une page transitoire-->
    </div>
    <div id="repIns">
    </div>
<?php
include("MODULES/footer.php");
?>
