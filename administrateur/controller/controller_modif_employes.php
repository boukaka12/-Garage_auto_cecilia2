<?php
try{
	$bdd = new PDO('mysql:host=localhost;dbname=garage_automobile;charset=utf8', 'root', '');
}catch(Exception $e){
	die('Erreur : ' . $e->getMessage());
}
//récupérant l'ID du employe
if(!isset($_GET['id_emp'])){
	
	header('Location:../admin-acceuil.php');
}else{
	$idE=$_GET['id_emp'];
	$requete=$bdd->prepare('SELECT * FROM employes WHERE id_emp=:id_emp');
	$requete->execute(array('id_emp'=>$idE));
	$employes=$requete->fetchObject();
	include('../View/formulaire_modif_employes.php');
}
?>