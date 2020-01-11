<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Airi
 */
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
</article><!-- #post-<?php the_ID(); ?> -->
