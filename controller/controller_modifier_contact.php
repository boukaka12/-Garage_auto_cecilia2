<?php
try{
	$bdd = new PDO('mysql:host=localhost;dbname=garage_automobile;charset=utf8', 'root', '');
}catch(Exception $e){
	die('Erreur : ' . $e->getMessage());
}
//récupérant l'ID du contact
if(!isset($_GET['id_cont'])){
	header('Location:../liste_contact.php');
}else{
	$idC=$_GET['id_cont'];
	$requete=$bdd->prepare('SELECT * FROM contact WHERE id_cont=:id_cont');
	$requete->execute(array('id'=>$idC));
	$contact=$requete->fetchObject();
	include('../View/formulaire_modif.phtml');
}
?>