<?php get_header(); ?>

<main class="about-page">

  <!-- Hero Banner -->
  <section class="about-hero">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog.jpg" alt="Team Photo" class="section-img">
    <div class="hero-overlay">
      <h1>OUR TEAM</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
    </div>
  </section>

  <!-- Values Section -->
  <section class="about-values container">
    <h2>OUR VALUES</h2>
    <h3>CLUB TENETS (TBD)</h3>
    <div class="values-row">
      <div class="value-box">
        <h4>Value1</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
      </div>
      <div class="value-box">
        <h4>Value2</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
      </div>
      <div class="value-box">
        <h4>Value3</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
      </div>
    </div>
  </section>

<!-- Team Photo -->
<section class="about-gallery">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-gallery.jpg" alt="Team Working Photo" class="section-img">
  <h2>MORE ABOUT US</h2>
</section>

<!-- Team Members by Division -->
<section class="team-grid container">
  <?php
    $divisions = ['MANAGEMENT', 'AERODYNAMIC', 'ELECTRONICS', 'POWERTRAIN', 'STRUCTURE', 'SOFTWARE', 'CHASSIS'];
    $memberIndex = 1;

    foreach ($divisions as $division):
  ?>
    <div class="division-block">
      <h3><?php echo $division; ?></h3>
      <div class="division-grid">
        <?php for ($i = 0; $i < 3; $i++): ?>
          <div class="team-member-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/<?php echo $memberIndex; ?>.png"
                 alt="Team Member <?php echo $memberIndex; ?>"
                 class="team-member-photo">
            <p>Member <?php echo $memberIndex++; ?></p>
          </div>
        <?php endfor; ?>
      </div>
    </div>
  <?php endforeach; ?>
</section>


  <p class="about-thankyou">
    We sincerely thank University of Tasmania, our generous sponsors, and our supportive friends and family for their unwavering encouragement and belief in our journey.
  </p>

</main>

<?php get_footer(); ?>
