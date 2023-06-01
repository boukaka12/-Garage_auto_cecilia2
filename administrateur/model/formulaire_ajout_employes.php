<?php

class Employes{
	private $id_emp;
	private $nom_emp;
	private $prenom_emp;
	private $adresse_emp;
	private $sexe_emp;
	private $telephone_emp;
	private $email_emp;
	private $mot_de_pass_emp;
	
	public function __construct($id_emp,$nom_emp,$prenom_emp,$adresse_emp,$sexe_emp,$telephone_emp,$email_emp,$mot_de_pass_emp)
	{
		$this->id_emp = $id_emp;
		$this->nom_emp = $nom_emp;
		$this->prenom_emp = $prenom_emp;
		$this->adresse_emp = $adresse_emp;
		$this->sexe_emp = $sexe_emp;
		$this->telephone_emp = $telephone_emp;
		$this->email_emp = $email_emp;
		$this->mot_de_pass_emp = $mot_de_pass_emp;
	}
	//getters:retournent la valeur de la proprieté demandée
	public function getId_emp() {
		return $this->id_emp;
	}
	public function getNom_emp() {
		return $this->nom_emp;
	}
	public function getPrenom_emp() {
		return $this->prenom_emp;
	}
	public function getAdresse_emp() {
		return $this->adresse_emp;
	}
	public function getSexe_emp() {
		return $this->sexe_emp;
	}
	public function getTelephone_emp() {
		return $this->telephone_emp;
	}
	public function getEmail_emp() {
		return $this->email_emp;
	}
	public function getMot_de_pass_emp() {
		return $this->mot_de_pass_emp;
	}
	//setters
	public function setNom_emp($nom_emp){
		$this->nom_emp = $nom_emp;
	}
	public function setprenom_emp($prenom_emp){
		$this->prenom_emp = $prenom_emp;
	}
	/*public function setAdresse_emp($adresse_emp){
		$this->adresse_emp = $adresse_emp;
	}
	public function setSexe_emp($sexe_emp){
		$this->sexe_emp = $sexe_emp;
	}
	public function setTelephone_emp($telephone_emp){
		$this->telephone_emp = $telephone_emp;
	}
	public function setEmail_emp($email_emp){
		$this->email_emp = $email_emp;
	}
	public function setMot_de_pass_emp($mot_de_pass_emp){
		$this->mot_de_pass_emp = $mot_de_pass_emp;
	}*/

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
	public function setEmployes(){
		$bdd = $this->connectDatabase();
		$requete = $bdd->prepare("INSERT
									INTO
									  `employes`(
										`id_emp`,
										`nom_emp`,
										`prenom_emp`,
										`adresse_emp`,
										`sexe_emp`,
										`telephone_emp`,
										`email_emp`,
										`mot_de_pass_emp`
									  )
									VALUES(
									  :id_emp,
									  :nom_emp,
									  :prenom_emp,
									  :adresse_emp,
									  :sexe_emp,
									  :telephone_emp,
									  :email_emp,
									  :mot_de_pass_emp
									)");
		$retour=$requete->execute(array(
			':id_emp'=>$this->id_emp,
			':nom_emp'=>$this->nom_emp,
			':prenom_emp'=>$this->prenom_emp,
			':adresse_emp'=>$this->adresse_emp,
			':sexe_emp'=>$this->sexe_emp,
			':telephone_emp'=>$this->telephone_emp,
			':email_emp'=>$this->email_emp,
			':mot_de_pass_emp'=>$this->mot_de_pass_emp
		));
		return $retour;		
		//on detruit l'objet connexion ce qui ferme la connexion à la BDD
		unset($bdd);
	}
}
?>