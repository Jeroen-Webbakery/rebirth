<?php
$terms = wp_get_post_terms( get_the_id(),'project-type'); 
    foreach ( $terms as $term ) { 
    $term_link = get_term_link( $term );
?>

<div class="col-sm-12 col-lg-6 element-item <?php echo $term->slug ?>">
    <a href="<?php echo get_the_permalink();?>">
    <div class="content">
        <?php echo get_the_post_thumbnail( get_the_ID(), 'post_thumbnail', array( 'class' => 'project_img' ) ) ?>
        <p class="label"><?php echo $term->name; ?></p>

        <div class="project_content">
            <h3 class="h3 text_darkgray"><?php the_title(); ?></h3>
            <?php if ( $adres = get_field( 'adres' ) ) : ?>
            <p class="mb-0"><?php echo esc_html( $adres ); ?></p>
            <?php endif; ?>
        </div>
    </div>
    </a>
</div>

<?php
}
?>