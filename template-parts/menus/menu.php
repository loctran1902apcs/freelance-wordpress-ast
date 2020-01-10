<header id="masthead" class="site-header">

    <div class="container">
        <div class="row">
            <div class="site-branding col-md-2 col-sm-6 col-9">
                <a href="/"><img style="height: 35px; cursor: pointer" src="<?php echo get_theme_file_uri('/images/AST.png')?>" /></a>
            </div><!-- .site-branding -->

            <div class="header-mobile-menu col-md-8 col-sm-6 col-3">
                <button class="mobile-menu-toggle" aria-controls="primary-menu">
                    <span class="mobile-menu-toggle_lines"></span>
                    <span class="sr-only"><?php esc_html_e( 'Toggle mobile menu', 'airi' ); ?></span>
                </button>
            </div>

            <nav id="site-navigation" class="main-navigation col-md-10">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'menus',
                    'menu_id'        => 'primary-menu',
                ) );
                ?>
                <a href="tel: 0934 122 124"><button class="btn-cta">LIÊN HỆ: 0934 122 124</button></a>
            </nav><!-- #site-navigation -->
        </div>
    </div>
    <div class="header-search-form">
        <?php get_search_form(); ?>
    </div>

</header><!-- #masthead -->