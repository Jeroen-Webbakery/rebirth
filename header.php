<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.typekit.net/xxn4iwc.css">
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/jquery-3.6.0.min.js"></script>
	<link href="<?php echo get_stylesheet_directory_uri();?>/css/aos.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_stylesheet_directory_uri();?>/css/slick.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/slick.min.js"></script>
	    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css"
          integrity="sha384-rqn26AG5Pj86AF4SO72RK5fyefcQ/x32DNQfChxWvbXIyXFePlEktwD18fEz+kQU" crossorigin="anonymous">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-190349680-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-190349680-1');
    </script>
	

    <script>
        $(document).ready(function () {
            $('.vacatures a').append('<span class="count">4</span>');
        });
    </script>


    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>

<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">

		<nav id="main-nav" class="navbar navbar-expand-md navbar-dark bg-primary" aria-labelledby="main-nav-label">

			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
			</h2>

		<?php if ( 'container' === $container ) : ?>
			<div class="container">
		<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php $logo = get_field( 'logo', 'option' ); ?>
									
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 453.59 235.76"><defs><style>.cls-1{fill:#fff;}.cls-2{fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:4.43px;}</style></defs><title>Middel 1</title><g id="Laag_2" data-name="Laag 2"><g id="Laag_1-2" data-name="Laag 1"><path class="cls-1" d="M49,113.25a9,9,0,0,1-8.91,8.91c-8.56,0-6.59-8.21-10.53-8.21-1.5,0-3.12,2.31-4.28,4.51v30.78c0,8.57,4.4,11.34,5.09,11.92V163H1v-1.62c1.39-.69,5.9-4.63,5.9-12.15V121.47c0-8.45-4.17-11-5.9-12.27v-1.85l24.41-4.28L23,117.19c2.78-7.87,7.53-13.54,16.09-13.54C44.61,103.65,49,107.35,49,113.25Z"/><path class="cls-1" d="M104.08,142.53v3.13c-2.66,10.53-11.57,18.86-24.88,18.86C63.58,164.52,50,150.4,50,133.73s13.65-30.08,29.28-30.08c12.38,0,23,7.75,25.92,20.25l-36.57,7.52c2,10,7.64,20.25,20.48,20.25A17.32,17.32,0,0,0,104.08,142.53ZM67.74,122.39a39.49,39.49,0,0,0,.47,6.25l9.49-1.85a5.58,5.58,0,0,0,4.63-5.9C82.33,115.1,77,107,71.91,107S67.74,120,67.74,122.39Z"/><path class="cls-1" d="M179.06,140.91C179,154.22,168.65,163,150.71,163H110.09v-1.85c1.85-.58,6-4.28,6-11.45V93.92c0-9.49-4.52-11.68-6-12.26v-2h38.77c12,0,25.69,5.44,25.69,20.71,0,8.45-6.6,15.4-14.7,18.75C169.92,121,179.06,129.22,179.06,140.91ZM136.24,82.12v35.76a46.1,46.1,0,0,0,8.34.69c4.51,0,9.83-3.93,9.83-18.17-.11-11-6.36-18.28-16.55-18.28Zm22.57,58.79c0-9.37-5.32-19.56-15.39-19.67h-7.18v38.3a37.18,37.18,0,0,0,10.3,1C155.22,160.58,158.81,151.33,158.81,140.91Z"/><path class="cls-1" d="M185.07,161.16c1.74-.58,5.79-3.24,5.79-11.57v-29.4c0-7.4-3.94-10.06-5.79-11.11v-1.85l24.3-4.16v46.52c0,8.33,3.94,11,5.44,11.57V163H185.07Zm4.17-74.06a10.53,10.53,0,1,1,10.53,10.41A10.64,10.64,0,0,1,189.24,87.1Z"/><path class="cls-1" d="M267.69,113.25a9,9,0,0,1-8.91,8.91c-8.56,0-6.59-8.21-10.53-8.21-1.5,0-3.12,2.31-4.28,4.51v30.78c0,8.57,4.4,11.34,5.09,11.92V163H219.67v-1.62c1.39-.69,5.9-4.63,5.9-12.15V121.47c0-8.45-4.17-11-5.9-12.27v-1.85l24.42-4.28-2.43,14.12c2.77-7.87,7.52-13.54,16.08-13.54C263.3,103.65,267.69,107.35,267.69,113.25Z"/><path class="cls-1" d="M295.34,108.74v36.68c0,16.78,10.77,11.23,11.35,11.46v1.85c-1.16,1-6.72,5.67-16.67,5.67-7.06,0-13.08-5.09-13.08-17.13V108.74h-7.63v-3.59c8.1-3.24,19.9-14.12,24.07-23.49h2v23.49a62.32,62.32,0,0,0,13.31-2.2l-.69,5.79Z"/><path class="cls-1" d="M377,161.16V163H347.18v-1.85c1.74-.58,5.67-4.51,5.67-11.92V125.87c0-13.43-1.5-17.13-6.94-17.13-3.93,0-7.17,3.35-9.14,7.4v33.57c0,7.75,4.05,10.87,5.09,11.45V163h-29.4v-1.62c1.39-.69,5.91-3.93,5.91-11.68V92.42c0-6.48-2.55-9.84-5.91-11.57V79l24.31-4.17v36.92c3.24-5,8.1-8.1,14.46-8.1,13.43,0,20,8.91,20,20v25.57C371.26,156.65,375.65,160.58,377,161.16Z"/><path class="cls-2" d="M284.93,11.42a120.33,120.33,0,0,1,92.18,222.3"/><path class="cls-1" d="M0,189a.5.5,0,0,1,.47-.5H6.29a9.1,9.1,0,1,1,0,18.2H.47a.5.5,0,0,1-.47-.5Zm5.87,15.9a7.32,7.32,0,1,0,0-14.63H2v14.63Z"/><path class="cls-1" d="M25.91,189a.5.5,0,0,1,.49-.5H36.65a.5.5,0,0,1,.49.5v.75a.49.49,0,0,1-.49.49H27.91v6.35h7.46a.51.51,0,0,1,.5.49v.75a.5.5,0,0,1-.5.5H27.91V205h8.74a.49.49,0,0,1,.49.49v.75a.5.5,0,0,1-.49.5H26.4a.5.5,0,0,1-.49-.5Z"/><path class="cls-1" d="M45.33,189.21a.46.46,0,0,1,.44-.68h1a.48.48,0,0,1,.44.29l6.47,14.55h.1l6.48-14.55a.5.5,0,0,1,.44-.29h1a.46.46,0,0,1,.44.68l-7.9,17.49a.5.5,0,0,1-.44.29h-.26a.53.53,0,0,1-.45-.29Z"/><path class="cls-1" d="M71.55,189a.5.5,0,0,1,.49-.5H82.28a.5.5,0,0,1,.5.5v.75a.49.49,0,0,1-.5.49H73.55v6.35H81a.5.5,0,0,1,.49.49v.75a.49.49,0,0,1-.49.5H73.55V205h8.73a.49.49,0,0,1,.5.49v.75a.5.5,0,0,1-.5.5H72a.5.5,0,0,1-.49-.5Z"/><path class="cls-1" d="M93.43,189a.5.5,0,0,1,.49-.5h1a.51.51,0,0,1,.49.5v16h7.49a.49.49,0,0,1,.49.49v.75a.5.5,0,0,1-.49.5h-9a.5.5,0,0,1-.49-.5Z"/><path class="cls-1" d="M120.44,188.27a9.36,9.36,0,1,1-9.34,9.39A9.34,9.34,0,0,1,120.44,188.27Zm0,16.9a7.54,7.54,0,1,0-7.52-7.51A7.56,7.56,0,0,0,120.44,205.17Z"/><path class="cls-1" d="M140.27,189a.49.49,0,0,1,.49-.5h5.74a5.8,5.8,0,1,1,0,11.6h-4.29v6.1a.51.51,0,0,1-.49.5h-1a.49.49,0,0,1-.49-.5Zm6.1,9.17a4,4,0,0,0,3.95-4,3.83,3.83,0,0,0-3.95-3.71h-4.13v7.69Z"/><path class="cls-1" d="M164.18,188.64a.5.5,0,0,1,.46-.37h.42a.49.49,0,0,1,.44.29l5.15,14.32h.13l5.07-14.32a.49.49,0,0,1,.44-.29h.42a.5.5,0,0,1,.46.37l3.36,17.46c.07.37-.08.63-.47.63h-1a.53.53,0,0,1-.47-.37L176.24,193h-.11l-4.78,13.72a.53.53,0,0,1-.44.29h-.47a.51.51,0,0,1-.44-.29L165.16,193h-.1l-2.26,13.38a.51.51,0,0,1-.47.37h-1c-.39,0-.55-.26-.47-.63Z"/><path class="cls-1" d="M191,189a.49.49,0,0,1,.49-.5h10.24a.49.49,0,0,1,.49.5v.75a.48.48,0,0,1-.49.49H193v6.35h7.46a.5.5,0,0,1,.49.49v.75a.49.49,0,0,1-.49.5H193V205h8.73a.48.48,0,0,1,.49.49v.75a.49.49,0,0,1-.49.5H191.52a.49.49,0,0,1-.49-.5Z"/><path class="cls-1" d="M212.91,188.74a.49.49,0,0,1,.49-.47h.65l11.73,14.61h.05V189a.49.49,0,0,1,.49-.5h.91a.51.51,0,0,1,.49.5v17.49a.49.49,0,0,1-.49.47h-.47l-11.93-14.9h0v14.14a.5.5,0,0,1-.5.5h-.91a.51.51,0,0,1-.49-.5Z"/><path class="cls-1" d="M242.09,190.27h-4.52a.48.48,0,0,1-.49-.49V189a.49.49,0,0,1,.49-.5h11a.5.5,0,0,1,.5.5v.75a.49.49,0,0,1-.5.49h-4.52v16a.52.52,0,0,1-.49.5h-1a.52.52,0,0,1-.5-.5Z"/></g></g></svg>
						</a>
							

						<?php endif; ?>

						<?php
					} else {
						the_custom_logo();
					}
					?>
					<!-- end custom logo -->
					<div class="hamburger d-lg-none">
						<div class="hamburgerTop"></div>
						<div class="hamburgerMiddle"></div>
						<div class="hamburgerBottom"></div>
						</div>	
						<!--
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>
				-->

				<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'mobilenav',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
			<?php if ( 'container' === $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
