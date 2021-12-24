<?php
   /**
    * Template Name: Vacatures
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
                  background: linear-gradient(180deg, rgba(77, 77, 77, 0.6) 15%, rgba(255, 255, 255, 0) 100%) , url(<?php the_field( 'subpage_bg' ); ?>)">	
               </div>
            </div>
         </div>
      </div>
      <p class="side_title_left projects text_gray"><?= the_title() ?></p>
   </section>

   <section id="whatwedo_intro" class="bg_lightgray">
      <div class="container">
         <div class="row">
            <div class="offset-lg-2"></div>
            <div class="col-sm-12 col-lg-8 f-28 text-darkgray text-center">
               <?php the_field( 'intro' ); ?>
            </div>
            <div class="offset-lg-2"></div>
         </div>
      </div>
   </section>

<section id="vacatures">
   <div class="container">
      <div class="row">
         <div class="offset-lg-2"></div>
         <div class=" col-sm-12 col-md-12 col-lg-8">
	<?php

								$paged = get_query_var('paged') ? get_query_var('paged') : 1;
								$args = array(
										'post_status' => 'publish',
										'post_type' => 'vacatures', 
										'posts_per_page' => -1,
											);
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post();
								
								
								
								?>


            <div class="accordionButton accordion-header js-accordion-header"><?php the_title(); ?></div>
		         <div class="accordionContent accordion-body__contents f-20">
					<?php if ( $omschrijving = get_field( 'omschrijving' ) ) : ?>
						<?php echo $omschrijving; ?>
					<?php endif; ?>
					 <p>
						 <?php if ( get_field( 'open_vacature' ) == 0 ) : ?>
 

 

					  <a class="btn btn_darkgray p-3 rounded" href="<?php echo get_permalink(); ?>"><?php _e('Meer informatie', 'rebirth'); ?></a>
						 <?php endif; ?>
					 </p>
			 </div>
	
       
							<?php wp_reset_postdata(); ?>
							<?php endwhile; ?>
         </div>
         <div class="offset-lg-2"></div>
      </div>
   </div>
   
</section>
	
  <section id="whatwedo_intro" class="bg_lightgray">
      <div class="container">
         <div class="row">
            <div class="offset-lg-2"></div>
            <div class="col-sm-12 col-lg-8 f-28 text-darkgray text-center">
               <?php the_field( 'content' ); ?>
            </div>
            <div class="offset-lg-2"></div>
         </div>
      </div>
   </section>


<section id="cta">
<?php get_template_part( 'partials/cta', 'content' ); ?>
</section>
<?php
get_footer();

