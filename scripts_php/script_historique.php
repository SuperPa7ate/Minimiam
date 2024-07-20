<?php
include_once('connexion.php');
$historique= "SELECT id, nom, ingredient FROM scrap WHERE 1 ORDER BY id DESC"; // selectionne et affiche les recettes par ordre décroissant (du plus récent)
if ($hist = $pdo->query($historique)) { //Si la requête fonctionne
    while($rep = $hist->fetch()){ // On range chaque élément selectionné dans un tableau
        echo $string = "<div><a href='historique.php?ID=".$rep["id"]."'>".$rep["nom"]."</div>"; // Établit une liste des dernières recherches effectuées
    }
}else {
    echo "échec requête";
}

?>