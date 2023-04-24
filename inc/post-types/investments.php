<?php

function investmenst_post_type()
{

    // Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Investments', 'Post Type General Name', 'rebirth'),
        'singular_name' => _x('Investment', 'Post Type Singular Name', 'rebirth'),
        'menu_name' => __('Investments', 'rebirth'),
        'parent_item_colon' => __('Parent Investment', 'rebirth'),
        'all_items' => __('Alle Investments', 'rebirth'),
        'view_item' => __('Bekijk Investment', 'rebirth'),
        'add_new_item' => __('Voeg nieuwe Investment toe', 'rebirth'),
        'add_new' => __('Voeg nieuwe Investment toe', 'rebirth'),
        'edit_item' => __('Wijzig Investment', 'rebirth'),
        'update_item' => __('Update Investment', 'rebirth'),
        'search_items' => __('Search Investment', 'rebirth'),
        'not_found' => __('Not Found', 'rebirth'),
        'not_found_in_trash' => __('Not found in Trash', 'rebirth'),
    );

    // Set other options for Custom Post Type

    $args = array(
        'label' => __('Investments', 'rebirth'),
        'description' => __('Investment news and reviews', 'rebirth'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
        'taxonomies' => array('Sort'),
        'menu_icon' => 'dashicons-money',
        'hierarchical' => false,
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 2,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,

    );

    // Registering your Custom Post Type
    register_post_type('investments', $args);

}

add_action('init', 'investmenst_post_type', 0);

// Register Custom Taxonomy
function investment_type() {

    $labels = array(
        'name'                       => _x( 'Investment Types', 'Taxonomy General Name', 'rebirth' ),
        'singular_name'              => _x( 'Investment Type', 'Taxonomy Singular Name', 'rebirth' ),
        'menu_name'                  => __( 'Investment Types', 'rebirth' ),
        'all_items'                  => __( 'Alle types', 'rebirth' ),
        'parent_item'                => __( 'Parent Item', 'rebirth' ),
        'parent_item_colon'          => __( 'Parent Item:', 'rebirth' ),
        'new_item_name'              => __( 'New Item Name', 'rebirth' ),
        'add_new_item'               => __( 'Voeg nieuwe project type toe', 'rebirth' ),
        'edit_item'                  => __( 'Wijzig project type', 'rebirth' ),
        'update_item'                => __( 'Update project type', 'rebirth' ),
        'view_item'                  => __( 'Bekijk project type', 'rebirth' ),
        'separate_items_with_commas' => __( 'Separate items with commas', 'rebirth' ),
        'add_or_remove_items'        => __( 'Add or remove items', 'rebirth' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'rebirth' ),
        'popular_items'              => __( 'Popular Items', 'rebirth' ),
        'search_items'               => __( 'Search Items', 'rebirth' ),
        'not_found'                  => __( 'Not Found', 'rebirth' ),
        'no_terms'                   => __( 'No items', 'rebirth' ),
        'items_list'                 => __( 'Items list', 'rebirth' ),
        'items_list_navigation'      => __( 'Items list navigation', 'rebirth' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'investment-type', array( 'investments' ), $args );

}
add_action( 'init', 'investment_type', 0 );

