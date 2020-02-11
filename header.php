<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Airi
 */

?>
<?php
 $title = get_the_title();
 $SAN_PHAM_TITLE = "SẢN PHẨM";
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <?php wp_head(); ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-158089609-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-158089609-1');
    </script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'airi' ); ?></a>

	<?php get_template_part( 'template-parts/menus/menu' );
        if (is_front_page()) {
            echo '<div>';
        } else if (is_home()){
            echo '<div>';
        } else {
            echo '<div id="content" class="site-content">';
        }
	?>

	<?php
		if ( !is_page_template( 'page-templates/template_page-builder.php') ) {
		    if (is_front_page()) {
                echo '<div class="front-container">';
                echo '<div class="">';
            } else if (is_home()){
                echo '<div class="front-container">';
                echo '<div id="page-products" class="">';
            } else {
                echo '<div class="">';
                echo '<div class="">';
                if ( function_exists('yoast_breadcrumb') )
                { ?>
<!--                    <nav aria-label="breadcrumb">-->
<!--                      <ol class="breadcrumb">-->
<!--                    --><?php
//                        yoast_breadcrumb('<li id="breadcrumb-item" class="breadcrumb-item"> ','</p>'); ?>
<!--                    </ol>-->
<!--                    </nav>-->
                <?php }
            }
		}
	?>