<?php get_header(); ?>

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

<div id="navigation" class="text-center mt-5 mb-5">
    <a href="?date=<?php echo date('Ymd', strtotime('-1 day', strtotime($date_actuelle))); ?>"><</a>
    <span class="current-date"><?php echo date('d/m/Y', strtotime($date_actuelle)); ?></span>
    <a href="?date=<?php echo date('Ymd', strtotime('+1 day', strtotime($date_actuelle))); ?>">></a>
</div>

<div id="content" class="text-center"> 
    <?php while ($articles->have_posts()) : $articles->the_post(); ?>
        <h2><?php the_title(); ?></h2>

        <?php
        // Récupérer le type de l'article (podcast, livre, video)
        $type_article = get_post_meta(get_the_ID(), 'type_article', true);

        // Appliquer des styles différents en fonction du type d'article
        switch ($type_article) {
            case 'podcast':
                // Ajouter une classe pour les articles de type podcast
                echo '<div class="article-content podcast-content">';
                break;
            case 'livre':
                // Ajouter une classe pour les articles de type livre
                echo '<div class="article-content livre-content">';
                break;
            case 'video':
                // Ajouter une classe pour les articles de type vidéo
                echo '<div class="article-content video-content">';
                break;
            default:
                // Ajouter une classe par défaut pour les autres types d'articles
                echo '<div class="article-content default-content">';
                break;
        }
        ?>

        <?php the_content(); ?>

        </div>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>

