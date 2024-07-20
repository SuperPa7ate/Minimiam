<?php

    if (isset($_POST['login'], $_POST['mdp'], $_POST['mail'])) {    // Vérifier que la variable POST login, mdp et mails existent
        $login = $_POST['login'];
        $mdp = $_POST['mdp'];
        $mail = $_POST['mail'];

        // Structuration des données
        $insc = [
            'login'=>$login,
            'mdp'=>$mdp,
            'mail'=>$mail,
        ];

        // Préparation requête
        $req = "INSERT INTO `Connexion` (login,mdp,mail) VALUES ('$login','$mdp','$mail')";

        // Envoie de la requête pour insérer des valeurs dans la base de données 'Connexion'.


        include_once('Connexion.php');
        if (!$pdo->query($req)){
            echo "Echec lors de l'inser";
        }
    }else{
        echo "Impossible de vous inscrire";
    }         
?>