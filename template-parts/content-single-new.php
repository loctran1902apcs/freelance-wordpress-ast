<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */
    global $post;
    $args = array( 'numberposts' => 3, 'category_name' => 'tin tức' );
    $related_news = get_posts( $args );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <figure class="hero-image-container">
        <img style="width: 100%; height: 350px; object-fit: cover" src="<?php the_post_thumbnail_url(); ?>" alt="">
    </figure>
    <article class="container">
        <header class="entry-header">
            <?php
                the_title( '<h1 class="entry-title">', '</h1>' );
            ?>
        </header><!-- .entry-header -->
        <div class="entry-content">
            <?php
                the_content( sprintf(
                    wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'airi' ),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    get_the_title()
                ) );
            ?>
        </div><!-- .entry-content -->
        <footer class="entry-footer">

        </footer><!-- .entry-footer -->
    </article>
    <section class="bg-light p-4">
        <h3 class="pt-4">Bài viết liên quan</h3>
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
