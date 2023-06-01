<?php

require('../model/model_ajout_temoignages.php');// .class.php pour bien identifier les class

//et ici on va faire nos traitements
if(isset($_POST['submit'])){
$temoignage = new temoignage(NULL,$_POST['nom_tem'],
$_POST['prenom_tem'],
$_POST['message']);

$retour=$temoignage->setTemoignage();
if($retour){
	echo "Insertion reussie <br>";
	echo'<a href="../index.php">retourner?</a>';
}
else{
	echo "insertion échouée";
	echo'<a href="../index.php">retourner</a>';
  }
}

?>
