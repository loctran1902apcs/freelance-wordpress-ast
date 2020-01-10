<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Airi
 */

get_header();
?>

	<div id="primary" class="content-area">
        <main id="main" class="site-main">
		<?php
		while ( have_posts() ) : the_post();

//			if ( 'layout-default' == $single_layout )
//			{
//				get_template_part( 'template-parts/content', 'single' );
//			}
//			elseif ( 'layout-2' == $single_layout )
//			{
//				get_template_part( 'template-parts/content-single', '2' );
//			}
//			elseif ( 'layout-3' == $single_layout )
//			{
//				get_template_part( 'template-parts/content-single', '3' );
//			}
            get_template_part( 'template-parts/content', 'single' );
			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
//			if ( comments_open() || get_comments_number() ) :
//				comments_template();
//			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
