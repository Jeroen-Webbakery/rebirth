<?php
/**
 * Template Name: Contact
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div id="full-width-page-wrapper" data-aos="fade-down">

				<section id="header">
					<div class="h-100">
						<div class="row h-100" style="">
							<div class="col-sm-12" >
									<div class="subpage_bg"  style="background: rgb(77, 77, 77);
  background: linear-gradient(180deg, rgba(77, 77, 77, 0.6) 15%, rgba(255, 255, 255, 0) 100%) , url(<?php the_field( 'subpage_bg' ); ?>)">	
										</div>
							</div>
							</div>
						</div>
						<p class="side_title_left projects text_gray"><?= the_title() ?></p>
				</section>

				<section id="contact" class="bg_lightgray">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-lg-6 f-24 mb-5 mb-lg-1 text_darkgray">
								<h2 class="text_darkgray"><?php the_field( 'titel_left' ); ?></h2>
								<?php the_field( 'text_left' ); ?>
								<a class="text_darkgray d-block" href="mailto:<?php the_field( 'mail', 'option' ); ?>"><i class="far fa-envelope mr-2"></i><?php the_field( 'mail', 'option' ); ?></a>
								<a class="text_darkgray d-block" href="tel:<?php the_field( 'phone', 'option' ); ?>"><i class="fas fa-phone-alt mr-2"></i><?php the_field( 'phone', 'option' ); ?></a>


							</div>
							<div class="col-sm-12 col-lg-6 text_darkgray">
								<h3 class="h2 text_darkgray"><?php the_field( 'titel_right' ); ?></h3>
								<?php the_field( 'contactform' ); ?>
							</div>
							
							<div class="col-sm-12 mt-5 f-24">
								<?php if ( $route = get_field( 'route' ) ) : ?>
									<?php echo $route; ?>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</section>

				

<section id="maps">
<iframe src="https://snazzymaps.com/embed/292879" width="100%" height="450px" style="border:none;"></iframe>
</section>


<?php
get_footer();
