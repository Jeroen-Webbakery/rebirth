
            <div class="col-sm-12 col-lg-4 single_post small">
                <div class="position-relative">
                    <a href="<?php echo get_permalink(); ?>">
                        <?php echo get_the_post_thumbnail( $post_id, 'post_thumbnail', array( 'class' => 'single_post_image' ) ) ?>
                    </a>
                    <div class="info">
                        <p class="new_post">Nieuw</p>
                        <p class="date"><?php the_time('d-m-Y'); ?></p>
                        <p class="readtime"><?php the_field( 'readtime' ); ?> min. leestijd</p>                        
                    </div>
                    <a href="<?php echo get_permalink(); ?>">    
                        <h3><?php echo the_title(); ?></h3>
                    </a>
                </div>
                <img class="single_post_shape" src="<?php echo get_site_url(); ?>/wp-content/themes/t-mobile/assets/img/innovatie.png">
            </div>
