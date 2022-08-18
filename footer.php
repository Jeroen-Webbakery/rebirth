<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>


<div class="bottombar_wrapper bg_green">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-lg-6 site-info">
					<?php the_field( 'left_content', 'option' ); ?>
					<p class="text_darkgray"><?php _e('Alle rechten voorbehouden – Rebirth Development', 'rebirth'); ?> <?php echo date("Y"); ?></p>
			</div>
			<div class="col-sm-12 col-lg-6 site-info text-lg-right text_darkgray">
				<div class="social_icons text-lg-right">
					<?php if ( have_rows( 'socials', 'option' ) ) : ?>
						<?php while ( have_rows( 'socials', 'option' ) ) : the_row(); ?>
						<a class="d-block text_darkgray social" href="<?php the_sub_field( 'link' ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php the_sub_field( 'select_social_profile' ); ?>"><i class="fab fa-<?php the_sub_field( 'select_social_profile' ); ?> text_darkgray"></i></a>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
				<div class="text_darkgray">
					<?php the_field( 'right_content', 'option' ); ?>
				</div>				
			</div>
		</div>
	</div>
</div>


<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/aos.js"></script>
<script>


    $(function() {
        AOS.init({
            once: true
        });


        onElementHeightChange(document.body, function(){
            AOS.refresh();
        });

    });

    function onElementHeightChange(elm, callback) {
        var lastHeight = elm.clientHeight
        var newHeight;

        (function run() {
            newHeight = elm.clientHeight;
            if (lastHeight !== newHeight) callback();
            lastHeight = newHeight;

            if (elm.onElementHeightChangeTimer) {
                clearTimeout(elm.onElementHeightChangeTimer);
            }

            elm.onElementHeightChangeTimer = setTimeout(run, 200);
        })();
    }

</script>



<?php wp_footer(); ?>

</body>

</html>

