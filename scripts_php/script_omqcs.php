<?php
include_once('connexion.php');
$req="SELECT nom, ingredient FROM scrap ORDER BY RAND() Limit 1";

echo "<table></br><tr><td>nom</td><td>Ingredients</td></tr>"; 

if ($rand = $pdo->query($req)) {
    while ($enr = $rand->fetch()) {  // Boucle pour parcourir les différents résultats du tableau $Reponse
        echo "<tr>"; // Ecriture de la structure du tableau
        echo "<td>".$enr['nom']."</td><td>".$enr['ingredient']."</td>"; // Écriture de la structure du tableau incluant les données enregistrées dans la variable $enr
        echo "</td></br></table>";  // Fin de la structure tableau
    }
} else {
    echo "Je ne sais pas ce que vous allez manger ce soir, probablement ta main et garde l'autre pour demain";
}
?>