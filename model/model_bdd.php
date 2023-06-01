<?php
	class Bdd{
		
		public function __construct(){
			
		}
		
		public function base(){
			try {
				$bdd = new PDO('mysql:host=localhost;dbname=garage_automobile','root','',
			  array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			}
			catch(Exception $e) {
			  die($e->getMessage());
			}
			
			return $bdd;
		}
		
		
	}

?>