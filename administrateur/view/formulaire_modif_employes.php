<!DOCTYPE html>
<html lang="fr">
<head>
	<title>FORM</title>
</head>
<body>
<center>
	<form action="../model/modif_employes.php" method="POST">
	<fieldset style="width:260px">
		<legend>Modification employes</legend>
		<div>
              <input type="text" placeholder="Nom" name="nom_emp" value="<?php echo $employes->nom_emp; ?>"/>
            </div>
            <div>
              <input type="text" placeholder="Prenom" name="prenom_emp" value="<?php echo $employes->prenom_emp; ?>"/>
            </div>
            <div>
              <input type="text" placeholder="Adrèsse" name="adresse_emp" value="<?php echo $employes->adresse_emp; ?>"/>
            </div>
            <div>
              <input type="text" placeholder="Sexe(M/F)" name="sexe_emp" value="<?php echo $employes->sexe_emp; ?>"/>
            </div>
            <div>
              <input type="text" placeholder="Téléphone" name="telephone_emp" value="<?php echo $employes->telephone_emp; ?>"/>
            </div>
            <div>
              <input type="text" placeholder="Email" name="email_emp" value="<?php echo $employes->email_emp; ?>"/>
            </div>
            <div>
              <input type="text" placeholder="Mot de passe" name="mot_de_pass_emp" value="<?php echo $employes->mot_de_pass_emp; ?>"/>
            </div>
            <div>
              <input name="id_emp" type="hidden" value="<?php echo $employes->id_emp; ?>">
            </div>
            <div class="d-flex ">
              <!--<button type="button">
                Envoyer
              </button>-->
              <hr><input type="submit" name="submit" value="Modifier">
            </div>
<a href="../admin-acceuil.php">Retour</a></center>
</body>
</html>