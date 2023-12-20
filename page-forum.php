<?php /** Template Name: FORUM */ get_header(); ?>
<?php
/*
Template Name: Harmonie corporelle -> Forum
*/

get_header();

// Vérifiez si bbPress est activé
if ( class_exists( 'bbPress' ) ) {
    // Affiche le contenu de la page WordPress
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;

    // Affiche le contenu du forum bbPress
    echo do_shortcode('[bbp-forum-index]');

} else {
    // Affiche un message si bbPress n'est pas activé
    echo '<p>Le plugin bbPress n\'est pas activé.</p>';
}

get_footer();


//*<?php 
    session_start();
    require('actions/Questions/showAllQuestionsAction.php');
?> *// 
