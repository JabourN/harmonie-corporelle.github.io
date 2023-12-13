<?php get_header(); ?> 

<div class="row mb-4">
    <?php
    $expertsList = new WP_Query([
        'post_type' => 'experts',
        'posts_per_page' => 3
    ]);
    ?>
    <?php while ($expertsList->have_posts()) : $expertsList->the_post(); ?>
        <div class="col-md-4">
            <div class="card custom-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/expert1.png" class="img-fluid rounded-0" alt="...">
                <div class="card-body">
                    <h1><?php the_title(); ?></h1>
                    <p class="card-text"><?php the_content(); ?></p>
                    <a href="https://youtu.be/1fjeQKI-5wg?si=thBEZ_Zh867e9is9" class="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</div>


 <?php get_footer(); ?> 


