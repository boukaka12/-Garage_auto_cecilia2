<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Détails d'un animal</title>
	<link type='text/css' rel="stylesheet" href="view/css/jquery-ui.css"  >
</head>
<body>
	
	<center>
		<form action="../controller/controller_ajout_contact.php" method="post">
			<fieldset style="width:260px">
			<label for="nom_cont">Nom</label>
			<input type="text" name="nom_cont" id="nom_cont" value=""/>
			<br><br>
			<label for="prenon_cont">Prénom</label>
			<input type="text" name="prenom_cont" id="prenon_cont" value=""/>
			<br><br>
			<label for="email_cont">Email</label>
			<input type="text" name="email_cont" id="email_cont" value=""/>
			<br><br>
			<label for="telephone_cont">Téléphone</label>
			<input type="text" name="telephone_cont" id="telephone_cont" value=""/>
			<br><br>
			<label for="message_cont">Message</label>
			<input type="text" name="message_cont" id="message_cont" value=""/>
			<br><br>
			<br><br>
			<button type="submit" name="submit">Oui je le veux</button>
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