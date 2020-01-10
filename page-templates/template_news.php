<?php
/*
Template Name: News
*/
get_header();
?>

<?php
global $post;
$args = array('category_name' => "tin tức" );
$news = get_posts( $args );
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
                <div class="container">
                    <div class="d-flex flex-wrap">
                        <?php
                        /* Start the Loop */
                        foreach ( $news as $post ) : ?>
                            <div class="col-md-4 p-4">
                                <?php setup_postdata($post);
                                get_template_part( 'template-parts/new');?>
                            </div>
                        <?php endforeach;?>
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

