<!DOCTYPE html>
<html lang="fr">
<head>
	<title>FORM</title>
</head>
<body>
<center>
	<form action="../model/modif_vehicules.php" method="POST">
	<fieldset style="width:260px">
		<legend>Modification vehicules</legend>
		        
            <div>
              <input type="text" placeholder="couleur" name="couleur" value="<?php echo $vehicules->couleur; ?>"/>
            </div>
            <div>
              <input type="text" placeholder="modele_veh" name="modele_veh" value="<?php echo $vehicules->modele_veh; ?>"/>
            </div>
            <div>
              <input type="number" placeholder="prix_veh" name="prix_veh" value="<?php echo $vehicules->prix_veh; ?>"/>
            </div>
            <div>
              <input type="text" placeholder="description_veh" name="description_veh" value="<?php echo $vehicules->description_veh; ?>"/>
            </div>
            <div>
              <input type="number" placeholder="kilometrage_veh" name="kilometrage_veh" value="<?php echo $vehicules->kilometrage_veh; ?>"/>
            </div>
            <div>
              <input type="date" placeholder="annee_circulation_veh" name="annee_circulation_veh" value="<?php echo $vehicules->annee_circulation_veh; ?>"/>
            </div>
            <div>
              <input type="text" placeholder="type_de_moteur_veh" name="type_de_moteur_veh" value="<?php echo $vehicules->type_de_moteur_veh; ?>"/>
            </div>
            <div>
              <input type="number" placeholder="nbre_de_places_veh" name="nbre_de_places_veh" value="<?php echo $vehicules->nbre_de_places_veh; ?>"/>
            </div>
            <div>
              <input type="hidden" name="immatricule_veh" value="<?php echo $vehicules->immatricule_veh; ?>"/>
            </div>
            
            <div class="d-flex ">
              <!--<button type="button">
                Envoyer
              </button>-->
              <hr><input type="submit" name="submit" value="Modifier">
            </div>
<a href="../employe_accueil.php">Retour</a></center>
</body>
</html>