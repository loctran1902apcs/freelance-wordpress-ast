<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Airi
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <?php get_template_part( 'template-parts/front-page/home', 'none' ); ?>

        <!--START CONTACT SECTION -->
        <section class="bg-light mt-lg-5 pb-5">
            <div class="container pt-5">
                <div class="mt-5">
                    <?php get_template_part('template-parts/contact'); ?>
                </div>
            </div>
        </section>
    </div><!-- #primary -->

<?php
get_footer();
