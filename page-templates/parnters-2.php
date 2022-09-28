<?php
/**
 * Template Name: Partners 2
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');

if (is_front_page()) {
    get_template_part('global-templates/hero');
}
?>

    <div id="full-width-page-wrapper" data-aos="fade-down" data-aos-duration="1000">

    <section id="header">
        <div class="h-100">
            <div class="row h-100" style="">
                <div class="col-sm-12">
                    <div class="subpage_bg" style="background: rgb(77, 77, 77);
                            background: linear-gradient(180deg, rgba(77, 77, 77, 0.6) 15%, rgba(255, 255, 255, 0) 100%) , url(<?php the_field('subpage_bg'); ?>)">
                    </div>
                </div>
            </div>
        </div>
        <p class="side_title_left projects text_gray"><?= the_title() ?></p>
    </section>

    <section id="projectintro" class="bg_lightgray">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2"></div>
                <div class="col-sm-12 col-lg-8 f-28 text_darkgray text-center">
                    <?php the_content(); ?>

                    <div class="button-group projects filters-button-group">
                        <button class="button is-checked" data-filter="*"><?php _e('Alle', 'rebirth'); ?></button>
                        <?php if ($terms = get_terms(array(
                            'post_type' => 'partners',
                            'taxonomy' => 'partner_category',
                            'hide_empty' => true,
                        ))) :
                            foreach ($terms as $term) : ?>
                                <button id="postfilters" class="button"
                                        data-filter=".<?php echo strtolower($term->slug) ?>"><?php echo $term->name ?></button>
                            <?php
                            endforeach;
                        endif;
                        ?>
                    </div>
                </div>
                <div class="offset-lg-2"></div>
            </div>
        </div>
    </section>

    <section id="project_overview" class="mt-5">
        <div class="container">
            <div class="all_partners isotope">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'partners',
                    'taxonomy' => 'partner_category',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                    'number' => 1,

                );

                $query = new WP_Query($args); ?>
                <?php
                if ($query->have_posts()) :
                    $count = (int)0; ?>
                    <div id="cc_posts_wrap" class="row">
                        <?php
                        while ($query->have_posts()) : $count++;
                            $query->the_post();
                            $terms = wp_get_post_terms(get_the_id(), 'partner_category');
                            ?>

                            <div class="col-12 col-md-6 col-lg-4 element-item partner <?php foreach ($terms as $term) {
                                echo $term->slug;
                            } ?>">
                                <?php if ($link = get_field('partner_website')) : ?>
                                    <a href="<?= $link ?>">
                                        <?php echo get_the_post_thumbnail(get_the_ID(), 'post_thumbnail', array('class' => 'logo', 'loading' => 'lazy')) ?>
                                    </a>
                                <?php else : ?>
                                    <?php echo get_the_post_thumbnail(get_the_ID(), 'post_thumbnail', array('class' => 'logo', 'loading' => 'lazy')) ?>
                                <?php endif; ?>
                            </div>

                            <?php wp_reset_postdata(); ?>
                        <?php endwhile;
                        ?>
                    </div> <!-- end isotope-list -->

                <?php endif; ?>

            </div>
        </div>

    </section>

    <section id="cta" data-aos="fade-up" data-aos-duration="2000">
        <?php get_template_part('partials/cta-partners', 'content'); ?>
    </section>


<?php
get_footer();
