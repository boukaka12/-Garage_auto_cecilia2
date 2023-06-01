<?php

class Temoignages{
	private $id_tem;
	private $nom_tem;
	private $prenom_tem;
	private $message;
	
	public function __construct($id_tem,$nom_tem,$prenom_tem,$message)
	{
		$this->id_tem = $id_tem;
		$this->nom_tem = $nom_tem;
		$this->prenom_tem = $prenom_tem;
		$this->message = $message;
	}
	//getters:retournent la valeur de la proprieté demandée
	public function getid_tem() {
		return $this->id_tem;
	}
	public function getnom_tem() {
		return $this->nom_tem;
	}
	public function getprenom_tem() {
		return $this->prenom_tem;
	}
	public function getmessage() {
		return $this->message;
	}

	//setters
	public function setnom_tem($nom_tem){
		$this->nom_tem = $nom_tem;
	}
	public function setPrenom_cont($prenom_tem){
		$this->prenom_tem = $prenom_tem;
	}

//manipulation BDD
	private function connectDatabase(){
		//copier coller!!!!
		try{
		$bdd = new PDO('mysql:host=localhost;dbname=garage_automobile;charset=utf8', 'root', '');
		return $bdd;
		}catch(Exception $e){
		die('Erreur : ' . $e->getMessage());
		}
	}
//on récupère les informations 
	public function setTemoignages(){
		$bdd = $this->connectDatabase();
		$requete = $bdd->prepare("INSERT
									INTO
									  `temoignages`(
										`id_tem`,
										`nom_tem`,
										`prenom_tem`,
										`message`
									  )
									VALUES(
									  :id_tem,
									  :nom_tem,
									  :prenom_tem,
									  :message
									)");
		$retour=$requete->execute(array(
			':id_tem'=>$this->id_tem,
			':nom_tem'=>$this->nom_tem,
			':prenom_tem'=>$this->prenom_tem,
			':message'=>$this->message
		));
		return $retour;		
		//on detruit l'objet connexion ce qui ferme la connexion à la BDD
		unset($bdd);
	}
}
?>