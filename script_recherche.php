<?php
    include_once('Connexion.php');      
    if (isset($_POST['recette'])) { // Vérification si la variable POST Recette existe
        $recette=$_POST['recette']; // Déclaration de la variable Recette

        $verif =$pdo->prepare("SELECT * FROM Scrap WHERE nom =?"); // Préparation de la requête pour vérifier si la recette a été scrappée ou non
        $verif->execute([$recette]); // Execution de la requête avec le nom de la recette
        $ingr = $verif->fetch(); // On extrait les ingrédients, ce qui confirme si la recette existe dans la BDD
        if ($ingr) { // Si la variable ingredient existe, alors la variable nom aussi donc on lance l'affichage


            $req = "SELECT nom , ingredient FROM scrap WHERE nom ='$recette'"; // 

                // Écriture de la structure html pour l'affichage de données
            echo "<table></br><tr><td>nom</td><td>Ingredients</td></tr>"; 

                // Établissement de la connexion entre la base de données et le script php

                if ($reponse = $pdo->query($req)) { // Si la requête fonctionne, enregistrer la séléction dans le tableau $reponse
                    while ($enr = $reponse->fetch()) {  // Boucle pour parcourir les différents résultats du tableau $Reponse
                        echo "<tr>"; // Ecriture de la structure du tableau
                        echo "<td>".$enr['nom']."</td><td>".$enr['ingredient']."</td>"; // Écriture de la structure du tableau incluant les données enregistrées dans la variable $enr
                        echo "</td></br></table>";  // Fin de la structure tableau
                    }
                }else {
                print "La requête n'a pas pu s'effectuer"; // Si il est impossible d'écrire dans le tableau, afficher un message d'erreur
                } 
            
        } else { // Si la variable POST n'existe pas, lancer le script python pour l'inclure dans la base de données
            $i = `python PYTHON/print.py $recette`;
            echo $i;
        }
    } else {
        echo "la variable n'existe pas";
    }

        
?>