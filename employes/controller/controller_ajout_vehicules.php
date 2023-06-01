<?php

require('../model/formulaire_ajout_vehicules.php');// .class.php pour bien identifier les class

//et ici on va faire nos traitements
if(isset($_POST['submit'])){
	$vehicules = new vehicules(NULL,$_POST['couleur'],
	$_POST['modele_veh'],
	$_POST['prix_veh'],
	$_POST['description_veh'],
	$_POST['kilometrage_veh'],
	$_POST['annee_circulation_veh'],
	$_POST['type_de_moteur_veh'],
	$_POST['nbre_de_places_veh']);

	$retour=$vehicules->setVehicules();
	if($retour){
		echo "Insertion reussie <br>";
		echo'<a href="../employe_accueil.php">retourner?</a>';
	}
	else{
		echo "insertion échouée";
	}
}

include('../view/formulaire_ajout_vehicules.php');
?>