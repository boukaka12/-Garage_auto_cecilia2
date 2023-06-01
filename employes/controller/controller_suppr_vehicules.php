<?php

$idV=$_POST['immatricule_veh'];

try{
	$bdd = new PDO('mysql:host=localhost;dbname=garage_automobile;charset=utf8', 'root', '');
}catch(Exception $e){
	die('Erreur : ' . $e->getMessage());
}


//récupérant l'ID de notre employe


if(isset($_POST['immatricule_veh'])){
	$idV=$_POST['immatricule_veh'];
	$requete=$bdd->prepare('SELECT* FROM vehicules WHERE immatricule_veh=:immatricule_veh');
	$requete->execute(array('immatricule_veh'=>$idV));
	$vehicules=$requete->fetchObject();
	var_dump($requete);
	
	
	if(is_object($vehicules)){
		$requete=$bdd->prepare('DELETE FROM vehicules WHERE immatricule_veh=:immatricule_veh');
		$requete->execute(array('immatricule_veh'=>$idV));
		
		
		echo "Suppréssion reussie <br>";
		echo'<a href="../employe_accueil.php">retourner?</a>';
		//echo "<script type='text/javascript'>alert('contact supprimer avec succès');</script>";
		//echo "<script type='text/javascript'>document.location.replace('../admin-acceuil.php');</script>";
        
	}
	elseif($idV=$_POST['immatricule_veh']==""){
		echo "<script type='text/javascript'>alert('Veuillez selectionnez un Id');</script>";
		 echo "<script type='text/javascript'>document.location.replace('../employe_accueil.php');</script>";
		
	}
	
	else{
		echo "<script type='text/javascript'>alert('Voiture non existant');</script>";
		 echo "<script type='text/javascript'>document.location.replace('../employe_accueil.php');</script>";
	}
	
}

?>

	
 
	