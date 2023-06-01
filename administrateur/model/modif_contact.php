<?php
try{
	$bdd = new PDO('mysql:host=localhost;dbname=garage_automobile;charset=utf8', 'root', '');
}catch(Exception $e){
	die('Erreur : ' . $e->getMessage());
}
//récupérant l'ID de contact
// if(!empty($_POST['nom'])) // teste si le nom n'est pas vide
if(trim($_POST['nom_cont'])!='' and isset($_POST['prenom_cont'])){
	$requete=$bdd->prepare('UPDATE contact SET nom_cont=:nom_cont,prenom_cont=:prenom_cont,
	email_cont=:email_cont,telephone_cont=:telephone_cont,message_cont=:message_cont WHERE id_cont=:id_cont');
	$retour=$requete->execute(array(
		'id_cont'=>$_POST['id_cont'],
		'nom_cont'=>$_POST['nom_cont'],
		'prenom_cont'=>$_POST['prenom_cont'],
		'email_cont'=>$_POST['email_cont'],
		'telephone_cont'=>$_POST['telephone_cont'],
		'message_cont'=>$_POST['message_cont']
	));
	
	if($retour){
		echo'MAJ réussie! : ';
		echo'<a href="../admin-acceuil.php">retourner?</a>';
	}else{
		echo'MAJ échoué! -> ';		
		echo'<a href="../controller/controller_modif_contact.php?id_cont='.$_POST['id_cont'].'">retourner</a>';
	}
}else{
	echo"ERREUR de saisie: ";
	echo'<a href="../controller/controller_modif_contact.php?id_cont='.$_POST['id_cont'].'">reprendre la saisie!</a>';
}
?>