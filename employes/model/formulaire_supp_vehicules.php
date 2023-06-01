<?php
try{
	$bdd = new PDO('mysql:host=localhost;dbname=garage_automobile;charset=utf8', 'root', '');
}catch(Exception $e){
	die('Erreur : ' . $e->getMessage());
}
//récupérant l'ID
if(!isset($_GET['immatricule_veh'])){
	header('Location:../employe_accueil.php');
}else{
	$idV=$_GET['immatricule_veh'];
	$requete=$bdd->prepare('DELETE FROM vehicules WHERE immatricule_veh=:immatricule_veh');
	$requete->execute(array('immatricule_veh'=>$idV));
	$vehicules=$requete->fetchObject();
	if($vehicules){
	
	echo"supression : ".$idV." réussi";
	echo'<br><a href="../employe_accueil.php">retourner?</a>';
	}
}
?>