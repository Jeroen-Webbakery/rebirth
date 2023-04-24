<?php

function team_post_type()
{

    // Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Our team', 'Post Type General Name', 'rebirth'),
        'singular_name' => _x('Team', 'Post Type Singular Name', 'rebirth'),
        'menu_name' => __('Our team', 'rebirth'),
        'parent_item_colon' => __('Parent team', 'rebirth'),
        'all_items' => __('All Our team', 'rebirth'),
        'view_item' => __('View team', 'rebirth'),
        'add_new_item' => __('Add New Teammember', 'rebirth'),
        'add_new' => __('Add New Teammember', 'rebirth'),
        'edit_item' => __('Edit Teammember', 'rebirth'),
        'update_item' => __('Update teammember', 'rebirth'),
        'search_items' => __('Search team', 'rebirth'),
        'not_found' => __('Not Found', 'rebirth'),
        'not_found_in_trash' => __('Not found in Trash', 'rebirth'),
        'featured_image' => __('Profile picture', 'rebirth'),
        'set_featured_image' => __('Set Profile picture', 'rebirth'),
    );

    // Set other options for Custom Post Type

    $args = array(
        'label' => __('Our team', 'rebirth'),
        'description' => __('Our team', 'rebirth'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies' => array('Sort'),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'menu_icon' => 'dashicons-admin-users',
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 3,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,

    );

    // Registering your Custom Post Type
    register_post_type('Our team', $args);

}

add_action('init', 'team_post_type', 0);