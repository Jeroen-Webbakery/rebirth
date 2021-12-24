 <?php
   /**
    * Template Name: Who are we
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

<section id="whowheare_intro" class="bg_lightgray">
   <div class="container">
      <div class="row">
         <div class="offset-lg-2"></div>
         <div class="col-sm-12 col-lg-8 f-28 text_darkgray text-center">
            <?php the_field( 'intro' ); ?>
         </div>
         <div class="offset-lg-2"></div>
      </div>
   </div>
</section>

<section id="team_overview">
   <div class="container">
      <div class="row team_row" data-aos="fade-down" data-aos-duration="1500">
         <?php
		  	
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $args = array(
            		'post_type' => 'Our team', 
            		'posts_per_page' => -1,
            			);
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
            ?>
         <div class="col-sm-12 col-md-6 col-lg-4 team_member my-3 my-lg-5 mb-lg-1">
            <div class="team_content">
               <?php echo get_the_post_thumbnail( $post_id, 'post_thumbnail', array( 'class' => 'team_img' ) ) ?>
				<?php if (get_field( 'function' )) : ?>
				
				<?php else : ?>
				<a href="/<?php _e('vacatures', 'rebirth'); ?>" class="float-none">
					<?php endif; ?>
               <div class="team_info">
                  <h3 class="h3 text_darkgray"><?php the_title(); ?></h3>
				   <?php if (get_field( 'function' )) : ?>
                  <p class="text_darkgray"><?php the_field( 'function' ); ?></p>
				   <?php else : ?>
				   <a href="/<?php _e('vacatures', 'rebirth'); ?>" class="text_darkgray float-none d-block mb-3"><?php _e('Klik hier voor onze vacatures', 'rebirth'); ?></a>
					<?php endif; ?>

                  <?php if (get_field( 'email' )) : ?>
                  <a class="d-block text_darkgray social " href="mailto:<?php the_field( 'email' ); ?>"><i class="far fa-envelope text_darkgray"></i></a>
                  <?php endif; ?>
                  <?php if (get_field( 'linkedin' )) : ?>
                  <a class="d-block text_darkgray social mr-2" target="_blank" rel="noopener noreferrer" aria-label="Linkedin" href="<?php the_field( 'linkedin' ); ?>"><i class="fab fa-linkedin text_darkgray"></i></a>
                  <?php endif; ?>
                  <?php if (get_field( 'phone' )) : ?>
                  <a class="d-block text_darkgray social mr-2" href="tel:<?php the_field( 'phone' ); ?>"><i class="f-18 fas fa-phone-alt text_darkgray"></i></a>
                  <?php endif; ?>

               </div>
									<?php if (get_field( 'function' )) : ?>
				<?php else : ?>
				</a>
				<?php endif;?>
            </div>
         </div>
         <?php wp_reset_postdata(); ?>
         <?php endwhile; ?>
      </div>
   </div>
</section>
<section id="cta" data-aos="fade-up" data-aos-duration="1500">
<?php get_template_part( 'partials/cta', 'content' ); ?>
</section>
<?php
get_footer();

