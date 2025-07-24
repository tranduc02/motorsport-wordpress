<?php
/*
Plugin Name: Cars Custom Post Type
Description: Registers a custom post type for Cars.
Version: 1.0
Author: Abrams
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

function register_car_post_type() {
    $labels = array(
        'name'                  => _x( 'Cars', 'Post Type General Name', 'textdomain' ),
        'singular_name'         => _x( 'Car', 'Post Type Singular Name', 'textdomain' ),
        'menu_name'             => __( 'Cars', 'textdomain' ),
        'name_admin_bar'        => __( 'Car', 'textdomain' ),
        'archives'              => __( 'Car Archives', 'textdomain' ),
        'attributes'            => __( 'Car Attributes', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Car:', 'textdomain' ),
        'all_items'             => __( 'All Cars', 'textdomain' ),
        'add_new_item'          => __( 'Add New Car', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'new_item'              => __( 'New Car', 'textdomain' ),
        'edit_item'             => __( 'Edit Car', 'textdomain' ),
        'update_item'           => __( 'Update Car', 'textdomain' ),
        'view_item'             => __( 'View Car', 'textdomain' ),
        'view_items'            => __( 'View Cars', 'textdomain' ),
        'search_items'          => __( 'Search Car', 'textdomain' ),
        'not_found'             => __( 'Not found', 'textdomain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'textdomain' ),
        'featured_image'        => __( 'Featured Image', 'textdomain' ),
        'set_featured_image'    => __( 'Set featured image', 'textdomain' ),
        'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
        'use_featured_image'    => __( 'Use as featured image', 'textdomain' ),
        'insert_into_item'      => __( 'Insert into car', 'textdomain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this car', 'textdomain' ),
        'items_list'            => __( 'Cars list', 'textdomain' ),
        'items_list_navigation' => __( 'Cars list navigation', 'textdomain' ),
        'filter_items_list'     => __( 'Filter cars list', 'textdomain' ),
    );
    $args = array(
        'label'                 => __( 'Car', 'textdomain' ),
        'description'           => __( 'Post Type for cars', 'textdomain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ),
        'taxonomies'            => array(),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 20,
        'menu_icon'             => 'dashicons-car',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'show_in_rest'          => true, // Important for Gutenberg and block themes
        'rewrite'               => array( 'slug' => 'cars' ),
        'capability_type'       => 'post',
    );
    register_post_type( 'car', $args );
}

add_action( 'init', 'register_car_post_type', 0 );
