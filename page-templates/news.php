<?php
/**
 * Template Name: News
 *
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div id="full-width-page-wrapper" data-aos="fade-down">

<section id="header">
   <div class="h-100">
      <div class="row h-100" style="">
         <div class="col-sm-12" >
            <div class="subpage_bg"  style="background: rgb(77, 77, 77);
               background: linear-gradient(180deg, rgba(77, 77, 77, 0.6) 15%, rgba(255, 255, 255, 0) 100%) , url(/wp-content/uploads/2021/02/DSC_0221-1-scaled.jpg)">	
            </div>
         </div>
      </div>
   </div>
   <p class="side_title_left projects text_gray"><?php the_title(); ?></p>
</section>

<section id="all_news_overview">
	<div class="container">
		<div class="row">										
		<?php
								$paged = get_query_var('paged') ? get_query_var('paged') : 1;
								$args = array(
										'post_type' => 'post', 
										'posts_per_page' => -1,
											);
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post();
								$content = get_the_content();
								$trimmed_content = wp_trim_words( $content, 18, NULL )?>
								<div class="col-sm-12 col-lg-4 mb-5 archive_news_block">
									<div class="post_image position-relative">
									<a href="<?php echo get_permalink(); ?>">
								<?php echo get_the_post_thumbnail( $post_id, 'post_thumbnail', array( 'class' => 'news_img mb-2' ) ) ?></a>
										<p class="date"><?php the_time('d-m-Y'); ?></p>
									</div>
								
										<h3 class="h3 text_darkgray"><?php the_title(); ?></h3>
										<p class="f-26"><?php echo ($trimmed_content); ?></p>
										<a class="btn btn_darkgray readmore no-decoration mx-auto mt-2" href="<?php echo get_permalink(); ?>"><?php _e('Lees meer', 'rebirth'); ?><i class="fas fa-chevron-right"></i></a>		

								</div>
		
										
							

							<?php wp_reset_postdata(); ?>
        					<?php endwhile; ?>
		</div>
	</div>
</section>


<?php
get_footer();
