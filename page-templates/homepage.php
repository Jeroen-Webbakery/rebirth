 <?php
   /**
    * Template Name: Homepage
    *
    * Template for displaying a page without sidebar even if a sidebar widget is published.
    *
    * @package UnderStrap
    */
   
   // Exit if accessed directly.
   defined( 'ABSPATH' ) || exit;
   
   get_header();

   ?>
<div id="full-width-page-wrapper" >
<section id="header" data-aos="fade-down" data-aos-duration="1000">
   <div class="h-100">
      <div class="row h-100" style="">
          <div class="col-sm-12 d-flex align-items-center justify-content-center">
              <video class="header_video" disablePictureInPicture playsinline loop autoplay muted>
                  <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/videos/rebirthklein.mp4" type="video/mp4">
                  Your browser does not support the video tag.
              </video>
              <a class="sound-on"><i class="fas fa-volume-up"></i></a>
              <a class="sound-off active"><i class="far fa-volume-slash"></i></a>
              <div class="slider_text w-100 text-white">
                  <h1 class="pb-3"><?php the_field( 'text_over_slider' ); ?></h1>
                  <?php $button_link = get_field( 'button_link' ); ?>
                  <a class="btn btn_gray readmore no-decoration block mx-auto" href="<?php echo esc_url( $button_link['url'] ); ?>"><?php the_field( 'button_text' ); ?><i class="fas fa-chevron-right"></i></a>
              </div>
          </div>
      </div>
   </div>
   <p class="side_title_left home text_gray"><?php _e('Welkom bij reBirth', 'rebirth'); ?></p>
</section>
<section id="intro" class="bg_lightgray">
   <div class="container">
      <div class="row">
         <div class="col-sm-12 col-lg-6 f-28 text-darkgray" data-aos="fade-down" data-aos-duration="1000">
            <?php the_field( 'content_left' ); ?>
         </div>
         <div class="col-sm-12 col-lg-6 f-28 text-darkgray" data-aos="fade-down" data-aos-duration="1000">
            <?php the_field( 'content_right' ); ?>
         </div>
      </div>
   </div>
</section>
<section id="projects">
   <div class="container">
      <div class="projects_slider">
         <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $args = array(
            		'post_type' => 'projects', 
            		'posts_per_page' => -1,
            			);
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
            $content = get_the_content();
            $trimmed_content = wp_trim_words( $content, 40, NULL );
            
            ?>
         <div class="container" data-aos="fade-up" data-aos-duration="1000">
            <div class="row">
               <div class="offset-lg-5"></div>
               <div class="col-sm-12 col-lg-7 project_title">
                  <h3 class="h2 text_darkgray"><?php the_title(); ?></h3>
               </div>
               <div class="col-sm-12 col-lg-9 pl-lg-0 mb-3 mb-lg-1">
                  <?php echo get_the_post_thumbnail( $post_id, 'post_thumbnail', array( 'class' => 'project_slide_img', 'loading' => 'eager' ) ) ?>
               </div>
               <div class="col-sm-12 col-lg-3 f-24 pt-lg-3 pl-lg-5">
                  <p class="f-26"><?php echo ($trimmed_content); ?></p>
                  <a class="btn btn_darkgray readmore no-decoration block mx-auto" href="<?php echo get_permalink(); ?>"><?php _e('Lees meer', 'rebirth'); ?><i class="fas fa-chevron-right"></i></a>		
               </div>
            </div>
         </div>
         <?php wp_reset_postdata(); ?>
         <?php endwhile; ?>
      </div>
      <div class="project_slider_arrows">
         <a class="prev_project"><i class="fas fa-chevron-left"></i></a>
         <a class="next_project"><i class="fas fa-chevron-right"></i> </a>
      </div>
   </div>
</section>
<section id="news_overview">
   <div class="container">
      <div class="row">
         <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $args = array(
            		'post_type' => 'post', 
            		'posts_per_page' => 3,
            			);
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
            $content = get_the_content();
            $newstrimmed_content = wp_trim_words( $content, 10, NULL );?>
         <div class="col-sm-12 col-lg-4 my-3 my-lg-1 news_block" data-aos="fade-up" data-aos-duration="1000">
			 <div class="position-relative post_image">
            <a href="<?php echo get_permalink(); ?>">
            <?php echo get_the_post_thumbnail( $post_id, 'post_thumbnail', array( 'class' => 'news_img mb-1' ) ) ?>
			 </a>
				<p class="date"><?php the_time('d F Y'); ?></p>
			 </div>
			 <h3 class="h3 text_darkgray my-2"><?php the_title(); ?></h3>
			 
            <p class="f-26"><?php echo ($newstrimmed_content); ?></p>
			 
            <a class="btn btn_darkgray readmore no-decoration mx-auto mt-2" href="<?php echo get_permalink(); ?>"><?php _e('Lees meer', 'rebirth'); ?><i class="fas fa-chevron-right"></i></a>		
         </div>
         <?php wp_reset_postdata(); ?>
         <?php endwhile; ?>
      </div>
   </div>
   <p class="side_title_right news text_gray"><?php _e('Laatste nieuws', 'rebirth'); ?></p>
</section>
<section id="real_estate" >
   <div class="container">
      <div class="row">
         <div class="col-sm-12 col-lg-6 realestate">
            <h3 class="h1 text_darkgray"><?php the_field( 'titel' ); ?></h3>
            <div class="mw_500 f-28">
               <?php the_field( 'text' ); ?>
            </div>
         </div>
         <div class="col-sm-12 col-lg-6 pr-lg-0 realestate_slider_block" data-aos="fade-left" data-aos-duration="1000">
            <div class="realestate_slider position-relative" >
               <?php if ( have_rows( 'realestate_slider' ) ) : ?>
               <?php while ( have_rows( 'realestate_slider' ) ) : the_row(); ?>
               <?php $slide_img = get_sub_field( 'slide_img' ); ?>
               <?php if ( $slide_img ) : ?>
               <img class="realestate_img" src="<?php echo esc_url( $slide_img['url'] ); ?>" alt="<?php echo esc_attr( $slide_img['alt'] ); ?>" />
               <?php endif; ?>
               <?php endwhile; ?>
               <?php endif; ?>
            </div>
         </div>
      </div>
   </div>
   <p class="side_title_left real text_gray"><?php _e('Proposities', 'rebirth'); ?></p>
</section>
<section id="cta" data-aos="fade-up" data-aos-duration="1500">
   <?php get_template_part( 'partials/cta', 'content' ); ?>
</section>
<?php
get_footer();

