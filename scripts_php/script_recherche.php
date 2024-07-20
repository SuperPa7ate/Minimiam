<?php
    include_once('connexion.php');      
    if (isset($_POST['recette'])) { // Vérification si la variable POST Recette existe
        $recette=$_POST['recette']; // Déclaration de la variable Recette  

        $verif =$pdo->prepare("SELECT * FROM scrap WHERE nom =?"); // Préparation de la requête pour vérifier si la recette a été scrappée ou non
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
            
        } else { // Si le nom de la recette ne figure pas dans la BDD on lance le scrappeur

                //on vérifie si des cases de réglages ont été cochées (sélection des sites)
                if(empty($_POST["site"])){

                    //si non on lance le script python avec uniquement la requête utilisateur
                $scrap=shell_exec("python ../PYTHON/main.py \"$recette\"");
                echo $scrap;


                    

                } else {

                    //si oui on transforme les valeurs des checkbox en tableau pour les envoyer vers python
                    $site=json_encode($_POST["site"]);
                    
                    $scrap=shell_exec("python ../PYTHON/main.py \"$recette\" $site");
                    echo $scrap;
                }
            $reqAjout = "INSERT INTO scrap(nom, ingredient) VALUES ('$recette','$scrap')"; 
            $pdo->query($reqAjout);
        }
    } else {
        echo "la variable n'existe pas";
    }

        
?>