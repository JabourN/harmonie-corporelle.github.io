<!-- header -->
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/index.css">
  
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
<div class="text-center">
    <a href="<?php echo home_url(); ?>">
        <img class="logo-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" 
        alt="Brand logo | <?php bloginfo('title'); ?>" style="max-width: 170px; height: auto;" />
    </a>
</div>


<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg justify-content-center">
    <div class="container-fluid">
        <ul class="nav justify-content-center mx-auto my-2 mx-5">
                <?php wp_nav_menu([
                  'theme_location' => 'header', // localisation de mon menu
                  'container' => false, // permet de retirer mon container
                  'menu_class' => 'navbar-nav' // la classe que je veux dans mon <ul></ul>
                ]); ?>
           </ul>
    </div>
</nav>

</header>