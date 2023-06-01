<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Détails d'un animal</title>
	<link type='text/css' rel="stylesheet" href="view/css/jquery-ui.css"  >
</head>
<body>
	
	<center>
		<form action="../controller/controller_ajout_vehicules.php" method="post">
			<fieldset style="width:260px">
			<label for="immatricule_veh">immatricule_veh</label>
			<input type="text" name="immatricule_veh" id="immatricule_veh" placeholder="HB-145-OP" value=""/>
			<br><br>
			<label for="couleur">couleur</label>
			<input type="text" name="couleur" id="couleur" value=""/>
			<br><br>
			<label for="modele_veh">modele_veh</label>
			<input type="text" name="modele_veh" id="modele_veh" value=""/>
			<br><br>
			<label for="prix_veh">prix_veh</label>
			<input type="text" name="prix_veh" id="prix_veh" value=""/>
			<br><br>
			<label for="description_veh">description_veh</label>
			<input type="text" name="description_veh" id="description_veh" value=""/>
			<br><br>
			<label for="kilometrage_veh">kilometrage_veh</label>
			<input type="number" name="kilometrage_veh" id="kilometrage_veh" value=""/>
			<br><br>
			<label for="annee_circulation_veh">annee_circulation_veh</label>
			<input type="date" name="annee_circulation_veh" id="annee_circulation_veh" value=""/>
			<br><br>
			<label for="type_de_moteur_veh">type_de_moteur_veh</label>
			<input type="text" name="type_de_moteur_veh" id="type_de_moteur_veh" value=""/>
			<br><br>
			<label for="nbre_de_places_veh">nbre_de_places_veh</label>
			<input type="number" name="nbre_de_places_veh" id="nbre_de_places_veh" value=""/>
			<br><br>
			<br><br>
			<button type="submit" name="submit">Ajouter</button>
			</fieldset>
		</form>
	<a href="../employe_accueil.php">Retour</a>
	</center>
	
	<script src="view/js/jquery-3.3.1.min.js"></script>
	<script src="view/js/jquery-ui.js"></script>
	<script>
		$(document).ready(function(){
			$(function() {
				$( "#date" ).datepicker({
				altField: "#date",
				closeText: 'Fermer',
				prevText: 'Précédent',
				nextText: 'Suivant',
				currentText: 'Aujourd\'hui',
				monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
				monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
				dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
				dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
				dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
				weekHeader: 'Sem.',
				dateFormat: 'yy-mm-dd'
				});
			});
	});
	</script>
</body>
</html>