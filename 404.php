<?php
   /**
    * The template for displaying 404 pages (not found)
    *
    * @package UnderStrap
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
            <div class="error_bg"  style="background: rgb(77, 77, 77);
               background: linear-gradient(180deg, rgba(77, 77, 77, 0.6) 15%, rgba(255, 255, 255, 0) 100%) , url(<?php the_field( 'subpage_bg' ); ?>)">
               <div class="error_block">
                  <p class="h1 error font-weight-bold"><?php esc_html_e( '404 Error', 'rebirth' ); ?>
                  </h1>
				  <p class="text_darkgray"><?php esc_html_e( 'Geen pagina gevonden', 'rebirth' ); ?></p>
				  
				  <a class="btn btn_darkgray p-3" href="/"><?php esc_html_e( 'Terug naar de homepagina', 'rebirth' ); ?></a>
               </div>
            </div>
         </div>
   </div>
</section>
<?php
get_footer();
