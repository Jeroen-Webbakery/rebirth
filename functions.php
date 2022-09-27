<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

add_theme_support('post-thumbnails');
// Partners
require_once(get_stylesheet_directory() . '/inc/post-types/partners.php');

function understrap_remove_scripts()
{
    wp_dequeue_style('understrap-styles');
    wp_deregister_style('understrap-styles');

    wp_dequeue_script('understrap-scripts');
    wp_deregister_script('understrap-scripts');

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}

add_action('wp_enqueue_scripts', 'understrap_remove_scripts', 20);

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{

    // Get the theme data
    $the_theme = wp_get_theme();
    wp_enqueue_style('child-understrap-styles', get_stylesheet_directory_uri() . '/css/rebirth.min.css', array(), filemtime(get_stylesheet_directory() . '/css/rebirth.min.css'), 'all');
//    wp_enqueue_style('child-understrap-styles', get_stylesheet_directory_uri() . '/css/rebirth.min.css', array(), $the_theme->get('Version'));
    wp_enqueue_script('jquery');

    wp_enqueue_script('child-understrap-scripts', get_stylesheet_directory_uri() . '/js/rebirth.min.js', ["jquery"], filemtime(get_stylesheet_directory() . '/js/rebirth.min.js'), true);
//    wp_enqueue_script('child-understrap-scripts', get_stylesheet_directory_uri() . '/js/rebirth.min.js', array(), $the_theme->get('Version'), true);

}

function add_child_theme_textdomain()
{
    load_child_theme_textdomain('understrap-child', get_stylesheet_directory() . '/languages');
}

add_action('after_setup_theme', 'add_child_theme_textdomain');

// Options pages
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Footer & CTA',
        'menu_title' => 'Footer & CTA',
        'menu_slug' => 'footer-settings',
        'capability' => 'manage_options'
    ));
}


function eigen_login_logo()
{ ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url("/wp-content/themes/rebirth-child/assets/images/rebirth-logo.png");
            width: auto;
            height: 150px;
            background-size: contain;
        }

        body {
            background-image: url("/wp-content/themes/rebirth-child/assets/images/inlog-bg.jpg") !important;
            background-size: cover !important;
        }

        .login #backtoblog a, .login #nav a {
            color: #fff !important;
            text-align: center !important;
        }

        .wp-core-ui .button-primary {
            background: #4d4d4d !important;
            border-color: #4d4d4d !important;
        }
    </style>
<?php }

add_action('login_enqueue_scripts', 'eigen_login_logo');


function register_my_menus()
{
    register_nav_menus(
        array(
            'primary' => __('Primair Menu'),
            'footer-menu' => __('Footer Menu'),
        )
    );
}

add_action('init', 'register_my_menus');

function project_post_type()
{

    // Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Projects', 'Post Type General Name', 'rebirth'),
        'singular_name' => _x('Project', 'Post Type Singular Name', 'rebirth'),
        'menu_name' => __('Projects', 'rebirth'),
        'parent_item_colon' => __('Parent Project', 'rebirth'),
        'all_items' => __('All Projects', 'rebirth'),
        'view_item' => __('View Project', 'rebirth'),
        'add_new_item' => __('Add new Project', 'rebirth'),
        'add_new' => __('Add New Project', 'rebirth'),
        'edit_item' => __('Edit Project', 'rebirth'),
        'update_item' => __('Update Project', 'rebirth'),
        'search_items' => __('Search Project', 'rebirth'),
        'not_found' => __('Not Found', 'rebirth'),
        'not_found_in_trash' => __('Not found in Trash', 'rebirth'),
    );

    // Set other options for Custom Post Type

    $args = array(
        'label' => __('Projects', 'rebirth'),
        'description' => __('Project news and reviews', 'rebirth'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies' => array('Sort'),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'menu_icon' => 'dashicons-admin-home',
        'hierarchical' => false,
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,

    );

    // Registering your Custom Post Type
    register_post_type('Projects', $args);

}

add_action('init', 'project_post_type', 0);

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
        'menu_position' => 5,
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

function vacature_post_type()
{

    // Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Vacatures', 'Post Type General Name', 'rebirth'),
        'singular_name' => _x('Vacature', 'Post Type Singular Name', 'rebirth'),
        'menu_name' => __('Vacatures', 'rebirth'),
        'parent_item_colon' => __('Parent Vacature', 'rebirth'),
        'all_items' => __('All Vacatures', 'rebirth'),
        'view_item' => __('View Vacature', 'rebirth'),
        'add_new_item' => __('Add New vacature', 'rebirth'),
        'add_new' => __('Add New vacature', 'rebirth'),
        'edit_item' => __('Edit vacature', 'rebirth'),
        'update_item' => __('Update vacature', 'rebirth'),
        'search_items' => __('Search vacature', 'rebirth'),
        'not_found' => __('Not Found', 'rebirth'),
        'not_found_in_trash' => __('Not found in Trash', 'rebirth'),
        'featured_image' => __('Header image', 'rebirth'),
        'set_featured_image' => __('Set header image', 'rebirth'),
    );

    // Set other options for Custom Post Type

    $args = array(
        'label' => __('Vacatures', 'rebirth'),
        'description' => __('Vacatures', 'rebirth'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies' => array('Sort'),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,

    );

    // Registering your Custom Post Type
    register_post_type('Vacatures', $args);

}

add_action('init', 'vacature_post_type', 0);

/*

add_action('the_content','limit_the_content');

function limit_the_content($content){
$word_limit = 30;
$words = explode(' ', $content);
return implode(' ', array_slice($words, 0, $word_limit));
}

*/

/*Hide current language*/
function language_selector()
{
    $languages = icl_get_languages('skip_missing=0&orderby=code');
    if (!empty($languages)) {
        foreach ($languages as $l) {
            if (!$l['active']) {
                echo '<a href="' . $l['url'] . '"> ';
                echo $l['native_name'];
                echo '</a>';
            }
        }
    }
}

// Save ACF Fields
add_filter('acf/settings/save_json', 'my_acf_json_save_point');

function my_acf_json_save_point($path)
{
    // update path
    $path = get_stylesheet_directory() . '/acf';

    // return
    return $path;

}


add_filter('acf/settings/load_json', 'my_acf_json_load_point');

function my_acf_json_load_point( $paths ) {

    // remove original path (optional)
    unset($paths[0]);

    // append path
    $paths[] = get_stylesheet_directory() . '/acf';

    // return
    return $paths;

}

function remove_acf()
{
    $user_info = get_userdata(get_current_user_id());
    $user_email = $user_info->user_email;
    if ($user_email !== "casper@webbakery.nl" && $user_email !== "dev@webbakery.nl" && $user_email !== "jeroen@webbakery.nl") :
        remove_menu_page('edit.php?post_type=acf-field-group');
    endif;
}

add_action('admin_menu', 'remove_acf');
