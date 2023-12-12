<!-- header -->
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('harmonie-corporelle'); ?></title>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<header>
  
<!-- Les icônes -->
<div class="container">
  <div class="row row-cols-auto">
    <div class="col">
      <a class="icon-link" href="https://www.instagram.com/harmonie.corporellee/">
<img width="30" src="<?php echo get_template_directory_uri(); ?>/assets/images/ICÔNE_INSTAGRAM.png ">
</a>
    </div>
    <div class="col">
     <a class="icon-link" href="https://pin.it/7KwgCRX">
<img width="25" src="<?php echo get_template_directory_uri(); ?>/assets/images/ICÔNE_PINTEREST.png ">
</a> 
    </div>
    <div class="col">
     <a class="icon-link" href="#">
<img width="30" src="<?php echo get_template_directory_uri(); ?>/assets/images/ICÔNE_PODCAST.png ">
</a> 
    </div>
  </div>
</div>





<!-- Le logo -->
<img width="150" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" 
class="rounded mx-auto d-block" alt="LOGO">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ACCUEIL</a>
            
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <?php wp_nav_menu([
                  'theme_location' => 'header', // localisation de mon menu
                  'container' => false, // permet de retirer mon container
                  'menu_class' => 'navbar-nav me-auto' // la classe que je veux dans mon <ul></ul>
                ]); ?>
                <!-- <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">SONDAGE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo home_url('/ressources'); ?>">RESSOURCES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">IMC</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FORUM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">EXPERTS</a>
                    </li>
                </ul> -->
            </div>
        </div>
    </nav>

</header>