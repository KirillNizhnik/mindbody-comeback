<?php

function create_locations_post_type() {
    $labels = array(
        'name'                  => _x( 'Locations', 'Post Type General Name', 'textdomain' ),
        'singular_name'         => _x( 'Location', 'Post Type Singular Name', 'textdomain' ),
        'menu_name'             => __( 'Locations', 'textdomain' ),
        'name_admin_bar'        => __( 'Location', 'textdomain' ),
        'archives'              => __( 'Location Archives', 'textdomain' ),
        'attributes'            => __( 'Location Attributes', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Location:', 'textdomain' ),
        'all_items'             => __( 'All Locations', 'textdomain' ),
        'add_new_item'          => __( 'Add New Location', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'new_item'              => __( 'New Location', 'textdomain' ),
        'edit_item'             => __( 'Edit Location', 'textdomain' ),
        'update_item'           => __( 'Update Location', 'textdomain' ),
        'view_item'             => __( 'View Location', 'textdomain' ),
        'view_items'            => __( 'View Locations', 'textdomain' ),
        'search_items'          => __( 'Search Location', 'textdomain' ),
        'not_found'             => __( 'Not found', 'textdomain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'textdomain' ),
        'featured_image'        => __( 'Location Image', 'textdomain' ),
        'set_featured_image'    => __( 'Set location image', 'textdomain' ),
        'remove_featured_image' => __( 'Remove location image', 'textdomain' ),
        'use_featured_image'    => __( 'Use as location image', 'textdomain' ),
        'insert_into_item'      => __( 'Insert into location', 'textdomain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this location', 'textdomain' ),
        'items_list'            => __( 'Locations list', 'textdomain' ),
        'items_list_navigation' => __( 'Locations list navigation', 'textdomain' ),
        'filter_items_list'     => __( 'Filter locations list', 'textdomain' ),
    );
    $args = array(
        'label'                 => __( 'Location', 'textdomain' ),
        'description'           => __( 'Post Type for Locations', 'textdomain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'thumbnail', 'custom-fields' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-location-alt', // Custom icon for the Locations menu
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'locations', $args );
}

add_action( 'init', 'create_locations_post_type', 0 );