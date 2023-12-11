<!-- header -->
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/index.css">
  <title><?php bloginfo('harmonie-corporelle'); ?></title>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<header>
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
<!-- Les icônes -->




<!-- Le logo -->
<img width="150" src="<?php echo get_template_directory_uri(); ?>/assets/images/LOGO.png" 
class="rounded mx-auto d-block" alt="LOGO">

</header>
<!-- Script de bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

