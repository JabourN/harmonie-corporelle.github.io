<?php /** Template Name: activity */ get_header(); ?>

<?php while (have_posts()) : the_post();
?>
  <div>
    <h1><?php the_title(); ?></h1>
    <div><?php the_content(); ?></div>
  </div>
<?php endwhile;?>

<?php get_footer();?>