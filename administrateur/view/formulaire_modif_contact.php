<!DOCTYPE html>
<html lang="fr">
<head>
	<title>FORM</title>
</head>
<body>
<center>
	<form action="../model/modif_contact.php" method="POST">
	<fieldset style="width:260px">
		<legend>Modification contact</legend>
		<div>
              <input type="text" placeholder="Nom" name="nom_cont" value="<?php echo $contact->nom_cont; ?>"/>
            </div>
            <div>
              <input type="text" placeholder="Prenom" name="prenom_cont" value="<?php echo $contact->prenom_cont; ?>"/>
            </div>
            <div>
              <input type="email" placeholder="Email" name="email_cont" value="<?php echo $contact->email_cont; ?>"/>
            </div>
            <div>
              <input type="text" placeholder="Telephone" name="telephone_cont" value="<?php echo $contact->telephone_cont; ?>"/>
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Message" name="message_cont" value="<?php echo $contact->message_cont; ?>"/>
            </div>
            <div>
              <input name="id_cont" type="hidden" value="<?php echo $contact->id_cont; ?>">
            </div>
            <div class="d-flex ">
              <!--<button type="button">
                Envoyer
              </button>-->
              <hr><input type="submit" value="Modifier" name="submit">
            </div>
<a href="../admin-acceuil.php">Retour</a></center>
</body>
</html>