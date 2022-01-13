<?php
   /**
    * Template Name: Landingspage
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

   <section id="template_intro" class="bg_lightgray">
      <div class="container">
         <div class="row">
            <div class="offset-lg-2"></div>
            <div class="col-sm-12 col-lg-8 f-28 text-darkgray text-center mb-5">
               <?php the_field( 'intro' ); ?>
               <?php if ( $button_url = get_field( 'button_url' ) ) : ?>
               <a href="<?php echo esc_url( $button_url ); ?>" class="btn btn_darkgray template_btn mt-3"><?php the_field( 'button_tekst' ); ?></a>	
               <?php endif; ?>
            </div>
            <div class="offset-lg-2"></div>
            <div class="col-sm-12 col-lg-4 usp">
                <p><i class="fas fa-check"></i><?php _e('Snelle verkoop', 'rebirth'); ?></p>
            </div>
            <div class="col-sm-12 col-lg-4 usp">
                <p><i class="fas fa-check"></i><?php _e('Geen makelaarskosten', 'rebirth'); ?></p>
            </div>
            <div class="col-sm-12 col-lg-4 usp">
                <p><i class="fas fa-check"></i><?php _e('Altijd het beste bod', 'rebirth'); ?></p>
            </div>
         </div>
      </div>
   </section>

   <section id="to_buy">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <?php if ( $v_title = get_field( 'v_title' ) ) : ?>
            <h3 class="mb-4"><?php echo esc_html( $v_title ); ?></h3>
            <?php endif; ?>
            <?php if ( have_rows( 'vastgoed' ) ) : ?>
                <ul class="points">
                    <?php while ( have_rows( 'vastgoed' ) ) : the_row(); ?>            
                    <?php if ( $points = get_sub_field( 'points' ) ) : ?>
                    <li><?php echo esc_html( $points ); ?></li>
                    <?php endif; ?>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section id="template_content">
   <div class="container">
      <div class="row">
         <div class="col-sm-12 col-lg-8">
            <h2 class="pt-2 text_darkgray"><?php the_field( 'titel' ); ?></h2>
            <div class="f-28">
               <?php the_field( 'text' ); ?>
            </div>
         </div>
		  
         <div class="col-sm-12 col-lg-4 p-4 bg_lightgray text_darkgray first" >
				<?php the_field( 'form' ); ?>
         </div>
      </div>
   </div>   
</section>



<section id="steps">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center title">
                
                    <h3><?php the_field( 's_title' ); ?></h3>
                
            </div>
            <div class="col-sm-12 col-lg-3 steps step-1">
                <h4 class="h3"><?php _e('Stap 1', 'rebirth'); ?> </h4>
                <?php if ( $stap_1 = get_field( 'stap_1' ) ) : ?>
                    <p><?php echo esc_html( $stap_1 ); ?> </p>
                <?php endif; ?>
                
            </div>
            <div class="col-sm-12 col-lg-3 steps step-2">
            <h4 class="h3"><?php _e('Stap 2', 'rebirth'); ?> </h4>
                <?php if ( $stap_2 = get_field( 'stap_2' ) ) : ?>
                    <p><?php echo esc_html( $stap_2 ); ?> </p>
                <?php endif; ?>
                <div class="triangle-right"></div>
            </div>
            <div class="col-sm-12 col-lg-3 steps step-3">
                <h4 class="h3"><?php _e('Stap 3', 'rebirth'); ?> </h4>
                <?php if ( $stap_3 = get_field( 'stap_3' ) ) : ?>
                    <p><?php echo esc_html( $stap_3 ); ?> </p>
                <?php endif; ?>
                <div class="triangle-right-2"></div>
            </div>
            <div class="col-sm-12 col-lg-3 steps step-4">
                <h4 class="h3"><?php _e('Stap 4', 'rebirth'); ?> </h4>
                <?php if ( $stap_4 = get_field( 'stap_4' ) ) : ?>
                    <p><?php echo esc_html( $stap_4 ); ?> </p>
                <?php endif; ?>
                <div class="triangle-right"></div>
            </div>
        </div>
    </div>
</section>

<section id="recent_projects">
   <div class="container">
      <div class="row">
      <div class="col-sm-12 order-1">
         <h3 class="h2 mb-3"><?php the_field( 'p_title' ); ?></h2>
      </div>
      </div>
      <div class="row">
         <?php 
				$project_left = get_field( 'project_left' );
				$post = $project_left; 
            setup_postdata( $post );
            ?>
            <?php get_template_part( 'partials/projects', 'content' ); ?>
			<?php wp_reset_postdata(); ?>
         <?php 
				$project_right = get_field( 'project_right' );
				$post = $project_right; 
            setup_postdata( $post );
            ?>
            <?php get_template_part( 'partials/projects', 'content' ); ?>
			<?php wp_reset_postdata(); ?>
		</div>



      </div>

</section>

<section id="template_content" class="bg_lightgray" data-aos="fade-up" data-aos-duration="2000">
   <div class="container">
      <div class="row">
         <div class="col-sm-12 col-lg-6">
         <?= !empty($img = get_field( 'p_img' )) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => 'personal_img']) : '' ?>

         </div>
		  
         <div class="col-sm-12 col-lg-6 pl-lg-5 text-darkgray first" data-aos="fade-left" data-aos-duration="2000">
				<?php the_field( 'p_content' ); ?>
         </div>
      </div>
   </div>   
</section>
</div>
<?php
get_footer();

