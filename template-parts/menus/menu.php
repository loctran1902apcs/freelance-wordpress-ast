<?php
/**
 * Template part for Menu
 *
 * @package Airi
 */
?>

<header id="masthead" class="site-header">

    <div class="<?php echo esc_attr( airi_menu_container() ); ?>">
        <div class="row">
            <div class="site-branding col-md-4 col-sm-6 col-9">
                <a href="/"><img style="height: 35px; cursor: pointer" src="<?php echo get_theme_file_uri('/images/AST.png')?>" /></a>
            </div><!-- .site-branding -->

            <div class="header-mobile-menu col-md-8 col-sm-6 col-3">
                <button class="mobile-menu-toggle" aria-controls="primary-menu">
                    <span class="mobile-menu-toggle_lines"></span>
                    <span class="sr-only"><?php esc_html_e( 'Toggle mobile menu', 'airi' ); ?></span>
                </button>
            </div>

            <nav id="site-navigation" class="main-navigation col-md-8">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'menu-3',
                    'menu_id'        => 'primary-menu',
                ) );
                ?>
            </nav><!-- #site-navigation -->
        </div>
    </div>
    <div class="header-search-form">
        <?php get_search_form(); ?>
    </div>

</header><!-- #masthead -->