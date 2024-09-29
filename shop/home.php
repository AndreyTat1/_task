<?php
    /*
        Template Name: home
    */
?>
<?php get_header();?>
    <body>
        <main>
        <section class="articles">
        <h2>Статьи</h2>
        <div class="article-list">
            <?php
            global $post;
            $myposts = get_posts([
                'numberposts' => 3,
                'category_name' => 'статьи',
            ]);
            if( $myposts ) {
                foreach( $myposts as $post ) {  
                    setup_postdata( $post );
            ?>
            <div class="article">
                <?php the_post_thumbnail(array(391, 185)); ?>
                <a href="<?php echo esc_url(get_permalink()); ?>" style="text-decoration: none; color: inherit;">
                <h3><?php the_title(); ?></h3>
                <span><?php the_content(); ?></span>
                </a>
                <p class="post-date"><?php echo get_the_date(); ?></p>
            </div>
            <?php
                }
            }
            wp_reset_postdata();
            ?>
        </div>
        </section>
            <section class="services">
                <h2>Услуги</h2>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                    <?php
                        global $post;
                        $myposts = get_posts([
                            'numberposts' => 4,
                            'category_name' => 'слайдер',
                        ]);
                        if( $myposts ){
                            echo '<div class="swiper-container">';
                            echo '<div class="swiper-wrapper">'; 
                            foreach( $myposts as $post ){
                                setup_postdata( $post );
                                ?>
                                <div class="swiper-slide" style="position: relative;">
                                <?php the_post_thumbnail(array(285,185)); ?>
                                <div style="position: absolute; top: 12px;">
                                <?php
                                $tags = get_the_tags( $post->ID );
                                if ( $tags && ! is_wp_error( $tags ) ) {
                                    foreach ( $tags as $tag ) {
                                        echo '<div class="product-label">' . esc_html( $tag->name ) . '</div>';
                                    }
                                }
                    ?>
                    </div>
                    <div class="border">
                        <?php
                            $custom_link = get_post_meta($post->ID, 'custom_link', true);
                        ?>
                        <a href="<?php echo esc_url($custom_link); ?>" style="text-decoration: none; color: inherit;">
                        <h3><?php the_title(); ?></h3>
                        </a>
                        </div>
                        <span><?php the_content(); ?></span>
                    </div>
                    <?php
                            }
                            echo '</div>'; 
                            echo '<div class="swiper-pagination"></div>';
                            echo '</div>'; 
                            wp_reset_postdata();
                            } else {
                                echo '<p>No posts found.</p>';
                            }
                        ?>
                        </div>
                    </div>
            </section>
        </main>
    </body>
<?php get_footer();?>

