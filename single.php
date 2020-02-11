<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */
get_header();
?>

	<div id="primary" class="content-area">
        <main id="main" class="site-main">
		<?php
		while ( have_posts() ) : the_post();
		    $category = array_shift(get_the_category($post->ID));
			if ( $category->name == "sản phẩm" ) :
                get_template_part( 'template-parts/content-single', 'product' );
            else:
                get_template_part( 'template-parts/content-single', 'new');
            endif;
//            the_post_navigation();
        endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
