<?php get_header(); ?>

<main>
  <div class="container">
    <!-- Hero Banner -->
    <section class="hero-banner">
      <img class="section-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.jpg" alt="UTAS Motorsport">
      <h1 class="hero-title">UTAS MOTORSPORT</h1>
    </section>

    <!-- About Section -->
    <section class="about-us">
      <h2>The University of Tasmania Motorsport team</h2>
      <p class="about-text">
        The best reward in Formula SAE-A 2024
      </p>
      <div class="card-row">
      <div class="card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/cost.png" alt="1st">
        <h3>2nd</h3>
        <p>Lest COST </p>
      </div>
      <div class="card">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/10th.png" alt="10th Place UTAS">
      <h3>10th Place</h3>
      <p>Overall at Australian Formula SAE 2024</p>
      </div>

      <div class="card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/efficiency.png" alt="Electric">
        <h3>2nd</h3>
        <p>Most Efficiency</p>
      </div>
    </div>

    </section>

    <!-- Competition Section -->
    <section class="competition">
      <h2>THE COMPETITION</h2>
      <img class="section-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/competition.jpg" alt="The Competition">
      <p class="competition-text">
        Formula SAE is the world's largest student engineering competition...
      </p>
    </section>

    <!-- Blog Section -->
    <section class="blogs" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/blog.jpg');">
      <h2>OUR BLOGS</h2>
      <div class="blog-row">
        <div class="blog-card">Blog 1</div>
        <div class="blog-card">Blog 2</div>
        <div class="blog-card">Blog 3</div>
      </div>
      <a href="/blog" class="btn-show-more">Show More</a>
    </section>


  </div><!-- ⬅️ 全页面容器结束 -->
</main>

<?php get_footer(); ?>
