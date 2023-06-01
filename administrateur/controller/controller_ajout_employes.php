<?php

require('../model/formulaire_ajout_employes.php');// .class.php pour bien identifier les class

//et ici on va faire nos traitements
if(isset($_POST['submit'])){
$employes = new employes(NULL,$_POST['nom_emp'],
$_POST['prenom_emp'],
$_POST['adresse_emp'],
$_POST['sexe_emp'],
$_POST['telephone_emp'],
$_POST['email_emp'],
$_POST['mot_de_pass_emp']);

$retour=$employes->setEmployes();
if($retour){
	echo "Insertion reussie <br>";
	echo'<a href="../admin-acceuil.php">retourner?</a>';
}
else{
	echo "insertion échouée";
}
}

include('../view/formulaire_ajout_employes.php');
?>