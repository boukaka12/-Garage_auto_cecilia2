<?php
try{
	$bdd = new PDO('mysql:host=localhost;dbname=garage_automobile;charset=utf8', 'root', '');
}catch(Exception $e){
	die('Erreur : ' . $e->getMessage());
}
//récupérant l'ID de contact
// if(!empty($_POST['nom'])) // teste si le nom n'est pas vide
//if(isset($_POST['submit'])){
	if(trim($_POST['modele_veh'])!='' and isset($_POST['prix_veh'])){
		$requete=$bdd->prepare('UPDATE vehicules SET immatricule_veh=:immatricule_veh,couleur=:couleur,modele_veh=:modele_veh,prix_veh=:prix_veh,
		description_veh=:description_veh,kilometrage_veh=:kilometrage_veh,annee_circulation_veh=:annee_circulation_veh,type_de_moteur_veh=:type_de_moteur_veh,nbre_de_places_veh=:nbre_de_places_veh WHERE immatricule_veh=:immatricule_veh');
		$retour=$requete->execute(array(
			'immatricule_veh'=>$_POST['immatricule_veh'],
			'couleur'=>$_POST['couleur'],
			'modele_veh'=>$_POST['modele_veh'],
			'prix_veh'=>$_POST['prix_veh'],
			'description_veh'=>$_POST['description_veh'],
			'kilometrage_veh'=>$_POST['kilometrage_veh'],
			'annee_circulation_veh'=>$_POST['annee_circulation_veh'],
			'type_de_moteur_veh'=>$_POST['type_de_moteur_veh'],
			'nbre_de_places_veh'=>$_POST['nbre_de_places_veh']
		));
		
		if($retour){
			echo'MAJ réussie! : ';
			echo'<a href="../employe_accueil.php">retourner?</a>';
		}else{
			echo'MAJ échoué! -> ';		
			echo'<a href="../controller/controller_modif_vehicules.php?immatricule_veh='.$_POST['immatricule_veh'].'">retourner</a>';
		}
	}else{
		echo"ERREUR de saisie: ";
		echo'<a href="../controller/controller_modif_vehicules.php?immatricule_veh='.$_POST['immatricule_veh'].'">reprendre la saisie!</a>';
	}
//}
?>