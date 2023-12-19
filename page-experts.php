<?php get_header(); ?>

<?php
$expertsList = new WP_Query([
    'post_type' => 'experts',
    'posts_per_page' => 3
]);
?>

<?php $counter = 1; ?>

<?php while ($expertsList->have_posts()) : $expertsList->the_post(); ?>
  <div class="card mx-auto mb-3 rounded-0 border-0" style="max-width: 1350px; height: 683.8px; margin: 70px 0;">
    <div class="row g-0">
<?php if ($counter % 2 !== 0) : ?>
      <div class="col-md-7">
<?php if (has_post_thumbnail()) : ?>
       <img src="<?php the_post_thumbnail_url('full'); ?>" class="img-fluid rounded-0" alt="...">
<?php endif; ?>
</div>
<?php endif; ?>
   <div class="col-md-5">
   <div class="card-body text-center">
    <h5 class="card-title"><?php the_title(); ?></h5>
    <p class="card-text"><?php the_content(); ?></p>
 </div>
</div>


<?php if ($counter % 2 === 0) : ?>
   <div class="col-md-7">
     <?php if (has_post_thumbnail()) : ?>
      <img src="<?php the_post_thumbnail_url('full'); ?>" class="img-fluid rounded-0" alt="...">
<?php endif; ?>
</div>
<?php endif; ?>
</div>
</div>
</div>

<?php $counter++; ?>
<?php endwhile; ?>


<?php get_footer(); ?>

           