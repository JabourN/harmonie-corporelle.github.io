<!-- Accueil -->
<?php get_header(); ?> 

<!-- Contenu principal -->
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ACCUEIL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">CONSEIL</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">IMC</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">FORUM</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            En savoir plus
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Ressources</a></li>
            <li><a class="dropdown-item" href="#">Instagram</a></li>
            <li><a class="dropdown-item" href="#">Experts</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- MAIN -->
<main class="mx-auto">

<!-- Partie 1 : Carrousel -->
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
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Conseil.png" class="d-block w-100" alt="Conseil">
    </a>
    </div>
    <div class="carousel-item">
    <a class="icon-link" href="https://getbootstrap.com/docs/5.3/components/carousel/#how-it-works">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/imc.png" class="d-block w-100" alt="IMC">
    </a>    </div>
    <div class="carousel-item">
    <a class="icon-link" href="https://getbootstrap.com/docs/5.3/components/carousel/#how-it-works">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Forum.png" class="d-block w-100" alt="Forum">
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
<!-- Partie 2 : Card -->
<div class="d-flex p-2">
<div class="d-flex align-items-start mx-auto d-block w-100" style="max-width: 950px; padding-left: 10px; padding-right: 10px;"><div class="card">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/photo.jpg" class="card-img-top" alt="Ressources">
  <div class="card-body">
    <h3 class="card-title">Ressources</h3>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Découvrir</a>
</div>
</div>

<div class="mx-auto p-2" style="height: 100px;"></div>
<div class="card">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/photo.jpg" class="card-img-top" alt="Instagram">
  <div class="card-body">
    <h3 class="card-title">Instagram</h3>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="https://www.instagram.com" class="btn btn-primary">Découvrir</a>
</div>
</div>

<div class="mx-auto p-2" style="height: 100px;"></div>
<div class="card">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/photo.jpg" class="card-img-top" alt="Experts">
  <div class="card-body">
    <h3 class="card-title">Experts</h3>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Découvrir</a>

</div>
</div>
</div>
</div>
<!-- Partie 3 : Audio & book !!!! RAJOUTER DES COLONNES PARCE QUE C'EST LAID !!!-->
<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/casque.jpg" class="img-fluid rounded-start" alt="IMC">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Explorez chaque jour nos podcasts thématiques. Découvrez des sujets enrichissants sur la nutrition, les bonnes habitudes et le bien-être. Que vous cherchiez à améliorer vos habitudes alimentaires, à trouver l'équilibre émotionnel, ou à cultiver un mode de vie sain, nos podcasts sont conçus pour vous accompagner au quotidien.</p>
      </div>
    </div>
  </div>
</div>
<div class="row g-0">
    <div class="col-md-4">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/casque.jpg" class="img-fluid rounded-start" alt="IMC">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card text-end">Explorez chaque jour nos podcasts thématiques. Découvrez des sujets enrichissants sur la nutrition, les bonnes habitudes et le bien-être. Que vous cherchiez à améliorer vos habitudes alimentaires, à trouver l'équilibre émotionnel, ou à cultiver un mode de vie sain, nos podcasts sont conçus pour vous accompagner au quotidien.</p>
      </div>
    </div>
  </div>
</div>
</main>
</body>
<?php get_footer() ?>