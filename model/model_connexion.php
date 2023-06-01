<?php 
	class Connexion
	{
		private $email_ut;
		private $mot_de_passe_ut;

		public function __construct($email_ut,$mot_de_passe_ut)
					{
						$this->email_ut	        = $email_ut;
						$this->mot_de_passe_ut 		= $mot_de_passe_ut;
					}
		
		/*LISTE DES GETTERS*/
		
		public function getemail_ut()
		{
			return $this->email_ut;
		}		
		
		public function getmot_de_passe_ut()
		{
			return $this->mot_de_passe_ut;
		}

		/*LISTE DES SETTERS*/
		
		public function setemail_ut($email_ut)
		{
			$this->email_ut = $email_ut;
		}		
		
		public function setpassword_employes($mot_de_passe_ut)
		{
			$this->mot_de_passe_ut = $mot_de_passe_ut;
		}
		
        /*Connexion à la base de Données*/
        
		public function connexionBdd()
		{			
			try{
				//$bdd = new PDO('mysql:host=localhost;dbname=gestion;charset=utf8', 'root', 'password');
				$bdd = new PDO('mysql:host=localhost;dbname=garage_automobile;charset=utf8', 'root', '');
				 return $bdd;
			}catch(Exception $e){
				die('Erreur : ' . $e->getMessage());
			}
		}

        /*METHODE QUI PERMET DE SE CONNECTE AU SITE*/
        
		public function connecteUtilisateur($email_ut,$mot_de_passe_ut){

			$bdd = $this->connexionBdd();

			//$request = $bdd->prepare("SELECT * FROM `utilisateur` WHERE email_ut=? AND mot_de_passe_ut=?");
			$request = $bdd->prepare("SELECT * FROM utilisateur WHERE email_ut = '$email_ut' AND mot_de_passe_ut = '$mot_de_passe_ut'");
			$request->execute(array(
				$email_ut,
				$mot_de_passe_ut
			));

			 $reponse = $request->fetch();

			return $reponse;
			/*ON DETRUIT L'OBJET CONNEXION, CE QUI FERME LA CONNEXIO A LA BASE DE DONNEES*/
			unset($bdd);
		}

	
		/*METHODE QUI PERMET DE RECUPERER L'ID DE L'EMPLOYE */

		public function recupId($email_ut,$mot_de_passe_ut){

			$bdd = $this->connexionBdd();

			$request = $bdd->prepare("SELECT `id_ut` FROM utilisateur WHERE email_ut=? AND mot_de_passe_ut=? LIMIT 1");

			$request->execute(array(
				$email_ut,
				$mot_de_passe_ut
			));

			$reponse = $request->fetchAll();

			return $reponse;
			/*ON DETRUIT L'OBJET CONNEXION, CE QUI FERME LA CONNEXION A LA BASE DE DONNEES*/
			unset($bdd);

		}

	}
	
?>