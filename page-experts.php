<?php
get_header();
?>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <?php
        // Boucle WordPress pour afficher les articles de type "accueil"
        $args = array(
            'post_type' => 'accueil',
            'posts_per_page' => 3, // Nombre d'articles à afficher
        );

        $query = new WP_Query($args);

        $indicator_index = 0;

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
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

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                ?>
                <div class="carousel-item <?php echo ($item_index === 0) ? 'active' : ''; ?>">
                    <div class="custom-card accueil-card">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="col-md-6">
                                <img src="<?php the_post_thumbnail_url('full'); ?>" class="card-image img-fluid rounded-0" alt="<?php the_title_attribute(); ?>">
                            </div>
                        <?php endif; ?>
                        <div class="col-md-6 card-content">
                            <h2 class="card-title accueil-title"><?php the_title(); ?></h2>
                            <div class="card-text accueil-text">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $item_index++;
            endwhile;
        endif;
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
// Réinitialise la requête post
wp_reset_postdata();
?>

<!-- Nouvelles cartes -->
<?php while ($IMCList->have_posts()) : $IMCList->the_post(); ?>
    <div class="card mx-auto mb-3 rounded-0 border-0" style="max-width: 1350px; height: 683.8px; margin: 70px 0;">
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
<?php endwhile; ?>

<?php
get_footer();
?>
