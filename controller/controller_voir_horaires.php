<?php
//connexion à la base de données
try {
  $bdd = new PDO('mysql:host=localhost;dbname=garage_automobile;charset=utf8', 'root', '');
}
catch(Exception $e) {
  die($e->getMessage());
}

//Préparation de la requete
$reponses = $bdd->prepare('SELECT * FROM horaires_ouvertures');

//Exécution de la requete
$executereq = $reponses->execute();

//Récupération des résultats en une sele fois
$horaires = $reponses->fetchAll();

?>