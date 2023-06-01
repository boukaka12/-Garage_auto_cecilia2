<?php
try{
	$bdd= new PDO('mysql:host=localhost;dbname=garage_automobile;charset=utf8', 'root', '');
}catch(Exception $e){
	die('Erreur : ' . $e->getMessage());
}

if(trim($_POST['nom_tem'])!='' and isset($_POST['prenom_tem'])){
	$requete=$bdd->prepare('UPDATE temoignages SET nom_tem=:nom_tem,prenom_tem=:prenom_tem,message_tem=:message_tem WHERE id_tem=:id_tem');
	$retour=$requete->execute(array(
		'id_tem'=>$_POST['id_tem'],
		'nom_tem'=>$_POST['nom_tem'],
		'prenom_tem'=>$_POST['prenom_tem'],
		'message_tem'=>$_POST['message_tem']
	));
	
	if($retour){
		echo'MAJ réussie! : ';
		echo'<a href="../index.php">retourner</a>';
	}else{
		echo'MAJ échoué! -> ';		
		echo'<a href="../index.php">retourner</a>';
	}
}else{
	echo"ERREUR de saisie: ";
	echo'<a href="../controleur/controller_modif_temoignages.php?id_tem='.$_POST['id_tem'].'">reprendre la saisie!</a>';
}
?>