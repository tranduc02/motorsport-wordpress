<?php
/**
 * Template Name: Sponsors Page
 */
get_header();

$sponsors = [
  // ✅ Platinum Sponsors
  ['name' => 'Elphinstone', 'link' => 'http://elphinstone.com', 'file' => 'elphinstone.png', 'tier' => 'platinum', 'description' => '$15,000 cash sponsor.'],
  ['name' => 'Dr Dave Warren', 'link' => 'https://en.wikipedia.org/wiki/David_Warren_(inventor)', 'file' => 'dr-dave-warren.jpg', 'tier' => 'platinum', 'description' => 'Major founding donor and ongoing supporter.'],

  // ✅ Gold Sponsors
  ['name' => 'BTT Engineering', 'link' => 'http://bttengineering.com.au', 'file' => 'btt.png', 'tier' => 'gold', 'description' => '$10,000 confirmed.'],
  ['name' => 'Definium Technologies', 'link' => 'https://www.definium.net/', 'file' => 'definium.png', 'tier' => 'gold', 'description' => '$8,000 confirmed.'],
  ['name' => 'STKC', 'link' => 'https://facebook.com', 'file' => 'STKC.JPG', 'tier' => 'gold', 'description' => '$9,000 value in-kind.'],

  // ✅ Silver Sponsors
  ['name' => 'LEAP Australia', 'link' => 'http://leapaust.com.au', 'file' => 'leap.png', 'tier' => 'silver', 'description' => '3-year license agreement valued ~$3,000.'],
  ['name' => 'UTAS Engineering Workshop', 'link' => 'https://utas.edu.au', 'file' => 'utas.png', 'tier' => 'silver', 'description' => '$5,000 support.'],
  ['name' => 'Laser Central', 'link' => 'http://lasercentral.com.au', 'file' => 'lc.png', 'tier' => 'silver', 'description' => 'In-kind + 10% discount.'],
  ['name' => 'Calspan', 'link' => 'http://calspan.com', 'file' => 'calspan.png', 'tier' => 'silver', 'description' => 'In-kind conditional on tyre test.'],

  // ✅ Bronze Sponsors
  ['name' => 'PT Motorsport', 'link' => 'https://www.ptmotorsport.com.au', 'file' => 'pt-motorsport.png', 'tier' => 'bronze', 'description' => 'Confirmed sponsor.'],
  ['name' => 'Fibreglass Shop', 'link' => 'http://fibreglassshop.com.au', 'file' => 'fibreglassshop.png', 'tier' => 'bronze', 'description' => 'Discount on composite materials.'],
  ['name' => 'TUSA', 'link' => 'http://tusa.org.au', 'file' => 'tusa.png', 'tier' => 'bronze', 'description' => 'Covers competition entry fee.'],
  ['name' => 'Spectrum Paints', 'link' => 'https://spectrumcarpaints.com.au/', 'file' => 'spectrumpaints.png', 'tier' => 'bronze', 'description' => 'Pending confirmation.'],
  ['name' => 'Bender GmbH', 'link' => 'https://www.bender.de/en/', 'file' => 'bender.png', 'tier' => 'bronze', 'description' => 'Provided $900 – confirm invoice.'],
  ['name' => 'GPI Apollo', 'link' => 'https://www.apollobikes.com/accessories/dt_swiss', 'file' => 'apollo.png', 'tier' => 'bronze', 'description' => 'Confirmed. Coordination forwarded.'],
  ['name' => 'CGB Precision', 'link' => 'https://cgb.com.au/', 'file' => 'cgb.png', 'tier' => 'bronze', 'description' => 'Awaiting internal quote.'],
];

function render_sponsor_section($tier, $sponsors) {
  $filtered = array_filter($sponsors, fn($s) => $s['tier'] === $tier);
  if (empty($filtered)) return;

  // Extra class for platinum
  $sectionClass = 'sponsor-page-section sponsor-page-' . $tier;
  $gridClass = 'sponsor-page-grid';

  echo '<section class="' . esc_attr($sectionClass) . '">';
  echo '<h2>' . ucfirst($tier) . ' Sponsors</h2>';
  echo '<div class="' . esc_attr($gridClass) . '">';
  foreach ($filtered as $sponsor) {
    echo '<div class="sponsor-page-box">';
    echo '<a href="' . esc_url($sponsor['link']) . '" target="_blank" rel="noopener">';
    echo '<img src="' . get_template_directory_uri() . '/assets/images/' . esc_attr($sponsor['file']) . '" alt="' . esc_attr($sponsor['name']) . ' Logo">';
    echo '</a>';
    echo '<p class="sponsor-page-description">' . esc_html($sponsor['description']) . '</p>';
    echo '</div>';
  }
  echo '</div></section>';
}

render_sponsor_section('platinum', $sponsors);
render_sponsor_section('gold', $sponsors);
render_sponsor_section('silver', $sponsors);
render_sponsor_section('bronze', $sponsors);

get_footer();
?>
