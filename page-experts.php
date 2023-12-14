<?php get_header(); ?> 
    <!-- Première expert -->
<div class="card mx-auto mb-3 rounded-0 border-0" style="max-width: 1350px; height: 683px;">
  <div class="row g-0">
    <div class="col-md-7">
        <?php
            $expertsList = new WP_Query([
                'post_type' => 'experts',
                'posts_per_page' => 1
 ]); ?>
<?php while ( $expertsList->have_posts() ) : $expertsList->the_post(); ?>  
 <div class="col-md-5">
   <div class="card-body text-center">
     <?php if (has_post_thumbnail()) : ?>
        <div class="featured-image">
         <?php the_post_thumbnail('thumbnail'); ?>
         </div>
<?php endif; ?>
        
        <h5 class="card-title"><?php the_title(); ?></h5>
        <p class="card-text"><?php the_content(); ?></p>
        </div>  
<?php endwhile; ?>
</div>
</div>
</div>
</div>

<?php get_footer(); ?>
           