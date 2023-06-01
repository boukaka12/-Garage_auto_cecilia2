<?php

class Voir_horaires{
	private $id_hr;
	private $jours;
	private $heure_matin;
	private $heure_aprem;
	
	public function __construct($id_hr,$jours,$heure_matin,$heure_aprem)
	{
		$this->id_hr = $id_hr;
		$this->jours = $jours;
		$this->heure_matin = $heure_matin;
		$this->heure_aprem = $heure_aprem;
	}
	//getters:retournent la valeur de la proprieté demandée
	public function getId_hr() {
		return $this->id_hr;
	}
	public function getJours() {
		return $this->jours;
	}
	public function getHeure_matin() {
		return $this->heure_matin;
	}
	public function getHeure_aprem() {
		return $this->heure_aprem;
	}

	//setters

    public function setId_hr($id_hr){
		$this->id_hr = $id_hr;
	}
    public function setJours($jours){
		$this->jours = $jours;
	}
	public function setHeure_matin($heure_matin){
		$this->heure_matin = $heure_matin;
	}
	public function setHeure_aprem($heure_aprem){
		$this->heure_aprem = $heure_aprem;
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
	public function setHoraire(){
		$bdd = $this->connectDatabase();
		$requete = $bdd->prepare("INSERT
									INTO
									    `horaires_ouvertures`(
										`id_hr`,
										`jours`,
										`heure_matin`,
										`heure_aprem`
									  )
									VALUES(
									  :id_hr,
									  :jours,
									  :heure_matin,
									  :heure_aprem
									)");
		$retour=$requete->execute(array(
			':id_hr'=>$this->id_hr,
			':jours'=>$this->jours,
			':heure_matin'=>$this->heure_matin,
			':heure_aprem'=>$this->heure_aprem
		));

        /*METHODE POUR AFFICHER*/
		public function afficher(){
			
			$bdd = $this->connectDatabase();
			
			$requete = $bdd->prepare("SELECT * FROM horaires_ouvertures");
			$result = $requete->execute();
			
			$horaires=$requete->fetchAll();
			return $horaires;
			
			}

		return $retour;		
		//on detruit l'objet connexion ce qui ferme la connexion à la BDD
		unset($bdd);
	}
}
?>