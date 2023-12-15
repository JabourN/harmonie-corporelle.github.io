<?php get_header(); ?>

<div class="container mt-4">
    <div class="row justify-content-center">
        <?php
        $query = new WP_Query(array(
            'post_type' => 'resultats',
            'posts_per_page' => 6,
        ));

        while ($query->have_posts()) : $query->the_post();
        ?>
        <div class="col mb-4">
            <div class="card mb-4 mx-auto border-0" style="width: 500px; height: 700px; position: relative;">
                <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title(); ?>" class="card-img-top">
                <?php endif; ?>
                <div class="card-body text-center">
                    <h5 class="card-title custom-card-title"><?php the_title(); ?></h5>
                    <p class="card-text"><?php the_content(); ?></p>
                </div>
            </div>
        </div>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
    </div>
</div>

<?php get_footer(); ?>



