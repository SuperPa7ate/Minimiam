<?php
    if (isset($_POST['login']) and isset($_POST['mdp'])) {    // Vérifier que la variable POST login et mdp existent
        $login = $_POST['login'];
        $mdp = $_POST['mdp'];

        $requete= "SELECT mdp FROM Connexion WHERE login='$login'"; // Le login est une chaîne de caractère, à entourer de quote. On cherche le mdp depuis le login
        include_once("Connexion.php");
        if ($reponse=$pdo->query($requete)){
            if ($enr = $reponse->fetch()) {
                if ($mdp==$enr['mdp']) {
                    print "Authentification réussie";
                }else {
                    print "Erreur : Mot de passe erroné";
                }
            }else {
                print "Erreur : login inexistant";

            }

        }else {
            print "Erreur : requête erronée";

        }
    }else{
        print "Erreur : aucune donnée";

    
    }
?>