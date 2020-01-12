<header id="masthead" class="site-header">
    <div>
<!--        --><?php //get_template_part('template-parts/menus/contact-bar'); ?>
        <div class="header">
            <div class="row p-2">
                <div class="site-branding col-md-2 col-sm-6 col-9 pl-4">
                    <a href="/"><img style="height: 35px; cursor: pointer" src="<?php echo get_theme_file_uri('/images/AST.png')?>" /></a>
                </div><!-- .site-branding -->

                <div class="header-mobile-menu col-md-10 col-sm-6 col-3 pr-4">
                    <button class="mobile-menu-toggle" aria-controls="primary-menu">
                        <span class="mobile-menu-toggle_lines"></span>
                        <span class="sr-only"><?php esc_html_e( 'Toggle mobile menu', 'airi' ); ?></span>
                    </button>
                </div>
                <?php get_template_part('template-parts/menus/mobile-menu'); ?>


                <nav id="site-navigation" class="main-navigation col-md-10">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'menus',
                        'menu_id'        => 'primary-menu',
                    ) );
                    ?>
    <!--                <a href="tel: 0934 122 124"><button class="btn-cta">LIÊN HỆ: 0934 122 124</button></a>-->
                </nav><!-- #site-navigation -->
            </div>
        </div>
    </div>
</header><!-- #masthead -->