<?php
    global $post;
    $args = array( 'numberposts' => 10, 'category_name' => 'san-pham' );
    $posts = get_posts( $args );
    $image_size = 'thumb-h350';
    $link_text = 'Xem thông số';
    $link_contact = 'Liên hệ';
    $phone = 'tel: 0934 122 124';
    $featured_products = get_field("featured_products");
?>

<div class="front-products bg-white pb-5">
    <div class="container pt-5 pb-3 text-center">
        <h2 class="h1" data-aos="zoom-in">
            Sản phẩm nổi bật
        </h2>
    </div>

    <div class="container-fluid">
        <div class="row">
        <?php
            foreach( $featured_products as $post ):?>
            <div class="col-md-6 p-2" data-aos="fade-down" data-aos-easing="ease-out-cubic" data-aos-duration="500" data-aos-delay="650">
                <article class="inner-product bg-light p-5 text-center">
                    <?php
                        the_title( '<h2 class=""><a class="text-dark" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                    ?>
                    <p class="text-dark mt-3" style="min-height: 60px">
                        <?php echo get_the_excerpt(); ?>
                    </p>
                    <div>
                        <span>
                            <i class="fa fa-table text-primary mr-1" aria-hidden="true"></i>
                            <a href="<?php echo $post->post_name ?>" class="text-primary"><?php echo $link_text ?></a>
                        </span>
                        <span class="ml-4">
                            <i class="fa fa-phone text-primary mr-1" aria-hidden="true"></i>
                            <a href="<?php echo $phone ?>" class="text-primary"><?php echo $link_contact ?></a>
                        </span>
                    </div>
                    <?php the_post_thumbnail( $image_size ); ?>
                </article>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>