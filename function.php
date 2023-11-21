<?php 
add_theme_support('post_thumbnail');

function wp_assets_loader(){
    wp_enqueue_style(
        'bootstrap', 
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css'
    ); // implémenter Bootstrap.
    wp_enqueue_style(
        'style-app'
        get_template_directory_uri() . '/assets/css/app.css',
        'bootstrap', // rendre le style dépendant de Bootstrap. 
        2 // ajout de la version de Bootstrap.
    ); 
    wp_enqueue_style(
        'bootstrap-bundle',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js',
        false,
        1,
        true
}
add_action('wp_enqueue_scripts', 'wp_assets_loader');