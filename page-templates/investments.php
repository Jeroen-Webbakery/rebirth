<?php
/**
 * Template Name: Investments
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header();

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
                    <?php the_field('intro'); ?>

                    <div class="button-group projects filters-button-group">
                        <?php if ($terms = get_terms(array(
                            'post_type' => 'investments',
                            'taxonomy' => 'investment-type',
                            'hide_empty' => true,
                        ))) :
                            ?>
                        <button class="button is-checked" data-filter="*"><?php _e('Alle', 'rebirth'); ?></button>

                        <?php
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
                $args = array(
                    'post_type' => 'investments',
                    'taxonomy' => 'investment-type',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,

                );

                $query = new WP_Query($args); ?>
                <?php
                if ($query->have_posts()) :
                    $count = (int)0; ?>
                    <div id="cc_posts_wrap" class="row">
                        <?php
                        while ($query->have_posts()) : $count++;
                            $query->the_post();
                            ?>

                            <?php get_template_part('partials/investments', 'content'); ?>

                            <?php wp_reset_postdata(); ?>
                        <?php endwhile;
                        ?>
                    </div> <!-- end isotope-list -->

                <?php endif; ?>

            </div>
        </div>

    </section>

    <section id="cta" data-aos="fade-up" data-aos-duration="2000">
        <?php get_template_part('partials/cta', 'content'); ?>
    </section>


<?php
get_footer();
