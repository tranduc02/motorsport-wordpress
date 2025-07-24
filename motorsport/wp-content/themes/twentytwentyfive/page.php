<?php
echo "<!-- page.php is loading -->";
get_header(); // uses header.php
?>

<main>
  <div class="container">
    <?php
    while ( have_posts() ) :
      the_post();
      the_content(); // renders the Gutenberg blocks
    endwhile;
    ?>
  </div>
</main>

<?php get_footer(); // uses  footer.php ?>
