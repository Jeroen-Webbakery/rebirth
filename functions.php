<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

add_theme_support('post-thumbnails');

// Gutenberg uitschakelen
add_filter('use_block_editor_for_post', '__return_false', 10);

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
    wp_enqueue_style('aos-styles', get_stylesheet_directory_uri() . '/assets/css/aos.css', array(), null, 'all');
    wp_enqueue_style('slick-styles', get_stylesheet_directory_uri() . '/assets/css/slick.css', array(), null, 'all');
    wp_enqueue_style('main-styles', get_stylesheet_directory_uri() . '/assets/css/main.min.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/main.min.css'), 'all');
//    wp_enqueue_style('child-understrap-styles', get_stylesheet_directory_uri() . '/css/rebirth.min.css', array(), $the_theme->get('Version'));
    wp_enqueue_script('jquery');

    wp_enqueue_script('jquery-scripts', get_stylesheet_directory_uri() . '/assets/js/jquery-3.6.0.min.js', ["jquery"], null, true);
    wp_enqueue_script('isotope-scripts', get_stylesheet_directory_uri() . '/assets/js/isotope.pkgd.min.js', ["jquery"],null, true);
    wp_enqueue_script('slick-scripts', get_stylesheet_directory_uri() . '/assets/js/slick.min.js', ["jquery"], null, true);
    wp_enqueue_script('aos-scripts', get_stylesheet_directory_uri() . '/assets/js/aos.js', ["jquery"], null, true);
    wp_enqueue_script('main-scripts', get_stylesheet_directory_uri() . '/assets/js/main.min.js', ["jquery"], filemtime(get_stylesheet_directory() . '/assets/js/main.min.js'), true);
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


/***************************************
 * Registering post types
 ***************************************/
require __DIR__ . '/inc/post-types/partners.php';
require __DIR__ . '/inc/post-types/projects.php';
require __DIR__ . '/inc/post-types/investments.php';
require __DIR__ . '/inc/post-types/team.php';
require __DIR__ . '/inc/post-types/vacancies.php';




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
