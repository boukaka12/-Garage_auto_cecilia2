<?php
//connexion à la base de données
try {
  $bdd = new PDO('mysql:host=localhost;dbname=garage_automobile;charset=utf8', 'root', '');
}
catch(Exception $e) {
  die($e->getMessage());
}
/*******************************Récupération horaires******************************************************* */
//Préparation de la requete
$reponses = $bdd->prepare('SELECT * FROM horaires_ouvertures');

//Exécution de la requete
$executereq = $reponses->execute();

//Récupération des résultats en une sele fois
$horaires = $reponses->fetchAll();

?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/Garage v.parrot1.png" type="image/x-icon">

  <title>
    Garage Automobile
  </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="../index.php">
          <span>
            <img class="image" src="images/Garage v.parrot1.png"/> Automobile
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item">
              <a class="nav-link" href="../index.php"><i class="fa fa-home" aria-hidden="true"></i> Accueil</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="apropos.php">
                <i class="fa fa-briefcase" aria-hidden="true"></i> A Propos
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.php">
                <i class="fa fa-server" aria-hidden="true"></i> Nos Services
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="vehicules.php">
                <i class="fa fa-car" aria-hidden="true"></i> Vehicules
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="temoignages.php">
                <i class="fa fa-users" aria-hidden="true"></i> Temoignages
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php"><i class="fa fa-address-card" aria-hidden="true"></i> Contact</a>
            </li>
          </ul>
          <div class="user_option">
            <a href="connexion.php">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>
                Connexion
              </span>
            </a>
            
            <form class="form-inline ">
              <button class="btn nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->
    <!-- slider section -->

    <section class="slider_section">
      <div class="slider_container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <h1>
                        Bienvenu sur notre site <br>
                        Garage auto
                      </h1>
                      <p>
                        Réparation de la mécanique
                      </p>
                      <a href="">
                       Lire Plus
                      </a>
                    </div>
                  </div>
                  <div class="col-md-5 ">
                    <div class="img-box">
                      <img src="images/carousel-9.jpg" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <h1>
                        Bienvenu sur notre site <br>
                        Garage auto
                      </h1>
                      <p>
                        Réparation de la carrosserie
                      </p>
                      <a href="">
                       Lire Plus
                      </a>
                    </div>
                  </div>
                  <div class="col-md-5 ">
                    <div class="img-box">
                      <img src="images/carousel-7.jpg" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <h1>
                        Bienvenu sur notre site <br>
                        Garage auto
                      </h1>
                      <p>
                        Entretien régulier
                      </p>
                      <a href="">
                       Lire Plus
                      </a>
                    </div>
                  </div>
                  <div class="col-md-5 ">
                    <div class="img-box">
                      <img src="images/carousel-bg-2.jpg" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel_btn-box">
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <i class="fa fa-arrow-left" aria-hidden="true"></i>
              <span class="sr-only">Precedent</span>
            </a>
            <img src="images/line.png" alt="" />
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
              <span class="sr-only">Suivant</span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- end slider section -->
  </div><br><br>


  <!-- Début form connexion -->

  <section class="contact_section ">
    <div class="container px-0">
      <div class="heading_container active">
        <h2 class="">
          Connexion
        </h2>
      </div>
    </div>
    <div class="container container-bg">
      <div class="row">
       
        <div class="col-md-6 col-lg-5 px-0">

          <form action="../controller/controller_connexion.php">
            <div>
                <label for="email" class="email"> Votre email</label>
                <input type="email" name="email" placeholder="Email" required="required"/>
            </div>
            <div>
                <label for="mot_de_passe" class="mot_de_passe"> Votre mot de passe </label>
                <input type="password" name="mdp" placeholder="Mot de passe" required="required"/>
            </div>
            <div class="d-flex ">
              <button type="submit" name="submit">
                Envoyer
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

   <!-- Début form connexion -->
   
  <!-- Début footer -->

  <section class="info_section  layout_padding2-top">
 
    <div class="info_container ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <h6>
              A Propos
            </h6>
            <p>
              Vincent Parrot, fort de ses 15 années d'expérience dans la réparation automobile, a ouvert 
                        son propre garage à Toulouse en 2021.
                        Depuis 2 ans, il propose une large gamme de services: réparation de la carrosserie et de la 
                        mécanique des voitures ainsi que leur entretien régulier pour garantir leur performance et 
                        leur sécurité. De plus, le Garage V.
            </p>
          </div>
          
          <!--Debut Heures d'ouvertures-->
          <div class="col-md-6 col-lg-4">
            <h6>
              Heures d’ouverture
            </h6>
            <div class="info_link-box">
              <?php foreach ($horaires as $horaire): ?>
                <p>
                  <?=$horaire['jours']// = remplace php echo?> : 
                  <?= $horaire['heure_matin']?> 
                  <?= $horaire['heure_aprem']?>
                  
                </p>
              <?php endforeach;?>
            </div>
          </div>
          <!--Fin Heures d'ouvertures-->

          <div class="col-md-6 col-lg-4">
            <h6>
              CONTACT
            </h6>
            <div class="info_link-box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span> Toulouse, France </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>+33 561 678 923</span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span> garage-parrot-v@gmail.com</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer section -->
    <footer class=" footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> Tous droits réservés
          
        </p>
      </div>
    </footer>
    <!-- footer section -->

  </section>

  <!-- Fin footer -->


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="view/js/custom.js"></script>

</body>

</html>