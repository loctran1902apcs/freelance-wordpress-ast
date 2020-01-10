<?php
/*
Template Name: Product
*/
get_header();
?>

<?php
    global $post;
    $args = array('category_name' => "sản phẩm" );
    $products = get_posts( $args );
?>

    <div id="primary">
        <main id="main" class="site-main">
            <div id="product-carousel-container" class="carousel-container">
                <?php get_template_part('template-parts/carousel/product-carousel','product-carousel'); ?>
            </div>
            <?php
            if ( have_posts() ) :

                if ( is_home() && ! is_front_page() ) :
                    ?>
                    <header>
                        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                    </header>
                <?php
                endif;
                ?>
                <div class="blog-loop">
                    <div class="container">
                        <?php
                        /* Start the Loop */
                        foreach ( $products as $post ) :
                            setup_postdata($post);
                            /*
                             * Include the Post-Type-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                             */
                            get_template_part( 'template-parts/product-wide');
                        endforeach;
                        ?>
                    </div>
                </div>
                <?php
                the_posts_navigation();
            else :

                get_template_part( 'template-parts/content', 'none' );

            endif;
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();

