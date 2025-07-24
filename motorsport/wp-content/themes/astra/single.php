<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header();

// if ( function_exists( 'astra_page_layout' ) ) {
//     astra_page_layout();
// } else {
//     // fallback or error message
//     echo '<p>Astra layout function missing.</p>';
// }

while ( have_posts() ) : the_post();
    the_content();
endwhile;

get_footer();
