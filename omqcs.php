<?php
include_once('Connexion.php');
$req="SELECT nom, ingredient FROM scrap ORDER BY RAND() Limit 1";

echo "<table></br><tr><td>nom</td><td>Ingredients</td></tr>"; 

if ($rand = $pdo->query($req)) {
    while ($enr = $rand->fetch()) {  // Boucle pour parcourir les différents résultats du tableau $Reponse
        echo "<tr>"; // Ecriture de la structure du tableau
        echo "<td>".$enr['nom']."</td><td>".$enr['ingredient']."</td>"; // Écriture de la structure du tableau incluant les données enregistrées dans la variable $enr
        echo "</td></br></table>";  // Fin de la structure tableau
    }
} else {
    echo "Je ne sais pas ce que vous allez manger ce soir";
}

// $verif =$pdo->prepare("SELECT * FROM scrap WHERE nom =?"); // Préparation de la requête pour vérifier si la recette a été scrappée ou non
//         $verif->execute(["riz au lait"]); // Execution de la requête avec le nom de la recette
//         $ingr = $verif->fetch(); // On extrait les ingrédients, ce qui confirme si la recette existe dans la BDD
//         if ($ingr) { // Si la variable ingredient existe, alors la variable nom aussi donc on lance l'affichage


//             $req = "SELECT nom , ingredient FROM scrap WHERE nom ='riz au lait'"; // 

//                 // Écriture de la structure html pour l'affichage de données
//             echo "<table></br><tr><td>nom</td><td>Ingredients</td></tr>"; 

//                 // Établissement de la connexion entre la base de données et le script php

//                 if ($reponse = $pdo->query($req)) { // Si la requête fonctionne, enregistrer la séléction dans le tableau $reponse
//                     while ($enr = $reponse->fetch()) {  // Boucle pour parcourir les différents résultats du tableau $Reponse
//                         echo "<tr>"; // Ecriture de la structure du tableau
//                         echo "<td>".$enr['nom']."</td><td>".$enr['ingredient']."</td>"; // Écriture de la structure du tableau incluant les données enregistrées dans la variable $enr
//                         echo "</td></br></table>";  // Fin de la structure tableau
//                     }
//                 }else {
//                 print "La requête n'a pas pu s'effectuer"; // Si il est impossible d'écrire dans le tableau, afficher un message d'erreur
//                 }
//         }    
// echo $req;
echo "ta main et garde l'autre pour demain";
?>