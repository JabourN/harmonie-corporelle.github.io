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

<body <?php body_class(); ?>>
<header>
<a class="icon-link" href="https://www.instagram.com/harmonie.corporellee/">
<img width="30" src="<?php echo get_template_directory_uri(); ?>/assets/images/ICONE_INSTAGRAM.png ">
</a>
<a class="icon-link" href="https://pin.it/7KwgCRX">
<img width="30" src="<?php echo get_template_directory_uri(); ?>/assets/images/ICONE_PINTEREST.png ">
</a>
<a class="icon-link" href="#">
<img width="30" src="<?php echo get_template_directory_uri(); ?>/assets/images/ICONE_PODCAST.png ">
</a>
</header>

</body>

</html>
