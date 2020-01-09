<?php
/*
Template Name: Product
*/
get_header();
?>
    <div id="primary" class="content-area <?php echo esc_attr( $layout['type'] ); ?> <?php echo esc_attr( $layout['cols'] ); ?>">
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
                <div class="blog-loop" <?php echo airi_masonry_data(); ?>>
                    <div class="row m-5">

                        <?php
                        /* Start the Loop */
                        while ( have_posts() ) :
                            the_post();
                            /*
                             * Include the Post-Type-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                             */
                            get_template_part( 'template-parts/content', get_post_type() );
                        endwhile;
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
if ( $layout['sidebar'] ) {
    get_sidebar();
}
get_footer();
