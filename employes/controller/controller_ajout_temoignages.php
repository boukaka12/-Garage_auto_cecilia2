<?php

require('../model/formulaire_ajout_temoignages.php');// .class.php pour bien identifier les class

//et ici on va faire nos traitements
if(isset($_POST['submit'])){
$temoignages = new temoignages(NULL,$_POST['nom_tem'],
$_POST['prenom_tem'],
$_POST['message']);

$retour=$temoignages->setTemoignages();
if($retour){
	echo "Insertion reussie <br>";
	echo'<a href="../employe_accueil.php">retourner?</a>';
}
else{
	echo "insertion échouée";
}
}

include('../view/formulaire_ajout_temoignages.php');
?>