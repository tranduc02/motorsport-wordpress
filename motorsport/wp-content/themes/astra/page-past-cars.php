<?php get_header(); ?>

<!-- Year Selector -->
<section class="year-selector">
  <div class="container">
    <label for="carYear">Select Year:</label>
    <select id="carYear" onchange="showYear(this.value)">
      <?php for ($y = 2001; $y <= 2025; $y++): ?>
        <option value="<?php echo $y; ?>" <?php echo $y === 2025 ? 'selected' : ''; ?>>
          <?php echo $y; ?>
        </option>
      <?php endfor; ?>
    </select>
  </div>
</section>

<!-- Year Title Banner -->
<section class="year-header">
  <div class="container with-bg">
    <div class="nav-arrow left">&#8249;</div>
    <h1 class="year-title">Competition Year 2025</h1>
    <div class="nav-arrow right">&#8250;</div>
  </div>
</section>

<!-- Year Content Blocks -->
<?php for ($y = 2001; $y <= 2025; $y++): ?>
<section class="year-content" id="year-<?php echo $y; ?>" style="display: <?php echo $y === 2025 ? 'block' : 'none'; ?>;">
  <div class="container">
    <h2 class="spec-title"><?php echo $y; ?> SPECIFICATIONS</h2>
    <p class="spec-intro">
      Description of the <?php echo $y; ?> car. Replace this text with actual reflections or specs from that year.
    </p>

    <div class="spec-content">
      <div class="spec-text">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Details about <?php echo $y; ?> car go here.</p>
      </div>
      <div class="spec-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/car-placeholder.png" alt="Car <?php echo $y; ?>">
      </div>
    </div>

    <p class="spec-thankyou">
      Thank you to all UTAS Motorsport members and sponsors in <?php echo $y; ?>.
    </p>
  </div>
</section>
<?php endfor; ?>

<!-- JavaScript -->
<script>
function showYear(year) {
  // Hide all year blocks
  document.querySelectorAll('.year-content').forEach(block => {
    block.style.display = 'none';
  });

  // Show selected year
  const target = document.getElementById('year-' + year);
  if (target) {
    target.style.display = 'block';
  }

  // Update banner title
  const title = document.querySelector('.year-title');
  if (title) {
    title.textContent = 'Competition Year ' + year;
  }
}
</script>

<?php get_footer(); ?>
