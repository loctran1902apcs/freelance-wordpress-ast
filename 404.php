<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Airi
 */

get_header();
$text = "Khoong tìm thấy nội dung";
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( '404', 'airi' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
                    <h2><?php echo $text ?></h2>
                    <button class="btn-back">Quay lại trang chủ</button>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
