<?php

session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=garage_automobile', 'root', '');
//$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '12345678');


if(isset($_POST['submit'])) {
   $email_ut = htmlspecialchars($_POST['email_ut']);
   $mot_de_passe_ut = sha1($_POST['mot_de_passe_ut']);

   $email_admin = 'parrot_vincent@gmail.com';
   $mdp_admin = "parrotadmin123456";

  //vérification des identifications (SELECT)
  $req = $bdd->prepare('SELECT id_ut FROM utilisateur WHERE email_ut = :email_ut AND mot_de_passe_ut = :mot_de_passe_ut');
  $req->execute(array(
        'email_ut' => $email_ut,
        'mot_de_passe_ut' => $mot_de_passe_ut
        ));
  //Le résultat est égal à la récupération des données
  $resultat = $req->fetch();
  //si c'est différent de résultat
  if(!$resultat)
  {
    
    echo'
      <html>
        <head>
          <meta charset="utf-8"/>
          <title>xfiles - connexion</title>
          <link rel="stylesheet" href="css/bootstrap.min.css">
        </head>
        <body>
          <br/>
            <div class="well col-md-6 col-md-offset-3">
              <p>Mauvais identifiant ou mot de passe</p>
            </div>
            <script src="js/bootstrap.min.js"></script> 
        </body>	
      </html>
      ';

    //Redirection vers index.php après deux secret
    header('Refresh:2;url=index.php');
    
}
//sinon
else
{
  //on démarre la session
  session_start();
  //la session id correspond au résultat précédent
  $_SESSION['id_ut'] = $resultat['id_ut'];
  //la session email_ut correspond à la variable email_ut
  $_SESSION['email_ut'] = $email_ut;
  //et on affiche:
  echo '
      <html>
          <head>
            <meta charset="utf-8"/>
            <title>xfiles - connexion</title>
            <link rel="stylesheet" href="css/bootstrap.min.css">
          </head>
          <body>
            <br/>
              <div class="well col-md-6 col-md-offset-3">
                <p>	vous etes connecté !</p>
              </div>
              <script src="js/bootstrap.min.js"></script> 
          </body>	
        </html>
        ';

      //Redirection vers index.php après deux secret
     
      header("Refresh:2;url= employes/employe_accueil.php?id_ut=".$_SESSION['id_ut']);
    }

            if(isset($_POST['email_ut']) == $email_admin AND $_POST['mot_de_passe_ut'] == $mdp_admin)
            {
            
                //session_start();
                        
                    echo '
                        <html>
                                <head>
                                    <meta charset="utf-8"/>
                                    <title>xfiles - connexion</title>
                                    <link rel="stylesheet" href="css/bootstrap.min.css">
                                </head>
                                <body>
                                    <br/>
                                        <div class="well col-md-6 col-md-offset-3">
                                            <p>	vous etes connecté à l\'interface admin!</p>
                                        </div>
                                        <script src="js/bootstrap.min.js"></script> 
                                </body>	
                            </html>
                            ';

                        //Redirection vers index.php après deux secret
                      
                       // header('Location: administrateur/accueil.php');
                        header('Refresh:2;url= administrateur/admin-acceuil.php');
                
          }
      
      else {
         $erreur = "Mauvais mail ou mot de passe admin !";
         echo $erreur;
      }

}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #db4f66;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #db4f66;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<a href="index.php">Retour</a>
<h2 style="text-align:center;">Formulaire de connexion</h2>

<!--<form action="controller/controller_connexion.php" method="post">-->
<form action="" method="post">
  <div class="imgcontainer">
    <img src="view/images/avatar4.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Entrez votre Email" name="email_ut" required>

    <label for="mdp"><b>Password</b></label>
    <input type="password" placeholder="Entrez votr mot de passe" name="mot_de_passe_ut" required>
        
    <button type="submit" name="submit">Connexion</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Annuler</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>
