<?php
get_header();
?>

<div id="carouselExampleIndicators" class="carousel slide partial-visible-carousel">
    <div class="carousel-indicators">
        <?php
        $post_types = array('IMC', 'Sondage', 'Forum');

        foreach ($post_types as $post_type) {
            $args_accueil = array(
                'post_type' => 'accueil',
                'posts_per_page' => -1,
            );

            $accueillist = new WP_Query($args_accueil);

            $indicator_index = 0;

            if ($accueillist->have_posts()) :
                while ($accueillist->have_posts()) : $accueillist->the_post();
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
            $args_accueil = array(
                'post_type' => 'accueil',
                'posts_per_page' => -1,
            );

            $accueillist = new WP_Query($args_accueil);

            if ($accueillist->have_posts()) :
                while ($accueillist->have_posts()) : $accueillist->the_post();
                    $content = get_the_content();
                    if (stripos($content, $post_type) !== false) {
                        ?>
                        <div class="carousel-item <?php echo ($item_index === 0) ? 'active' : ''; ?>">
                            <div class="card mx-auto mb-3 rounded-0 border-0" style="max-width: 1000px; height: 494px; margin: 70px 0;">
                                <div class="row g-0">
                                    <div class="col-md-5">
                                        <div class="card-body text-center">
                                            <h5 class="card-title"><?php the_title(); ?></h5>
                                            <p class="card-text"><?php the_content(); ?></p>
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


<div class="container mt-4">
    <div class="row justify-content-center">
        <?php
        // Le code pour afficher les cartes "ressources", "experts" et "instagram"
        $post_types = array('ressources', 'Experts', 'Instagram');

        foreach ($post_types as $post_type) {
            $query = new WP_Query(array(
                'post_type' => 'accueil',
                'posts_per_page' => -1,
            ));

            while ($query->have_posts()) : $query->the_post();
                $content = get_the_content();
                if (strpos($content, $post_type) !== false) {
                ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card mb-4 mx-auto border-0" style="width: 350px; height: 550px; position: relative;">
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
                }
            endwhile;
            wp_reset_postdata();
          }
        ?>
    </div>
</div>

<?php
get_footer();
?>
