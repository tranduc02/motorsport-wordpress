<?php
// Use your PHP header
get_header(); 
?>

<main id="primary" class="site-main">
    <?php
    while ( have_posts() ) :
        the_post();
        the_content(); // This outputs Gutenberg block content
    endwhile;
    ?>
</main>

<?php
// Use your PHP footer
get_footer();
