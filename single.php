<?php
/**
 * The template for displaying all single posts
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
               background: linear-gradient(180deg, rgba(77, 77, 77, 0.6) 15%, rgba(255, 255, 255, 0) 100%) , url(<?php echo get_site_url(); ?>/wp-content/uploads/2021/02/DSC_0221-1-scaled.jpg)">	
            </div>
         </div>
      </div>
   </div>
</section>

<section id="post" class="position-relative">
	<div class="container">
	<a class="btn backto no-decoration mb-3 pl-0" href="<?php echo get_post_type_archive_link( 'post' ); ?>"><i class="fas fa-chevron-left ml-0 mr-3"></i><?php _e('Terug naar overzicht', 'rebirth'); ?></a>		

		<div class="row">
			
			<div class="col-sm-12 col-lg-6">
				<?php echo get_the_post_thumbnail( $post_id, 'post_thumbnail', array( 'class' => 'news_img_single mb-2' ) ) ?>
			</div>					
			<div class="col-sm-12 col-lg-6">		
				<h3 class="h2 text_darkgray mb-2"><?php the_title(); ?></h3>
				<p class="singlepost_date my-3"><?php the_time('d F Y'); ?></p>
				<div class="f-24"><?php the_content(); ?></div>
		</div>


	</div>
</div>

</section>


<?php
get_footer();
