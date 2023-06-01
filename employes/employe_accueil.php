<?php
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
 
  /**********************************************Liste des vehicules ********************/
  $reponses2 = $bdd->query('SELECT * FROM vehicules');
  $nb2=$reponses2->rowCount();
  /**********************************************Liste des temoignages ********************/
  $reponses3 = $bdd->query('SELECT * FROM temoignages');
  $nb3=$reponses3->rowCount();
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
			

		<!--------------------------------Déconnexion-------------------------------------------------->
			<a href="../index.php">Déconnexion</a><br><br>
			<!--------------------------------Début Contact----------------------------------->
            <h2 style="text-align:center">Contacts</h2>
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
							
						echo "</tr>";
					}
					?>
					<tfoot>
						<tr>
							<th colspan="5">total résult <?php echo "Nombre d'enregistrement : ".$nb; ?></th>
						</tr>
					</tfoot>
				</tbody>
			</table><br>
			
			</center>
			<hr>
			<!--------------------------------Fin Contact----------------------------------->

			<!--------------------------------Début vehicules----------------------------------->

			<h2 style="text-align:center">Véhicules</h2>
			<center>
			<a href="controller/controller_ajout_vehicules.php">ajout</a><br><br>
			<table border>
				<thead>
					<tr>
						<th>immatricule_veh </th>
						<th>couleur</th>
						<th>modele_veh</th>
						<th>prix_veh</th>
						<th>description_veh	</th>
						<th>kilometrage_veh	</th>
						<th>annee_circulation_veh</th>
						<th>type_de_moteur_veh</th>
						<th>nbre_de_places_veh</th>
						<th>Action</th>
						
					</tr>
				<thead>
				<tbody>
				
					<?php 
					while($vehicules=$reponses2->fetch()){
						echo "<tr>";
							echo "<td>";
								echo $vehicules['immatricule_veh'];
							echo "</td>";
							
							echo "<td>";
								echo $vehicules['couleur'];
							echo "</td>";

							echo "<td>";
								echo $vehicules['modele_veh'];
							echo "</td>";
							
							echo "<td>";
								echo $vehicules['prix_veh'];
							echo "</td>";
							
							echo "<td>";
								echo $vehicules['description_veh'];
							echo "</td>";
							
							echo "<td>";
								echo $vehicules['kilometrage_veh'];
							echo "</td>";

							echo "<td>";
								echo $vehicules['annee_circulation_veh'];
							echo "</td>";

							echo "<td>";
								echo $vehicules['type_de_moteur_veh'];
							echo "</td>";

							echo "<td>";
								echo $vehicules['nbre_de_places_veh'];
							echo "</td>";
							
							echo "<td>";
							echo '<a href="controller/controller_modif_vehicules.php?immatricule_veh='.$vehicules['immatricule_veh'].'">modif</a> &nbsp &nbsp 
								<a href="controller/controller_suppr_vehicules.php?immatricule_veh='.$vehicules['immatricule_veh'].'">suppr</a>' ;
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
			</table><br>

			<hr>
			
			</center>

			<!--------------------------------Fin vehicules----------------------------------->

			<!--------------------------------Début Témoignages----------------------------------->

			<h2 style="text-align:center">Témoignages</h2>
			<center>
			<a href="controller/controller_ajout_temoignages.php">ajout</a><br><br>
			<table border>
				<thead>
					<tr>
						<th>id_tem </th>
						<th>nom_tem</th>
						<th>prenom_tem</th>
						<th>message</th>
						
					</tr>
				<thead>
				<tbody>
				
					<?php 
					while($temoignages=$reponses3->fetch()){
						echo "<tr>";
							echo "<td>";
								echo $temoignages['id_tem'];
							echo "</td>";
							
							echo "<td>";
								echo $temoignages['nom_tem'];
							echo "</td>";

							echo "<td>";
								echo $temoignages['prenom_tem'];
							echo "</td>";
							
							echo "<td>";
								echo $temoignages['message'];
							echo "</td>";
							
						echo "</tr>";
					}
					?>
					<tfoot>
						<tr>
							<th colspan="5">total résult <?php echo "Nombre d'enregistrement : ".$nb3; ?></th>
						</tr>
					</tfoot>
				</tbody>
			</table>
			
			</center>

			<!--------------------------------Fin Témoignages----------------------------------->



		</body>
	</html>