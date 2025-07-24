<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <?php wp_head(); ?>
</head>
<style>
  nav ul {
    list-style: none;
    margin: 0; padding: 0;
    display: flex;
  }
  nav ul li {
    position: relative;
  }
  nav ul li a {
    display: block;
    padding: 14px 20px;
    color: white;
    text-decoration: none;
  }

  /* Dropdown menu styles */
  nav ul li ul.dropdown {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #333;
    min-width: 160px;
    z-index: 1000;
    flex-direction: column;
  }
  nav ul li:hover ul.dropdown {
    display: flex;
  }
  nav ul li ul.dropdown li a {
    padding: 12px 16px;
  }
  nav ul li ul.dropdown li a:hover {
    background-color: #666;
  }
</style>
<body <?php body_class(); ?>>

<!-- Header -->
<header class="site-header">
  <div class="header-container">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/MS-logo.png" alt="UTAS Logo" class="utas-logo">
    <nav class="main-nav">
      <ul>
        <li><a href="<?php echo site_url('/'); ?>">HOME</a></li>
        <li><a href="<?php echo site_url('/about-us/'); ?>">ABOUT US</a></li>

        <!-- <li><a href="<?php echo site_url('/past-cars'); ?>">PAST CARS</a>        </li> -->
        <li class="dropdown-section">
          <a href="#">PAST CARS ▼</a>
          <ul class="dropdown">
            <li><a href="<?php echo get_permalink(277); ?>">2024</a></li>
            <li><a href="#">2023</a></li>
            <li><a href="#">2022</a></li>
            <li><a href="#">2021</a></li>
            <li><a href="#">2020</a></li>
          </ul>
        </li>
        <li><a href="<?php echo get_permalink( get_page_by_path('blogs') ); ?>">BLOGS</a></li>
        <li><a href="<?php echo site_url('/sponsors/'); ?>">SPONSORS</a></li>
        <li><a href="<?php echo get_permalink( get_page_by_path('contact-us') ); ?>">CONTACT US</a></li>
      </ul>
    </nav>
  </div>
</header>

