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

<nav class="navbar navbar-expand-lg justify-content-center">
    <div class="container-fluid">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="navbar-brand" href="#">ACCUEIL</a>
            </li>
                <?php wp_nav_menu([
                  'theme_location' => 'header',
                  'container' => false, 
                  'menu_class' => 'navbar-nav me-auto'
                ]); ?>
               
            </div>
        </div>
    </nav>

</header>


