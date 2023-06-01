<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Détails d'un animal</title>
	<link type='text/css' rel="stylesheet" href="view/css/jquery-ui.css"  >
</head>
<body>
	
	<center>
		<form action="../controller/controller_ajout_employes.php" method="post">
			<fieldset style="width:260px">
			<label for="nom_emp">Nom</label>
			<input type="text" name="nom_emp" id="nom_emp" value=""/>
			<br><br>
			<label for="prenom_emp">Prénom</label>
			<input type="text" name="prenom_emp" id="prenom_emp" value=""/>
			<br><br>
			<label for="adresse_emp">Adresse</label>
			<input type="text" name="adresse_emp" id="adresse_emp" value=""/>
			<br><br>
			<label for="sexe_emp">Sexe</label>
			<select name="sexe_emp" id="sexe_emp">
				<option ></option>
				<option value="M">M</option>
				<option value="F" >F</option>
			</select>
			<br><br>
			<!--<input type="text" name="sexe_emp" id="sexe_emp" value="" placeholder="M/F"/>
			<br><br>-->
			<label for="telephone_emp">Téléphone</label>
			<input type="tel" name="telephone_emp" id="telephone_emp" value=""/>
			<br><br>
			<label for="email_emp">Email</label>
			<input type="email" name="email_emp" id="email_emp" value=""/>
			<br><br>
			<label for="mot_de_pass_emp">Mot de passe</label>
			<input type="password" name="mot_de_pass_emp" id="mot_de_pass_emp" value=""/>
			<br><br>
			<br><br>
			<button type="submit" name="submit">Ajouter</button>
			</fieldset>
		</form>
	<a href="../admin-acceuil.php">Retour</a>
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