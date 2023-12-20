<?php

include 'includes/head.php';
 ?>
<?php get_header(); ?> 
<!-- MAIN -->
<main class="mx-auto">

<!-- Partie 1 : Carrousel -->
<div class="container">
  <div class="row row-cols-auto">
    <div class="col">
  <div class="d-flex p-2">
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <a class="icon-link" href="https://getbootstrap.com/docs/5.3/components/carousel/#how-it-works">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sondage.png" class="d-block w-100" alt="Conseil">
    </a>
    </div>
    <div class="carousel-item">
    <a class="icon-link" href="https://getbootstrap.com/docs/5.3/components/carousel/#how-it-works">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/IMC.png" class="d-block w-100" alt="IMC">
    </a>    </div>
    <div class="carousel-item">
    <a class="icon-link" href="https://getbootstrap.com/docs/5.3/components/carousel/#how-it-works">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/forum.png" class="d-block w-100" alt="Forum">
    </a>    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
    </div>

<!-- Partie 2 : Card -->

<div class="container">
<div class="d-flex align-items-start mx-auto d-block w-100" style="max-width: 950px; padding-left: 10px; padding-right: 10px;"><div class="card">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ressources.png" class="card-img-top" alt="Ressources">
  <div class="card-body">
    <p class="card-text">Explorez nos ressources quotidiennes, des podcasts motivants, des livres inspirants et des vidéos éducatives</p>
    <a href="#" class="btn btn-success">Découvrir</a>
</div>
</div>

<div class="mx-auto p-2" style="height: 100px;"></div>
<div class="card">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.png" class="card-img-top" alt="Instagram">
  <div class="card-body">
    <p class="card-text">Rencontrez nos experts dédiés, prêts à vous accompagner dans votre parcours vers une vie plus saine et équilibrée.</p>
    <a href="https://www.instagram.com" class="btn btn-success">Découvrir</a>
</div>
</div>

<div class="mx-auto p-2" style="height: 100px;"></div>
<div class="card">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/experts.png" class="card-img-top" alt="Experts">
  <div class="card-body">
    <p class="card-text">Suivez-nous sur Instagram pour des doses supplémentaires d'inspiration, des astuces bien-être et des moments motivants.</p>
    <a href="#" class="btn btn-success">Découvrir</a>

</div>
</div>
</div>
</div>

<!-- Partie 3 : Audio & book !!!! RAJOUTER DES COLONNES PARCE QUE C'EST LAID !!!-->
<div class="container card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/casque.png"  class=" img-fluid" alt="podcast">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">PODCAST</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>

<div class="container card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">    
      <h5 class="card-title text-center">LIVRES</h5>
        <p class="card-text text-center">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text "></p>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/livre.png" class="d-block w-100" alt="livre">
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>

<!-- Partie 4 : Commentaire -->
<div class="container">
  <div id="carouselExampleRide" class="carousel slide mx-auto" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="container carousel-item active">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/commentaire1.png" class="d-block w-100 img-fluid" alt="commentaire" style="max-width: 700px; height: auto;">
      </div>
      <div class="carousel-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/commentaire2.png" class="d-block w-100 img-fluid" alt="commentaire" style="max-width: 700px; height: auto;">
      </div>
      <div class="carousel-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/commentaire3.png" class="d-block w-100 img-fluid" alt="commentaire" style="max-width: 700px; height: auto;">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

</main>
 <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->



<?php get_footer() ?>

