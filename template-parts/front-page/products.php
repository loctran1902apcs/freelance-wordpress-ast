<?php
    global $post;
    $args = array( 'numberposts' => 10, 'category_name' => 'san-pham' );
    $posts = get_posts( $args );
    foreach($posts as $post) {
        var_dump($post);
    }
?>

<div class="front-products bg-light pb-5">
    <div class="container">
        <div class="pt-5 pb-3 h1">Sản phẩm nổi bật</div>
        <?php
            foreach( $posts as $key=>$post ):?>
                <?php
                    if ($key%2 == 0):?>
                        <div class="row">
                            <div class="col-md-6 p-3">
                                <article class="inner-product bg-white p-3">
                                    <h2 class="h2">
                                        <?php
                                            the_title( '<h2 class=""><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                                        ?>
                                    </h2>
                                    <h3 class="h5">Advanced System On a Chip (SOC) radio technology delivers Wi-Fi 6 data rates up to 2.4 Gbps concurrently on both the 2.4 GHz and 5 GHz radios</h3>
                                    <?php airi_post_thumbnail(); ?>
<!--                                    <img class="hook-image" src="--><?php //echo get_theme_file_uri('/images/AP250.png')?><!--" />-->
                                    <a href="<?php echo $post->post_name ?>" class="text-primary">Xem thông tin</a>
                                </article>
                            </div>
                    <?php else: ?>
                            <div class="col-md-6 p-3">
                                <div class="inner-product bg-white p-3">
                                    <?php
                                        the_title( '<h2 class=""><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                                    ?>
                                    <h3 class="h5">Advanced System On a Chip (SOC) radio technology delivers Wi-Fi 6 data rates up to 2.4 Gbps concurrently on both the 2.4 GHz and 5 GHz radios</h3>
                                    <?php airi_post_thumbnail(); ?>
                                    <a href="<?php echo $post->post_name ?>" class="text-primary">Xem thông tin</a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php
            endforeach;
            ?>
    </div>
</div>