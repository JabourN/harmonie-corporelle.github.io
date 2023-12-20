<?php
get_header();
?>
<?php
while (have_posts()) :
    the_post();
    ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
    </div>
    <?php
endwhile;

get_footer();