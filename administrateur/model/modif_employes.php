<?php
try{
	$bdd = new PDO('mysql:host=localhost;dbname=garage_automobile;charset=utf8', 'root', '');
}catch(Exception $e){
	die('Erreur : ' . $e->getMessage());
}
//récupérant l'ID de contact
// if(!empty($_POST['nom'])) // teste si le nom n'est pas vide
if(trim($_POST['nom_emp'])!='' and isset($_POST['prenom_emp'])){
	$requete=$bdd->prepare('UPDATE employes SET nom_emp=:nom_emp,prenom_emp=:prenom_emp,
	adresse_emp=:adresse_emp,sexe_emp=:sexe_emp,telephone_emp=:telephone_emp,email_emp=:email_emp,mot_de_pass_emp=:mot_de_pass_emp WHERE id_emp=:id_emp');
	$retour=$requete->execute(array(
		'id_emp'=>$_POST['id_emp'],
		'nom_emp'=>$_POST['nom_emp'],
		'prenom_emp'=>$_POST['prenom_emp'],
		'adresse_emp'=>$_POST['adresse_emp'],
		'sexe_emp'=>$_POST['sexe_emp'],
		'telephone_emp'=>$_POST['telephone_emp'],
		'email_emp'=>$_POST['email_emp'],
		'mot_de_pass_emp'=>$_POST['mot_de_pass_emp']
	));
	
	if($retour){
		echo'MAJ réussie! : ';
		echo'<a href="../admin-acceuil.php">retourner?</a>';
	}else{
		echo'MAJ échoué! -> ';		
		echo'<a href="../controller/controller_modif_employes.php?id_emp='.$_POST['id_emp'].'">retourner</a>';
	}
}else{
	echo"ERREUR de saisie: ";
	echo'<a href="../controller/controller_modif_employes.php?id_emp='.$_POST['id_emp'].'">reprendre la saisie!</a>';
}
?>