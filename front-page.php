<?php
get_header();
?>

<!-- CARROUSEL 1-->
<h1>JE LA FRONT PAGE</h1>

<div class="container">

    <div id="carouselExampleIndicators" class="carousel slide partial-visible-carousel">
        <div class="carousel-indicators">
            <?php
            $post_types = array('IMC', 'Sondage', 'Forum');

            foreach ($post_types as $post_type) {
                $args_carrousel = array(
                    'post_type'      => 'carrousel',
                    'posts_per_page' => -1,
                );

                $carrousel_list   = new WP_Query($args_carrousel);
                $indicator_index  = 0;

                if ($carrousel_list->have_posts()) :
                    while ($carrousel_list->have_posts()) : $carrousel_list->the_post();
                        $content = get_the_content();
                        if (stripos($content, $post_type) !== false) {
                            ?>
                            
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $indicator_index; ?>" <?php echo ($indicator_index === 0) ? 'class="active"' : ''; ?> aria-label="Slide <?php echo $indicator_index + 1; ?>"></button>
                            <?php
                            $indicator_index++;
                        }
                    endwhile;
                endif;
                wp_reset_postdata();
            }
            ?>
        </div>

        <div class="carousel-inner">
            <?php
            $item_index = 0;

            foreach ($post_types as $post_type) {
                $args_carrousel = array(
                    'post_type'      => 'carrousel',
                    'posts_per_page' => -1,
                );

                $carrousel_list = new WP_Query($args_carrousel);

                if ($carrousel_list->have_posts()) :
                    while ($carrousel_list->have_posts()) : $carrousel_list->the_post();
                        $content = get_the_content();
                        if (stripos($content, $post_type) !== false) {
                            ?>
                            <div class="carousel-item <?php echo ($item_index === 0) ? 'active' : ''; ?>">
                                <div class="card mx-auto mb-3 rounded-0 border-0" style="max-width: 1000px; height: 494px; margin: 70px 0;">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-md-5">
                                            <div class="card-body text-center">
                                                <h5 class="card-title mb-4"><?php the_title(); ?></h5>
                                                <p class="card-text"><?php the_content(); ?></p>
                                                <div class="btn-container text-center">
                                               <button type="submit" class="btn btn-custom" name="validate"><span>ALLEZ-Y</span></button>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <img src="<?php the_post_thumbnail_url('full'); ?>" class="img-fluid rounded-0" alt="<?php the_title_attribute(); ?>">
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $item_index++;
                        }
                    endwhile;
                endif;
                wp_reset_postdata();
            }
            ?>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



<!-- MENUBIS -->

<div class="container mt-4">
    <div class="row justify-content-center">
        <?php
        $menubisList = new WP_Query([
            'post_type'      => 'menubis',
            'posts_per_page' => 3
        ]);

        while ($menubisList->have_posts()) : $menubisList->the_post();
        ?>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card mb-4 mx-auto border-0" style="width: 350px; height: 550px; position: relative;">
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title(); ?>" class="card-img-top">
                    <?php endif; ?>
                    <div class="card-body text-center">
                        <h5 class="card-title custom-card-title">
                            <a class="custom-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h5>
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


<!-- CARD POD&LIVRE -->

<?php
$custom_post_types = array('podcasts', 'livres');

// Initialiser le compteur
$counter = 1;
foreach ($custom_post_types as $post_type) {
    $args_custom = array(
        'post_type' => 'accueil',
        'posts_per_page' => -1,
    );

    $custom_list = new WP_Query($args_custom);

    if ($custom_list->have_posts()) :
        while ($custom_list->have_posts()) : $custom_list->the_post();

            // Exclure les articles de type "ressources"
            if (strpos(get_the_content(), 'ressources') !== false) {
                continue;
            }

            $content = get_the_content();
            if (stripos($content, $post_type) !== false) {
                ?>
                <div class="card mx-auto mb-6 rounded-0 border-0" style="max-width: 1300px; height: 499px; margin: 70px 0;">
                    <div class="row g-0 align-items-center">
                        <?php if ($counter % 2 !== 0) : ?>
                            <div class="col-md-6">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url('full'); ?>" class="img-fluid rounded-0" alt="...">
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                        <div class="col-md-6">
                            <div class="card-body text-center">
                                <h5 class="card-title mb-4"><?php the_title(); ?></h5>
                                <p class="card-text"><?php the_content(); ?></p>
                            </div>
                            <button type="submit" class="btn btn-custom" name="validate"><span>Lire plus</span></button>
                        </div>
                        <?php if ($counter % 2 === 0) : ?>
                            <div class="col-md-6">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url('full'); ?>" class="img-fluid rounded-0" alt="...">
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php
                $counter++;
            }
        endwhile;
    endif;
    wp_reset_postdata();
}
?>

<!-- TESTIMONIALS -->

<div class="container">

    <div id="testimonialsCarousel" class="carousel slide partial-visible-carousel">
        <div class="carousel-indicators">
            <?php
            $testimonialsList = new WP_Query([
                'post_type'      => 'testimonials',
                'posts_per_page' => -1
            ]);

            $indicator_index = 0;

            while ($testimonialsList->have_posts()) : $testimonialsList->the_post();
            ?>
                <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="<?php echo $indicator_index; ?>" <?php echo ($indicator_index === 0) ? 'class="active"' : ''; ?> aria-label="Slide <?php echo $indicator_index + 1; ?>"></button>
            <?php
                $indicator_index++;
            endwhile;
            wp_reset_postdata();
            ?>
        </div>

        <div class="carousel-inner">
            <?php
            $testimonialsList = new WP_Query([
                'post_type'      => 'testimonials',
                'posts_per_page' => -1
            ]);

            $item_index = 0;

            while ($testimonialsList->have_posts()) : $testimonialsList->the_post();
            ?>
                <div class="carousel-item <?php echo ($item_index === 0) ? 'active' : ''; ?>">
                    <div class="card mx-auto mb-3 rounded-0 border-0" style="max-width: 700px; height: 350px; margin: 70px auto;">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-12 text-center">
                                <?php if (has_post_thumbnail()) : ?>
                                    <br>
                                    <img src="<?php the_post_thumbnail_url('full'); ?>" class="img-fluid rounded-circle" alt="<?php the_title_attribute(); ?>" style="width: 110px; height: 110px">

                                <?php endif; ?>
                            </div>
                            <div class="col-md-12 text-center">
                                <div class="card-body">
                                    <h5 class="card-title mb-4"><?php the_title(); ?></h5>
                                    <p class="card-text"><?php the_content(); ?></p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                $item_index++;
            endwhile;
            // wp_reset_postdata();
            ?>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</div>
</div>


<?php
get_footer();
?>

