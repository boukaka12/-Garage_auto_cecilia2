<?php

require('../model/formulaire_ajout_contact.php');// .class.php pour bien identifier les class

//et ici on va faire nos traitements
if(isset($_POST['submit'])){
$contact = new contact(NULL,$_POST['nom_cont'],
$_POST['prenom_cont'],
$_POST['email_cont'],
$_POST['telephone_cont'],
$_POST['message_cont']);

$retour=$contact->setContact();
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