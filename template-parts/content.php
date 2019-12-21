<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Airi
 */

$layout 		= airi_blog_layout();
$read_more 		= get_theme_mod( 'read_more_text', __( 'Read more', 'airi' ) );
$hide_thumb 	= get_theme_mod( 'index_hide_thumb' );
$hide_date 		= get_theme_mod( 'index_hide_date' );
$hide_cats 		= get_theme_mod( 'index_hide_cats' );
$hide_author 	= get_theme_mod( 'index_hide_author' );
$hide_comments 	= get_theme_mod( 'index_hide_comments' );
?>
<article class="inner-product bg-white p-3">
    <h2 class="h2">
        <?php
        the_title( '<h2 class=""><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        ?>
    </h2>
    <h3 class="h5">Advanced System On a Chip (SOC) radio technology delivers Wi-Fi 6 data rates up to 2.4 Gbps concurrently on both the 2.4 GHz and 5 GHz radios</h3>
    <?php airi_post_thumbnail(); ?>
    <a href="<?php echo $post->post_name ?>" class="text-primary">Xem thông tin</a>
</article>
