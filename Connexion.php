<?php
try{

    /* Connexion à la base */
    $pdo = new PDO('mysql:host=localhost;dbname=test1','root');
}
catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
    print "Accès impossible à la base !<br/>\n";
}
?>