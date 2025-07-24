<?php
function utas_motorsport_enqueue_styles() {
    wp_enqueue_style('utas-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'utas_motorsport_enqueue_styles');

function utas_motorsport_enqueue_icons() {
  wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'utas_motorsport_enqueue_icons');
