

<?php
   /**
    * Template Name: What we do
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

<section id="content_1">
   <div class="container">
      <div class="row">
         <div class="col-sm-12 col-lg-6">
            <h2 class="pt-2 text_darkgray"><?php the_field( 'titel' ); ?></h2>
            <div class="mw_500 f-28">
               <?php the_field( 'text' ); ?>
            </div>
         </div>
         <div class="col-sm-12 col-lg-6 pr-lg-0 content_slider_block first" data-aos="fade-left" data-aos-duration="2000">
            <div class="content_1_slider position-relative">
               <?php if ( have_rows( 'content_1_slider' ) ) : ?>
               <?php while ( have_rows( 'content_1_slider' ) ) : the_row(); ?>
               <?php $slide_img = get_sub_field( 'slide_img' ); ?>
               <?php if ( $slide_img ) : ?>
               <img src="<?php echo esc_url( $slide_img['url'] ); ?>" alt="<?php echo esc_attr( $slide_img['alt'] ); ?>" />
               <?php endif; ?>
               <?php endwhile; ?>
               <?php endif; ?>
            </div>
         </div>
      </div>
   </div>
   
</section>

<section id="content_2">
   <div class="container">
      <div class="row">
	  <div class="col-sm-12 col-lg-6 content_slider_block second" data-aos="fade-right" data-aos-duration="2000">
            <div class="content_2_slider position-relative">
               <?php if ( have_rows( 'content_2_slider' ) ) : ?>
               <?php while ( have_rows( 'content_2_slider' ) ) : the_row(); ?>
               <?php $slide_img = get_sub_field( 'slide_img' ); ?>
               <?php if ( $slide_img ) : ?>
               <img src="<?php echo esc_url( $slide_img['url'] ); ?>" alt="<?php echo esc_attr( $slide_img['alt'] ); ?>" />
               <?php endif; ?>
               <?php endwhile; ?>
               <?php endif; ?>
            </div>
		 </div>
		 
         <div class="col-sm-12 col-lg-6 pl-lg-5">
            <h3 class="pt-2 h2 text_darkgray"><?php the_field( 'titel_2' ); ?></h3>
            <div class="mw_500 f-28">
               <?php the_field( 'text_2' ); ?>
            </div>
         </div>
      </div>
   </div>
</section>
	
 <?php if ( have_rows( 'content_3_slider' ) ) : ?>	
<section id="content_3">
   <div class="container">
      <div class="row">
         <div class="col-sm-12 col-lg-6">
            <h2 class="pt-2 text_darkgray"><?php the_field( 'titel_3' ); ?></h2>
            <div class="mw_500 f-28">
               <?php the_field( 'text_3' ); ?>
            </div>
         </div>
         <div class="col-sm-12 col-lg-6 pr-lg-0 content_slider_block first" data-aos="fade-left" data-aos-duration="2000">
            <div class="content_1_slider position-relative">

               <?php while ( have_rows( 'content_3_slider' ) ) : the_row(); ?>
               <?php $slide_img = get_sub_field( 'slide_img' ); ?>
               <?php if ( $slide_img ) : ?>
               <img src="<?php echo esc_url( $slide_img['url'] ); ?>" alt="<?php echo esc_attr( $slide_img['alt'] ); ?>" />
               <?php endif; ?>
               <?php endwhile; ?>

            </div>
         </div>
      </div>
   </div>
   
</section>
<?php endif; ?>

<section id="cta" data-aos="fade-up" data-aos-duration="2000">
<?php get_template_part( 'partials/cta', 'content' ); ?>
</section>
<?php
get_footer();

