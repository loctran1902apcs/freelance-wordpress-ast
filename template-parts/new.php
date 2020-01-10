<?php
$image_size = 'thumb-h200-cover';
$read = 'Đọc bài';
?>

<article class="inner-product p-2 text-left">
    <div class="">
        <div class="">
            <?php the_post_thumbnail( $image_size ); ?>
        </div>
        <div class="">
            <?php
            the_title( '<h2 class="h4"><a class="text-dark" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
            ?>
            <p class="text-dark" style="min-height: 60px">Advanced System On a Chip (SOC) radio technology delivers Wi-Fi 6 data rates up to 2.4 Gbps concurrently on both the 2.4 GHz and 5 GHz radios</p>
            <span>
                <i class="fa fa-eye text-primary mr-1" aria-hidden="true"></i>
                <a href="<?php echo $post->guid ?>" class="text-primary"><?php echo $read ?></a>
            </span>
        </div>
    </div>
</article>
