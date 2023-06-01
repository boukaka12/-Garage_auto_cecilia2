<?php

require('../model/model_ajout_horaires.php');// .class.php pour bien identifier les class

//et ici on va faire nos traitements
if(isset($_POST['submit'])){
$horaires = new horraires(NULL,
$_POST['jours'],
$_POST['heure_matin'],
$_POST['heure_aprem']);

$retour=$horaires->setHoraire();
if($retour){
	echo "Insertion reussie <br>";
	echo'<a href="../admin-acceuil.php">retourner?</a>';
}
else{
	echo "insertion échouée";
}
}

include('../view/formulaire_ajout_contact.php');

?>
