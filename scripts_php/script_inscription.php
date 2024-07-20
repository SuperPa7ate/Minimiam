<?php
    include_once('connexion.php');
    if (isset($_POST['login'], $_POST['mdp'], $_POST['mail'])) {    // Vérifier que la variable POST login, mdp et mails existent
        $login = $_POST['login'];
        $mdp = $_POST['mdp'];
        $mail = $_POST['mail'];

        // Préparation requête
        $req = "INSERT INTO connexion (login,mdp,mail) VALUES ('$login','$mdp','$mail')";

        
        // Envoie de la requête pour insérer des valeurs dans la base de données 'Connexion'.
        if ($pdo->query($req)){
            echo "Inscription réussie";
            echo "<div><a href='connexion_inscription.php'>Retour à la page de connexion</div>"; // Si l'inscription réussit, retourne à la page connexion.
            
        }else{
            echo "Echec lors de l'inser";
        }
    }else{
        echo "Impossible de vous inscrire";
    }         
?>