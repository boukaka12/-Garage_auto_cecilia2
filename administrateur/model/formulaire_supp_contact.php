<?php
try{
	$bdd = new PDO('mysql:host=localhost;dbname=garage_automobile;charset=utf8', 'root', '');
}catch(Exception $e){
	die('Erreur : ' . $e->getMessage());
}
//récupérant l'ID de contact
if(!isset($_GET['id_cont'])){
	header('Location:../admin-acceuil.php');
}else{
	$idC=$_GET['id_cont'];
	$requete=$bdd->prepare('DELETE FROM contact WHERE id_cont=:id_cont');
	$requete->execute(array('id_cont'=>$idC));
	$contact=$requete->fetchObject();
	if($contact){
	
	echo"supression : ".$idC." réussi";
	echo'<br><a href="../admin-acceuil.php">retourner?</a>';
	}
}
?>