<?php

class Contact{
	private $id_cont;
	private $nom_cont;
	private $prenom_cont;
	private $email_cont;
	private $telephone_cont;
	private $message_cont;
	
	public function __construct($id_cont,$nom_cont,$prenom_cont,$email_cont,$telephone_cont,$message_cont)
	{
		$this->id_cont = $id_cont;
		$this->nom_cont = $nom_cont;
		$this->prenom_cont = $prenom_cont;
		$this->email_cont = $email_cont;
		$this->telephone_cont = $telephone_cont;
		$this->message_cont = $message_cont;
	}
	//getters:retournent la valeur de la proprieté demandée
	public function getId_cont() {
		return $this->id_cont;
	}
	public function getNom_cont() {
		return $this->nom_cont;
	}
	public function getPrenom_cont() {
		return $this->prenom_cont;
	}
	public function getEmail_cont() {
		return $this->email_cont;
	}
	public function getTelephone_cont() {
		return $this->telephone_cont;
	}
	public function getMessage_cont() {
		return $this->message_cont;
	}
	//setters
	public function setNom_cont($nom_cont){
		$this->nom_cont = $nom_cont;
	}
	public function setPrenom_cont($prenom_cont){
		$this->prenom_cont = $prenom_cont;
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
	public function setContact(){
		$bdd = $this->connectDatabase();
		$requete = $bdd->prepare("INSERT
									INTO
									  `contact`(
										`id_cont`,
										`nom_cont`,
										`prenom_cont`,
										`email_cont`,
										`telephone_cont`,
										`message_cont`
									  )
									VALUES(
									  :id_cont,
									  :nom_cont,
									  :prenom_cont,
									  :email_cont,
									  :telephone_cont,
									  :message_cont
									)");
		$retour=$requete->execute(array(
			':id_cont'=>$this->id_cont,
			':nom_cont'=>$this->nom_cont,
			':prenom_cont'=>$this->prenom_cont,
			':email_cont'=>$this->email_cont,
			':telephone_cont'=>$this->telephone_cont,
			':message_cont'=>$this->message_cont
		));
		return $retour;		
		//on detruit l'objet connexion ce qui ferme la connexion à la BDD
		unset($bdd);
	}
}
?>