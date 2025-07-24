<!-- Sponsors Section -->
<section class="footer-sponsors">
  <div class="container">
    <h2>Sponsors</h2>
    <div class="sponsor-grid">
      <?php
      $sponsors = [
        ['name' => 'Bender GmbH', 'link' => 'https://www.bender.de/en/', 'file' => 'bender.png'],
        ['name' => 'BTT Engineering', 'link' => 'http://bttengineering.com.au', 'file' => 'btt.png'],
        ['name' => 'Calspan', 'link' => 'http://calspan.com', 'file' => 'calspan.png'],
        ['name' => 'CGB Precision', 'link' => 'https://cgb.com.au/', 'file' => 'cgb.png'],
        ['name' => 'Definium Technologies', 'link' => 'https://www.definium.net/', 'file' => 'definium.png'],
        ['name' => 'Elphinstone', 'link' => 'http://elphinstone.com', 'file' => 'elphinstone.png'],
        ['name' => 'GPI Apollo', 'link' => 'https://www.apollobikes.com/accessories/dt_swiss', 'file' => 'apollo.png'],
        ['name' => 'Laser Central', 'link' => 'http://lasercentral.com.au', 'file' => 'lc.png'],
        ['name' => 'LEAP Australia', 'link' => 'http://leapaust.com.au', 'file' => 'leap.png'],
        ['name' => 'PT Motorsport', 'link' => 'https://www.ptmotorsport.com.au', 'file' => 'pt-motorsport.png'],
        ['name' => 'Spectrum Paints', 'link' => 'https://spectrumcarpaints.com.au/', 'file' => 'spectrumpaints.png'],
        ['name' => 'STKC', 'link' => 'https://facebook.com', 'file' => 'STKC.JPG'],
        ['name' => 'Fibreglass Shop', 'link' => 'http://fibreglassshop.com.au', 'file' => 'fibreglassshop.png'],
        ['name' => 'TUSA', 'link' => 'http://tusa.org.au', 'file' => 'tusa.png'],
        ['name' => 'Bosch', 'link' => 'https://www.bosch.com.au/', 'file' => 'bosch.png'],

            /*fake sponsors */
        ['name' => 'BR Automation', 'link' => 'http://br-automation.com', 'file' => 'br.png'],
        ['name' => 'Monit', 'link' => 'https://www.monitmotorsport.com/', 'file' => 'monit.png'],
        ['name' => 'NVIDIA', 'link' => 'https://nvidia.com', 'file' => 'nvidia.png'],
        ['name' => 'Red Bull', 'link' => 'https://redbull.com', 'file' => 'redbull.png'],
        ['name' => 'Rohde & Schwarz', 'link' => 'https://www.rohde-schwarz.com', 'file' => 'rs.png'],
        ['name' => 'RMIT', 'link' => 'https://rmit.edu.au', 'file' => 'rmit.png'],
        ['name' => 'Siemens', 'link' => 'https://siemens.com', 'file' => 'siemens.png'],
        ['name' => 'Toyota', 'link' => 'https://toyota.com', 'file' => 'toyota.png'],
        ['name' => 'Altair', 'link' => 'https://altair.com', 'file' => 'altair.png'],
        ['name' => 'Tyrepower', 'link' => 'http://tyrepower.com.au', 'file' => 'tyrepower.png'],

        /*Real sponsor but Large Logo */
        ['name' => 'Dr Dave Warren', 'link' => 'https://en.wikipedia.org/wiki/David_Warren_(inventor)', 'file' => 'dr-dave-warren.jpg']
      ];

      foreach ($sponsors as $sponsor):
      ?>
        <div class="sponsor-box">
          <div class="sponsor-box-inner">
            <a href="<?php echo esc_url($sponsor['link']); ?>" target="_blank" rel="noopener">
              <div class="sponsor-img-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo esc_attr($sponsor['file']); ?>"
                     alt="<?php echo esc_attr($sponsor['name']); ?> Logo"
                     class="sponsor-logo" />
              </div>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>




<!-- Main Footer -->
<footer class="site-footer">
  <div class="footer-top container">
    <div class="footer-left">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/MS-logo.png" alt="UTAS Logo" class="footer-logo">
    </div>

    <div class="footer-right">
      <p class="footer-address">UTAS Motorsport, Sandy Bay, TAS, Australia</p>

      <p class="footer-follow-label">Follow Us</p>
      <div class="footer-socials">
        <a href="https://www.facebook.com/UniversityofTasmaniaMotorsport" target="_blank" aria-label="Facebook">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" target="_blank" aria-label="X"><i class="fab fa-x-twitter"></i></a>
        <a href="https://www.instagram.com/utasmotorsport/" target="_blank" aria-label="Instagram">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="#" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

