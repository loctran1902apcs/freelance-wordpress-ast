<div class="container-fluid">
    <div class="row p-md-5">
        <div class="col-sm-6">
            <header class="">
                <h1 class="hero-title "><?php the_title(); ?></h1>
            </header>
            <div class="hero-entry-content">
                <p><?php the_excerpt(); ?></p>
            </div><!-- .hero-entry-content -->
            <footer>
                <a href="https://www.cambiumnetworks.com/where-to-buy/" class="btn-hero-contact mt-2 mr-2">
                    Liên Hệ
                </a><!-- .button -->
                <a class="btn-hero-download mt-2" href="https://cdn.cambiumnetworks.com/wp-content/uploads/2019/11/PTP-850E-Aug-2019-v2.pdf" target="_blank">
                    Tải Datasheet
                </a>
            </footer>
        </div><!-- .hero-alignment-helper -->
        <div class="col-sm-1"></div>
        <div class="col-sm-5 hero-image-container">
            <img style="width: 100%" src="<?php the_post_thumbnail_url(); ?>" alt="">  <!-- the_post_thumbnail( 'product-feature' ); -->
        </div><!-- .hero-image-container -->
    </div>
</div>