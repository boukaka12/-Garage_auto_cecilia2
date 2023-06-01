<?php
try {
  $bdd = new PDO('mysql:host=localhost;dbname=garage_automobile','root','',
  array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
catch(Exception $e) {
  die($e->getMessage());
}

$reponses = $bdd->query('SELECT * FROM horaires_ouvertures');

?>

<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8"/>
			<title>Détail sur l'espèce choisi </title>
			<style>
				table{
					border-collapse:collapse;
				}
			</style>
		</head>
		<body>
			<center>
			<?php foreach ($result as $reponse): ?>
				<li>
					<?php $reponse['jours']?>
					<?php $reponse['heure_matin']?> 
					<?php $reponse['heure_aprem']?>
				</li>
			<?php endforeach;?>
			</center>
		</body>
	</html>