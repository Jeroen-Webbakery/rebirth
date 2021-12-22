<?php
/**
 * The template for displaying all vacature posts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<section id="post_header">
   <div class="h-100">
      <div class="row h-100" style="">
         <div class="col-sm-12" >
            <div class="subpage_bg"  style="background: rgb(77, 77, 77);
               background: linear-gradient(180deg, rgba(77, 77, 77, 0.6) 15%, rgba(255, 255, 255, 0) 100%) , url(<?php echo get_site_url(); ?>/wp-content/uploads/2021/02/betoncentrale.jpg)">	
            </div>
         </div>
      </div>
   </div>
</section>

<section id="post" class="position-relative">
	<div class="container">
	<a class="btn backto no-decoration mb-3 pl-0" href="<?php echo get_post_type_archive_link( 'vacatures' ); ?>"><i class="fas fa-chevron-left ml-0 mr-3"></i><?php _e('Terug naar overzicht', 'rebirth'); ?></a>		

		<div class="row">
			
			<div class="col-sm-12 text-center mb-5">
				<h1 class="h2 text_darkgray"><?php the_title(); ?></h1>
				
				<div class="d-lg-flex align-items-center mx-auto vacature_info">
					<p class="text_darkgray p-2 mx-2 mb-0"><i class="far fa-clock mr-1"></i> <?php the_field( 'uren_per_week' ); ?></p>
					<p class="text_darkgray p-2 mx-2 mb-0"><i class="fas fa-briefcase mr-1"></i> <?php the_field( 'functie' ); ?></p>
					<p class="text_darkgray p-2 mx-2 mb-0"><i class="fas fa-map-marker-alt mr-1"></i> <?php the_field( 'locatie' ); ?></p>
				</div>
					
			</div>
			
			<div class="col-sm-12 col-lg-12 text_darkgray">	
				<div class="row">
					<div class="col-sm-12 col-lg-7 f-24">
				
			<?php the_field( 'wat_we_doen' ); ?>	
			<?php the_field( 'over_jou' ); ?>
			<?php the_field( 'voorwaarden' ); ?>
			<?php the_field( 'content_3' ); ?>
					</div>
					<div class="col-sm-12 col-lg-5">
				<div class="content_1_slider position-relative mt-5">
				<?php if ( have_rows( 'slider' ) ) : ?>
					<?php while ( have_rows( 'slider' ) ) : the_row(); ?>
						<?php $image = get_sub_field( 'image' ); ?>
						<?php if ( $image ) : ?>
							<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</section>


<?php
get_footer();
