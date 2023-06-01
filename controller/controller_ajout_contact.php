<?php

require('../model/model_ajout_contact.php');// .class.php pour bien identifier les class

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
	echo'<a href="../index.php">retourner</a>';
}
else{
	echo "insertion échouée";
	echo'<a href="../view/ajout_temoignages.php">retourner</a>';
}
}

?>