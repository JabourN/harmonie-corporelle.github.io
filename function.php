<?php 
function create_custom_posts() {
    register_post_type('skills', [
        'labels'=> ['name'=>'skills'],
        'public'=>true,
        'show_in_rest'=>true
    ]);
    register_post_type('langues', [
        'labels'=> ['name'=>'langues'],
        'public'=>true,
        'show_in_rest'=>true
    ]);

    register_post_type('Centres_i', [
        'labels'=> ['name'=>'Centres_i'],
        'public'=>true,
        'show_in_rest'=>true
    ]);
}
add_action('init', 'create_custom_posts');
