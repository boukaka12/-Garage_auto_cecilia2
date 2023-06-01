<?php

session_start();

try {
  $bdd = new PDO('mysql:host=localhost;dbname=garage_automobile','root','',
  array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
catch(Exception $e) {
  die($e->getMessage());
}

 /**********************************************Liste des contacts ********************/

$reponses = $bdd->query('SELECT * FROM contact');
$nb=$reponses->rowCount();

 /**********************************************Liste des employes ********************/
 $reponses2 = $bdd->query('SELECT * FROM employes');
 $nb2=$reponses2->rowCount();

?>
<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8"/>
			<title>Détail sur le contact choisi </title>
			<style>
				table{
					border-collapse:collapse;
				}
			</style>
		</head>
		<body>
			
			<a href="../index.php">Déconnexion</a><br><br>
			<!-------------Début Liste de contacts---------------------->
            <h2 style="text-align:center">Liste des contacts</h2>
			<center>
			<a href="controller/controller_ajout_contact.php">ajout</a><br><br>
			<table border>
				<thead>
					<tr>
						<th>Id_cont</th>
						<th>Nom_cont</th>
						<th>Prenom_cont</th>
						<th>Email_cont</th>
						<th>Téléphone_cont</th>
						<th>Message_cont</th>
						<th>Action</th>
					</tr>
				<thead>
				<tbody>
				
					<?php 
					while($contact=$reponses->fetch()){
						echo "<tr>";
							echo "<td>";
								echo $contact['id_cont'];
							echo "</td>";
							
							echo "<td>";
								echo $contact['nom_cont'];
							echo "</td>";
							
							echo "<td>";
								echo $contact['prenom_cont'];
							echo "</td>";
							
							echo "<td>";
								echo $contact['email_cont'];
							echo "</td>";
							
							echo "<td>";
								echo $contact['telephone_cont'];
							echo "</td>";
							
							echo "<td>";
								echo $contact['message_cont'];
							echo "</td>";
							echo "<td>";
								echo '<a href="controller/controller_modif_contact.php?id_cont='.$contact['id_cont'].'">modif</a> &nbsp &nbsp 
									<a href="model/formulaire_supp_contact.php?id_cont='.$contact['id_cont'].'">suppr</a>' ;
							echo "</td>";
						echo "</tr>";
					}
					?>
					<tfoot>
						<tr>
							<th colspan="5">total résult <?php echo "Nombre d'enregistrement : ".$nb; ?></th>
						</tr>
					</tfoot>
				</tbody>
			</table>
			
			</center><br><br>
			<!-------------Fin Liste de contacts---------------------->

			<hr>

			<!-------------Début Liste des employes---------------------->
            <h2 style="text-align:center">Liste des employes</h2>
			<center>
			<a href="controller/controller_ajout_employes.php">ajout</a><br><br>
			<table border>
				<thead>
					<tr>
						<th>Id_emp</th>
						<th>Nom_emp</th>
						<th>Prenom_emp</th>
						<th>Adresse_emp</th>
						<th>Sexe_emp</th>
						<th>Téléphone_emp</th>
						<th>Email_emp</th>
						<th>Mot_de_pass_emp</th>
						<th>Action</th>
					</tr>
				<thead>
				<tbody>
				
					<?php 
					while($employes=$reponses2->fetch()){
						echo "<tr>";
							echo "<td>";
								echo $employes['id_emp'];
							echo "</td>";
							
							echo "<td>";
								echo $employes['nom_emp'];
							echo "</td>";
							
							echo "<td>";
								echo $employes['prenom_emp'];
							echo "</td>";
							
							echo "<td>";
								echo $employes['adresse_emp'];
							echo "</td>";
							
							echo "<td>";
								echo $employes['sexe_emp'];
							echo "</td>";
							
							echo "<td>";
								echo $employes['telephone_emp'];
							echo "</td>";
							echo "<td>";
								echo $employes['email_emp'];
							echo "</td>";
							echo "<td>";
								echo $employes['mot_de_pass_emp'];
							echo "</td>";
							echo "<td>";
								echo '<a href="controller/controller_modif_employes.php?id_emp='.$employes['id_emp'].'">modif</a> &nbsp &nbsp 
									<a href="model/formulaire_supp_employes.php?id_emp='.$employes['id_emp'].'">suppr</a>' ;
							echo "</td>";
						echo "</tr>";
					}
					?>
					<tfoot>
						<tr>
							<th colspan="5">total résult <?php echo "Nombre d'enregistrement : ".$nb2; ?></th>
						</tr>
					</tfoot>
				</tbody>
			</table>

		</body>
	</html>