<?php
include_once('scripts_php/connexion.php');
include('MODULES/head_nav.php');
if (isset($_GET['login']) and isset($_GET['mdp'])) {    // Vérifier que la variable POST login et mdp existent
    $login = $_GET['login'];
    $mdp = $_GET['mdp'];

    $requete= "SELECT mdp FROM connexion WHERE login='$login'"; // Le login est une chaîne de caractère, à entourer de quote. On cherche le mdp depuis le login
    if ($reponse=$pdo->query($requete)){
        if ($enr = $reponse->fetch()) {
            if ($mdp==$enr['mdp']) {
                echo "<div id='repCo'>Authentification réussie</div>";
                echo "<div id='comeback'><a href='main2.php?login=".$login."'>Retour au site</a></div>"; // Si l'authentification réussie, on renvoie vers une seconde page de recherche lié à l'utilisateur
            }else {
                print "Erreur : Mot de passe erroné";
                echo "<div='comeback'><a href='connexion_inscription.php'>Retour au site</a></div>"; // Si elle échoue, on envoie un message d'erreur et l'on renvoie vers la page de connexion
            }
        }else {
            print "Erreur : login inexistant";
            echo "<div='comeback'><a href='connexion_inscription.php'>Retour au site</a></div>";

        }

    }else {
        print "Erreur : requête erronée";
        echo "<div='comeback'><a href='connexion_inscription.php'>Retour au site</a></div>";

    }
}else{
    echo "message d'erreur";
    echo "<div='comeback'><a href='connexion_inscription.php'>Retour au site</a></div>";
}
?>
<?php
include('MODULES/footer.php');
?>