<?php
get_header();
?>

<div id="carouselExampleIndicators" class="carousel slide partial-visible-carousel">
    <div class="carousel-indicators">
        <?php
        $args_imc = array(
            'post_type' => 'accueil',
            'posts_per_page' => -1,
        );

        $IMClist = new WP_Query($args_imc);

        $indicator_index = 0;

        if ($IMClist->have_posts()) :
            while ($IMClist->have_posts()) : $IMClist->the_post();
                ?>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $indicator_index; ?>" <?php echo ($indicator_index === 0) ? 'class="active"' : ''; ?> aria-label="Slide <?php echo $indicator_index + 1; ?>"></button>
                <?php
                $indicator_index++;
            endwhile;
        endif;
        ?>
    </div>

    <div class="carousel-inner">
        <?php
        $item_index = 0;

        if ($IMClist->have_posts()) :
            while ($IMClist->have_posts()) : $IMClist->the_post();
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
            endwhile;
        endif;
        wp_reset_postdata();
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

<?php
get_footer();
?>
