<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=garage_automobile;charset=utf8', 'root', '');
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
}
catch(Exception $e) {
  die($e->getMessage());
}

$reponses = $cnx->query('SELECT * FROM temoignages');
$nb=$reponses->rowCount();

?>

    <!-- Debut section témoignages-->
<section class="client_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Témoignages
      </h2>
    </div>
  </div>
  <div class="container px-0">
    <div id="customCarousel2" class="carousel  carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="box">
            <div class="client_info">
              <div class="client_name">
                <h5>
                  <?php echo $temoignage['nom_tem'];?>
                </h5>
                <h6>
                  <?php echo $temoignage['prenom_tem'];?>
                </h6>
              </div>
              <i class="fa fa-quote-left" aria-hidden="true"></i>
            </div>
            <p>
            <?php echo $temoignage['message'];?>
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="box">
            <div class="client_info">
              <div class="client_name">
                <h5>
                  <?php echo $temoignage['nom_tem'];?>
                </h5>
                <h6>
                  <?php echo $temoignage['prenom_tem'];?>
                </h6>
              </div>
              <i class="fa fa-quote-left" aria-hidden="true"></i>
            </div>
            <p>
            <?php echo $temoignage['message'];?>
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="box">
            <div class="client_info">
              <div class="client_name">
                <h5>
                   <?php echo $temoignage['nom_tem'];?>
                </h5>
                <h6>
                <?php echo $temoignage['prenom_tem'];?>
                </h6>
              </div>
              <i class="fa fa-quote-left" aria-hidden="true"></i>
            </div>
            <p>
            <?php echo $temoignage['message'];?>
            </p>
          </div>
        </div>
      </div>
      <div class="carousel_btn-box">
        <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
          <i class="fa fa-angle-left" aria-hidden="true"></i>
          <span class="sr-only">Précédent</span>
        </a>
        <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
          <i class="fa fa-angle-right" aria-hidden="true"></i>
          <span class="sr-only">Suivant</span>
        </a>
      </div>
    </div>
  </div>
</section>
<!-- Debut section témoignages-->