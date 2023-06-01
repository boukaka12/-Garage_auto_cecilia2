<?php

$idC=$_POST['id_cont'];

try{
	$bdd = new PDO('mysql:host=localhost;dbname=garage_automobile;charset=utf8', 'root', '');
}catch(Exception $e){
	die('Erreur : ' . $e->getMessage());
}


//récupérant l'ID de notre contact


if(isset($_POST['id_cont'])){
	$idC=$_POST['id_cont'];
	$requete=$bdd->prepare('SELECT* FROM contact WHERE id_cont=:id_cont');
	$requete->execute(array('id_cont'=>$idC));
	$contact=$requete->fetchObject();
	var_dump($requete);
	
	
	if(is_object($contact)){
		$requete=$bdd->prepare('DELETE FROM contact WHERE id_cont=:id_cont');
		$requete->execute(array('id_cont'=>$idC));
		
		
		
		echo "<script type='text/javascript'>alert('contact supprimer avec succès');</script>";
		//echo "<script type='text/javascript'>document.location.replace('../admin-acceuil.php');</script>";
		echo'<a href="../admin-acceuil.php">retourner?</a>';
	}
	elseif($idC=$_POST['id_cont']==""){
		echo "<script type='text/javascript'>alert('Veuillez selectionnez un Id');</script>";
		 echo "<script type='text/javascript'>document.location.replace('../admin-acceuil.php');</script>";
		
	}
	
	else{
		echo "<script type='text/javascript'>alert('Contact non existant');</script>";
		 echo "<script type='text/javascript'>document.location.replace('../admin-acceuil.php');</script>";
	}
	
}

?>

	
 
	