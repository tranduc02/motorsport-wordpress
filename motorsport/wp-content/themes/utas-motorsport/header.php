<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Header -->
<header class="site-header">
  <div class="header-container">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/MS-logo.png" alt="UTAS Logo" class="utas-logo">
    <nav class="main-nav">
      <ul>
        <li><a href="/">HOME</a></li>
        <li><a href="<?php echo site_url('/about-us/'); ?>">ABOUT US</a></li>

        <li><a href="<?php echo site_url('/past-cars'); ?>">PAST CARS</a>        </li>
        <li><a href="/blog">BLOGS</a></li>
        <li><a href="/sponsors">SPONSORS</a></li>
        <li><a href="/contact">CONTACT US</a></li>
      </ul>
    </nav>
  </div>
</header>

