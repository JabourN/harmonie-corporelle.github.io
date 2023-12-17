<?php
// Déterminer la date à afficher en fonction du paramètre 'date' dans l'URL
if (isset($_GET['date'])) {
    $date_actuelle = sanitize_text_field($_GET['date']);
} else {
    $date_actuelle = date('Ymd');
}

$args = array(
    'post_type' => 'post',
    'posts_per_page' => -1,
    'date_query' => array(
        array(
            'year'  => substr($date_actuelle, 0, 4),
            'month' => substr($date_actuelle, 4, 2),
            'day'   => substr($date_actuelle, 6, 2),
        ),
    ),
);

$articles = new WP_Query($args);
?>

<div id="content">
    <?php while ($articles->have_posts()) : $articles->the_post(); ?>
        <!-- Afficher le contenu de l'article ici -->
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    <?php endwhile; ?>
</div>

<div id="navigation">
    <a href="?date=<?php echo date('Ymd', strtotime('-1 day', strtotime($date_actuelle))); ?>"><</a>
    <a href="?date=<?php echo date('Ymd', strtotime('+1 day', strtotime($date_actuelle))); ?>">></a>
</div>

<?php get_footer(); ?>

