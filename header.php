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
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <?php wp_head(); ?>
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
                echo '<div class="container">';
                echo 	'<div class="row">';
            }
		}
	?>