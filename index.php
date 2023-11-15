<?php get_header(); ?>
<?php
    $cheminImage = 'assets/images/ICONE_INSTAGRAM.png';
    $cheminImage = 'assets/images/ICONE_PINTEREST.png';
    $cheminImage = 'assets/images/ICONE_PODCAST.png';
?>
 <?php
    $skillslist = new WP_Query([
        'post_type' => 'skills',
    ]);
  ?>
   <?php
    $langueslist = new WP_Query([
        'post_type' => 'langues',
    ]);
  ?>
   <?php
    $Centres_i = new WP_Query([
        'post_type' => 'Centres_i',
    ]);
  ?>

<?php if ($skillslist->have_posts()): ?>
  <h3>Compétences</h3>
  <ul>
    <?php while ($skillslist->have_posts()): $skillslist->the_post(); ?>
      <li><?php the_title(); ?></li>
    <?php endwhile; ?>
  </ul>
<?php endif; ?>

<?php if ($langueslist->have_posts()): ?>
  <h3>Langues</h3>
  <ul>
    <?php while ($langueslist->have_posts()): $langueslist->the_post(); ?>
      <li><?php the_title(); ?></li>
    <?php endwhile; ?>
  </ul>
<?php endif; ?>

<?php if ($Centres_i->have_posts()): ?>
  <h3>Centres d'Intérêt</h3>
  <ul>
    <?php while ($Centres_i->have_posts()): $Centres_i->the_post(); ?>
      <li><?php the_title(); ?></li>
    <?php endwhile; ?>
  </ul>
<?php endif; ?>
