<?php
    $image_size = 'thumb-100';
    $link_text = 'Xem chi tiết';
    $link_contact = 'Liên hệ';
    $phone = 'tel: 0934 122 124';
?>

<article class="inner-product bg-light p-5 text-center col-md-3">
    <?php
    the_title( '<h3 class=""><a class="text-dark" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
    ?>
    <p class="text-dark" style="min-height: 60px">Advanced System On a Chip (SOC) radio technology delivers Wi-Fi 6 data rates up to 2.4 Gbps concurrently on both the 2.4 GHz and 5 GHz radios</p>
    <div>
        <span>
            <i class="fa fa-info-circle text-primary mr-1" aria-hidden="true"></i>
            <a href="<?php echo $post->post_name ?>" class="text-primary"><?php echo $link_text ?></a>
        </span>
        <span class="ml-4">
            <i class="fa fa-phone text-primary mr-1" aria-hidden="true"></i>
            <a href="<?php echo $phone ?>" class="text-primary"><?php echo $link_contact ?></a>
        </span>
    </div>
    <div class="mt-5">
        <?php the_post_thumbnail( $image_size ); ?>
    </div>
</article>
