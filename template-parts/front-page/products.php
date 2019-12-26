<?php
    global $post;
    $args = array( 'numberposts' => 10, 'category_name' => 'san-pham' );
    $posts = get_posts( $args );
    $image_size = 'thumb-h350';
    $link_text = 'Xem thông số';
    $link_contact = 'Liên hệ';
    $phone = 'tel: 0934 122 124';
?>

<div class="front-products bg-white pb-5">
    <div class="container pt-5 pb-3">
        <h2 class="h1">
            Sản phẩm nổi bật
        </h2>
    </div>

    <div class="container-fluid">
        <?php
            foreach( $posts as $key=>$post ):?>
                <?php
                    if ($key%2 == 0):?>
                        <div class="row">
                            <div class="col-md-6 p-2">
                                <article class="inner-product bg-light p-5 text-center">
                                    <?php
                                    the_title( '<h2 class=""><a class="text-dark" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                                    ?>
                                    <p class="text-dark" style="min-height: 60px">Advanced System On a Chip (SOC) radio technology delivers Wi-Fi 6 data rates up to 2.4 Gbps concurrently on both the 2.4 GHz and 5 GHz radios</p>
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
                    <?php else: ?>
                            <div class="col-md-6 p-2">
                                <article class="inner-product bg-light p-5 text-center">
                                    <?php
                                        the_title( '<h2><a class="text-dark" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                                    ?>
                                    <p class="text-dark" style="min-height: 60px">Advanced System On a Chip (SOC) radio technology delivers Wi-Fi 6 data rates up to 2.4 Gbps concurrently on both the 2.4 GHz and 5 GHz radios</p>
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
                        </div>
                    <?php endif; ?>
                <?php
            endforeach;
            ?>
    </div>
</div>