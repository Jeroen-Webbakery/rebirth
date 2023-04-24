<?php
// Register Custom Post Type
function partners()
{

    $labels = array(
        'name' => _x('Partners', 'Post Type General Name', 'rebirth'),
        'singular_name' => _x('Partner', 'Post Type Singular Name', 'rebirth'),
        'menu_name' => __('Partners', 'rebirth'),
        'name_admin_bar' => __('Partners', 'rebirth'),
        'archives' => __('Item Archives', 'rebirth'),
        'attributes' => __('Item Attributes', 'rebirth'),
        'parent_item_colon' => __('Parent Item:', 'rebirth'),
        'all_items' => __('Alle partners', 'rebirth'),
        'add_new_item' => __('Add New Item', 'rebirth'),
        'add_new' => __('Voeg nieuwe partner toe', 'rebirth'),
        'new_item' => __('Voeg nieuwe partner toe', 'rebirth'),
        'edit_item' => __('Wijzig partner', 'rebirth'),
        'update_item' => __('Update partner', 'rebirth'),
        'view_item' => __('Bekijk partner', 'rebirth'),
        'view_items' => __('Bekijk partners', 'rebirth'),
        'search_items' => __('Zoek partner', 'rebirth'),
        'not_found' => __('Not found', 'rebirth'),
        'not_found_in_trash' => __('Not found in Trash', 'rebirth'),
        'featured_image' => __('Logo', 'rebirth'),
        'set_featured_image' => __('Kies een logo', 'rebirth'),
        'remove_featured_image' => __('Verwijder logo', 'rebirth'),
        'use_featured_image' => __('Gebruik als logo', 'rebirth'),
        'insert_into_item' => __('Voeg toe aan partner', 'rebirth'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'rebirth'),
        'items_list' => __('Items list', 'rebirth'),
        'items_list_navigation' => __('Items list navigation', 'rebirth'),
        'filter_items_list' => __('Filter items list', 'rebirth'),
    );
    $args = array(
        'label' => __('Partner', 'rebirth'),
        'description' => __('Partners van reBirth', 'rebirth'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array('partner_category'),
        'hierarchical' => false,
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-groups',
        'menu_position' => 3,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
        'show_in_rest' => false,
    );
    register_post_type('partners', $args);

}

add_action('init', 'partners', 0);

// Register Custom Taxonomy
function parnter_category() {

    $labels = array(
        'name'                       => _x( 'Partner categorieën', 'Taxonomy General Name', 'rebirth' ),
        'singular_name'              => _x( 'Partner categorie', 'Taxonomy Singular Name', 'rebirth' ),
        'menu_name'                  => __( 'Partner categorie', 'rebirth' ),
        'all_items'                  => __( 'Alle categorieën', 'rebirth' ),
        'parent_item'                => __( 'Parent Item', 'rebirth' ),
        'parent_item_colon'          => __( 'Parent Item:', 'rebirth' ),
        'new_item_name'              => __( 'Nieuwe categorie', 'rebirth' ),
        'add_new_item'               => __( 'Nieuwe categorie', 'rebirth' ),
        'edit_item'                  => __( 'Wijzig categorie', 'rebirth' ),
        'update_item'                => __( 'Update categorie', 'rebirth' ),
        'view_item'                  => __( 'Bekijk categorie', 'rebirth' ),
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
        'show_in_rest' => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'partner_category', array( 'partners' ), $args );

}
add_action( 'init', 'parnter_category', 0 );
