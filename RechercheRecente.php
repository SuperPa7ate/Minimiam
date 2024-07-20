<?php
include_once('Connexion.php');
$historique= "SELECT id, nom, ingredient FROM scrap WHERE 1 ORDER BY id DESC";// selectionne et affiche les recettes par ordre décroissant (du plus récent)
if ($hist = $pdo->query($historique)) {
    while($rep = $hist->fetch()){
        echo $string = "<div><a href='historique.php?ID=".$rep["id"]."'>".$rep["nom"]."</div>";
    }
}else {
    echo "échec requête";
}

?>