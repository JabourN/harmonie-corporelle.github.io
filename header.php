<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/index.css">
  <title><?php bloginfo('harmonie-corporelle'); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid ">
      <a class="navbar-brand" href="#">Accueil</a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Nutrition
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Sondage</a></li>
          <li><a class="dropdown-item" href="#">Conseil Expert</a></li>
        </ul>

        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          IMC
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Explication</a></li>
          <li><a class="dropdown-item" href="#">Calcule</a></li>
        </ul>

      </div>
    </div>
  </nav>

  <?php wp_footer(); ?>
</body>

</html>
