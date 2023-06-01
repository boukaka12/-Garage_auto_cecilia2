<?php
try{
	$bdd = new PDO('mysql:host=localhost;dbname=garage_automobile;charset=utf8', 'root', '');
}catch(Exception $e){
	die('Erreur : ' . $e->getMessage());
}
//récupérant l'ID de contact
if(!isset($_GET['id_emp'])){
	header('Location:../admin-acceuil.php');
}else{
	$idE=$_GET['id_emp'];
	$requete=$bdd->prepare('DELETE FROM employes WHERE id_emp=:id_emp');
	$requete->execute(array('id_emp'=>$idE));
	$employes=$requete->fetchObject();
	if($employes){
	
	echo"supression : ".$idE." réussi";
	echo'<br><a href="../admin-acceuil.php">retourner?</a>';
	}
}
?>