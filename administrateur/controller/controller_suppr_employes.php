<?php

$idE=$_POST['id_emp'];

try{
	$bdd = new PDO('mysql:host=localhost;dbname=garage_automobile;charset=utf8', 'root', '');
}catch(Exception $e){
	die('Erreur : ' . $e->getMessage());
}


//récupérant l'ID de notre employe


if(isset($_POST['id_emp'])){
	$idE=$_POST['id_emp'];
	$requete=$bdd->prepare('SELECT* FROM employes WHERE id_emp=:id_emp');
	$requete->execute(array('id_emp'=>$idE));
	$employes=$requete->fetchObject();
	var_dump($requete);
	
	
	if(is_object($employes)){
		$requete=$bdd->prepare('DELETE FROM employes WHERE id_emp=:id_emp');
		$requete->execute(array('id_emp'=>$idE));
		
		
		echo "Suppréssion reussie <br>";
		echo'<a href="../admin-acceuil.php">retourner?</a>';
		//echo "<script type='text/javascript'>alert('contact supprimer avec succès');</script>";
		//echo "<script type='text/javascript'>document.location.replace('../admin-acceuil.php');</script>";
        
	}
	elseif($idE=$_POST['id_emp']==""){
		echo "<script type='text/javascript'>alert('Veuillez selectionnez un Id');</script>";
		 echo "<script type='text/javascript'>document.location.replace('../admin-acceuil.php');</script>";
		
	}
	
	else{
		echo "<script type='text/javascript'>alert('Contact non existant');</script>";
		 echo "<script type='text/javascript'>document.location.replace('../admin-acceuil.php');</script>";
	}
	
}

?>

	
 
	