<?php
/**
 * The template for displaying all single posts
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

?>


<section id="post_header">
	<div class="h-100">
		<div class="row h-100" style="">
			<div class="col-sm-12">
			<?php if ( get_field( 'subpage_bg' ) ) { ?>
				<div class="subpage_bg"
					style="background: rgb(77, 77, 77);
               background: linear-gradient(180deg, rgba(77, 77, 77, 0.6) 15%, rgba(255, 255, 255, 0) 100%) , url(<?php the_field( 'subpage_bg' ); ?>)">
				</div>
				<?php } else { ?>
				<div class="subpage_bg"
					style="background: rgb(77, 77, 77);
               background: linear-gradient(180deg, rgba(77, 77, 77, 0.6) 15%, rgba(255, 255, 255, 0) 100%) , url(<?php echo get_site_url();?>/wp-content/uploads/2021/02/betoncentrale.jpg)">
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
	

<section id="single_project_intro" class="bg_lightgray">
	<div class="container">
		<a class="btn backto no-decoration mb-3 pl-0" href="<?php echo get_site_url();?>/projects"><i
				class="fas fa-chevron-left ml-0 mr-3"></i><?php _e('Terug naar het overzicht', 'rebirth'); ?></a>
		<div class="row">
			<div class="offset-lg-2"></div>
			<div class="col-sm-12 col-lg-8 f-28 text_darkgray text-center">
				<h1 class="h3 mb-3"><?php the_title();?></h1>
				<?php the_content();?>
			</div>
		</div>
	</div>
</section>

<section id="project_content" class="position-relative">
	<div class="container">

		<div class="row">
			<div class="col-sm-12 col-lg-6 pl-lg-0" data-aos="fade-right" data-aos-duration="2000">
				<div class="oddproject_slider mb-3">
					<?php if ( have_rows( 'project_slider' ) ) : ?>
					<?php while ( have_rows( 'project_slider' ) ) : the_row(); ?>
					<?= !empty($img = get_sub_field( 'project_slide_image'  )) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => 'project_img']) : '' ?>
					<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-sm-12 col-lg-6 pl-lg-3 d-flex align-items-center">
				<div class="project_content">
					<div class="f-24">
						<?php the_field( 'content' ); ?>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<section id="project_info">
	<div class="container">		
		<div class="row">
			<?php if ( have_rows( 'propertys' ) ) : while ( have_rows( 'propertys' ) ) : the_row(); ?>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 info">
				<h4><?php the_sub_field( 'titel' ); ?></h4>
				<p><?php the_sub_field( 'waarde' );?></p>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>

		</div>		
	</div>
</section>

<section id="cta">
	<?php get_template_part( 'partials/cta', 'content' ); ?>
</section>

<?php
get_footer();