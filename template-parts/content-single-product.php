<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Airi
 */
global $post;
$args = array( 'numberposts' => 3, 'category_name' => 'tin tức' );
$args_products = array( 'numberposts' => 4, 'category_name' => 'sản phẩm' );
$related_news = get_posts( $args );
$related_products = get_post( $args_products );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <!--generate page / post header-->
    <section class="hero-section">
        <?php get_template_part("template-parts/article/hero-content"); ?>
    </section>

    <section class="container">
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
    </section>
    <?php
        $related = get_posts( array( 'category_name' => 'sản phẩm', 'numberposts' => 3, 'post__not_in' => array($post->ID) ) );
    ?>
    <section class="bg-light pt-4 pb-4">
        <h3 class="pl-4 pt-4">Sản phẩm nổi bật</h3>
        <div class="d-flex flex-wrap">
            <?php
            /* Start the Loop */
            foreach ( $related as $post ) : ?>
                <div class="col-md-4 p-4" data-aos="fade-down" data-aos-easing="ease-out-cubic" data-aos-duration="400" data-aos-delay="550">
                    <?php setup_postdata($post);
                    get_template_part( 'template-parts/product-featured');?>
                </div>
            <?php
                wp_reset_postdata();
                endforeach;
            ?>
        </div>
    </section>
    <section class="bg-light pt-4 pb-4">
        <h3 class="pl-4 pt-4">Tin tức nổi bật</h3>
        <div class="d-flex flex-wrap">
            <?php
            /* Start the Loop */
            foreach ( $related_news as $post ) : ?>
                <div class="col-md-4 p-4" data-aos="fade-down" data-aos-easing="ease-out-cubic" data-aos-duration="400" data-aos-delay="550">
                    <?php setup_postdata($post);
                    get_template_part( 'template-parts/new');?>
                </div>
            <?php endforeach;?>
        </div>
    </section>
</article><!-- #post-<?php the_ID(); ?> -->
