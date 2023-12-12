<?php get_header(); ?>

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
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/imc1.png" class="d-block w-100" alt="Conseil">
    </a>
    </div>
    <div class="carousel-item">
    <a class="icon-link" href="https://getbootstrap.com/docs/5.3/components/carousel/#how-it-works">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/imc2.png" class="d-block w-100" alt="IMC">
    </a>    </div>
    <div class="carousel-item">
    <a class="icon-link" href="https://getbootstrap.com/docs/5.3/components/carousel/#how-it-works">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/imc3.png" class="d-block w-100" alt="Forum">
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

<!-- Partie 2 : Calculatrice -->



          
<?php get_footer() ?>