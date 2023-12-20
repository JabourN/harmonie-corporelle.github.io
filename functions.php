<?php 

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'menus' );

function wpbootstrap_styles_scripts() {
    
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('mainStyle', get_template_directory_uri() . '/assets/css/index.css');

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js', false, '1.0.0', true);
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', false, '1.0.0', true);
    
}
add_action('wp_enqueue_scripts', 'wpbootstrap_styles_scripts');


// MENUS

register_nav_menu('header', 'En tête du menu');

function montheme_menu_class($classes) {
    // va permettre de customizer les classe de nos items (donc nos `li`)
    $classes[] = 'nav-item';
    return $classes;
}
function montheme_menu_link_class($attrs) {
    // va permettre de customizer les classe de nos liens (donc nos `a`)
    $attrs['class'] = 'nav-link';
    return $attrs;
}

add_filter('nav_menu_css_class', 'montheme_menu_class');
add_filter('nav_menu_link_attributes', 'montheme_menu_link_class');

// ACCUEIL

function create_accueil_posttypes() {
    register_post_type('accueil', [
        'labels' => [
            'name' => ( 'accueil' ),
            'singular_name' => ( 'accueil' )
        ],
        'supports' => ['thumbnail', 'editor', 'title'],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'accueil'],
        'show_in_rest' => false,
    ]);
    register_post_type('testimonials', [
        'labels' => [
            'name' => ( 'Testimonials' ),
            'singular_name' => ( 'Testimonials' )
        ],
        'supports' => ['thumbnail', 'editor', 'title'],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'testimonials'],
        'show_in_rest' => false,
    ]);
    register_post_type('carrousel', [
        'labels' => [
            'name' => ( 'Carrousel' ),
            'singular_name' => ( 'Carrousel' )
        ],
        'supports' => ['thumbnail', 'editor', 'title'],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'carrousel'],
        'show_in_rest' => false,
    ]);
    register_post_type('menubis', [
        'labels' => [
            'name' => ( 'menubis' ),
            'singular_name' => ( 'menubis' )
        ],
        'supports' => ['thumbnail', 'editor', 'title'],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'menubis'],
        'show_in_rest' => false,
    ]);


    register_post_type('imc', [
        'labels' => [
            'name' => ( 'imc' ),
            'singular_name' => ( 'imc' )
        ],
        'supports' => ['thumbnail', 'editor', 'title'],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'imc'],
        'show_in_rest' => false,
    ]);
    register_post_type('experts', [
        'labels' => [
            'name' => ( 'experts' ),
            'singular_name' => ( 'expert' )
        ],
        'supports' => ['thumbnail', 'editor', 'title'],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'experts'],
        'show_in_rest' => false,
    ]);
    register_post_type('resultats', [
        'labels' => [
            'name' => ( 'resultats' ),
            'singular_name' => ( 'resultat' )
        ],
        'supports' => ['thumbnail', 'editor', 'title'],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'resultats'],
        'show_in_rest' => false,
    ]);
}

add_action('init', 'create_accueil_posttypes');


// RESSOURCES
function attribuer_categorie_dates_automatiquement() {
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => -1,
    );

    $articles = new WP_Query($args);

    while ($articles->have_posts()) : $articles->the_post();

        $date_actuelle = date('Ymd');
        $date_article = get_the_date('Ymd');

        $cat_id_dates = get_cat_ID('Dates');

        if ($date_article === $date_actuelle || $date_article === date('Ymd', strtotime('-1 day'))) {
            // Associer l'article à la catégorie "Dates"
            wp_set_post_categories(get_the_ID(), array($cat_id_dates), true);
        }

    endwhile;

    wp_reset_postdata();
}

add_action('init', 'attribuer_categorie_dates_automatiquement');
