<?php

 //on démarre la session
//session_start();

include('../model/model_connexion.php');

$bdd = new PDO('mysql:host=localhost;dbname=garage_automobile;charset=utf8', 'root', '');

if(isset($_POST['submit'])){
    //var_dump($_POST);exit;
    $email_ut = htmlspecialchars($_POST['email_ut']);
    $email_admin = 'parrot_vincent@gmail.com';
    $mot_de_passe_ut	= sha1($_POST['mot_de_passe_ut']);
    //$mdp_emp	= ($_POST['mdp']);
    $mdp_admin = "parrotadmin123456";
    
    if(isset($_POST['email_ut']) == $email_admin AND $_POST['mot_de_passe_ut'] == $mdp_admin)
    {
        
            session_start();
                    //la session id_admin correspond au résultat précédent
                    $_SESSION['id_admin'] = $resultat2['id_admin'];
                    //la session email correspond à la variable email
                    $_SESSION['nom_admin'] = $nom_admin;
                    $_SESSION['email_admin'] = $email_admin;
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
                    // header('Refresh:2;url=nasa.php');
                    
                    header('Location: ../administrateur/admin-acceuil.php');
                    //header('Refresh:2;url=../administrateur/index.php');
            
    }
    else{
        
       /* if(isset($email_ut) AND isset($mot_de_passe_ut))//si les champs ne sont pas vide
        {

            $_SESSION["email_ut"]=$email_ut;
			//$_SESSION["user"]=$login;
            header("Location: ../employes/index.php?id_ut=".$_SESSION['id_ut']);
        }
        else{
            echo "<script>alert('Mauvais mot de passe')</script>";
            echo "<script>document.location.replace('../index.php')</script>"; 

        }*/


        //vérification des identifications (SELECT)
        if(!empty($email_ut) AND !empty($mot_de_passe_ut)){

            $q=array('email_ut'=>$email_ut, 'mot_de_passe_ut'=>$mot_de_passe_ut);
            $sql = "SELECT email_ut, mot_de_passe_ut FROM utilisateur WHERE email_ut = '$email_ut' AND mot_de_passe_ut = '$mot_de_passe_ut'";
            $req = $bdd->prepare($sql);
            $req->execute($q);
            $count=$req->rowCount($sql);
            
            //if($count == 1)
            if($count > 0)
            {
                // Vérifier si l'utilisateur existe
                $sql = "SELECT email_ut, mot_de_passe_ut FROM utilisateur WHERE email_ut = '$email_ut' AND mot_de_passe_ut = '$mot_de_passe_ut'";

                $req=$bdd->prepare($sql);
                $req->execute($q);
                    header("Location: ../employes/employe_accueil.php?id_ut=".$_SESSION['id_ut']);
                
            }
            else{
                echo "Mauvais mail ou mot de passe";
                header("Location: ../index.php");
            }
        }
            
            
    }
}
?>