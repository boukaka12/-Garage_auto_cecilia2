<?php

class Vehicules{
	private $immatricule_veh;
	private $couleur;
	private $modele_veh;
	private $prix_veh;
	private $description_veh;
	private $kilometrage_veh;
	private $annee_circulation_veh;
	private $type_de_moteur_veh;
	private $nbre_de_places_veh;
	
	public function __construct($immatricule_veh,$couleur,$modele_veh,$prix_veh,$description_veh,$kilometrage_veh,$annee_circulation_veh,$type_de_moteur_veh,$nbre_de_places_veh)
	{
		$this->immatricule_veh = $immatricule_veh;
		$this->couleur = $couleur;
		$this->modele_veh = $modele_veh;
		$this->prix_veh = $prix_veh;
		$this->description_veh = $description_veh;
		$this->kilometrage_veh = $kilometrage_veh;
		$this->annee_circulation_veh = $annee_circulation_veh;
		$this->type_de_moteur_veh = $type_de_moteur_veh;
		$this->nbre_de_places_veh = $nbre_de_places_veh;
	}
	//getters:retournent la valeur de la proprieté demandée
	public function getimmatricule_veh() {
		return $this->immatricule_veh;
	}
	public function getcouleur() {
		return $this->couleur;
	}
	public function getmodele_veh() {
		return $this->modele_veh;
	}
	public function getprix_veh() {
		return $this->prix_veh;
	}
	public function getdescription_veh() {
		return $this->description_veh;
	}
	public function getkilometrage_veh() {
		return $this->kilometrage_veh;
	}
	public function getannee_circulation_veh() {
		return $this->annee_circulation_veh;
	}
	public function gettype_de_moteur_veh() {
		return $this->type_de_moteur_veh;
	}
	public function getnbre_de_places_veh() {
		return $this->nbre_de_places_veh;
	}
	//setters
	public function setcouleur($couleur){
		$this->couleur = $couleur;
	}
	public function setmodele_veh($modele_veh){
		$this->modele_veh = $modele_veh;
	}
	public function setprix_veh($prix_veh){
		$this->prix_veh = $prix_veh;
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
	public function setVehicules(){
		$bdd = $this->connectDatabase();
		$requete = $bdd->prepare("INSERT
									INTO
									  `vehicules`(
										`immatricule_veh`,
										`couleur`,
										`modele_veh`,
										`prix_veh`,
										`description_veh`,
										`kilometrage_veh`,
										`annee_circulation_veh`,
										`type_de_moteur_veh`,
										`nbre_de_places_veh`
									  )
									VALUES(
									  :immatricule_veh,
									  :couleur,
									  :modele_veh,
									  :prix_veh,
									  :description_veh,
									  :kilometrage_veh,
									  :annee_circulation_veh,
									  :type_de_moteur_veh,
									  :nbre_de_places_veh
									)");
		$retour=$requete->execute(array(
			':immatricule_veh'=>$this->immatricule_veh,
			':couleur'=>$this->couleur,
			':modele_veh'=>$this->modele_veh,
			':prix_veh'=>$this->prix_veh,
			':description_veh'=>$this->description_veh,
			':kilometrage_veh'=>$this->kilometrage_veh,
			':annee_circulation_veh'=>$this->annee_circulation_veh,
			':type_de_moteur_veh'=>$this->type_de_moteur_veh,
			':nbre_de_places_veh'=>$this->nbre_de_places_veh
		));
		return $retour;		
		//on detruit l'objet connexion ce qui ferme la connexion à la BDD
		unset($bdd);
	}
}
?>