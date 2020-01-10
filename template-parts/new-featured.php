<?php
$image_size = 'thumb-100';
$read = 'Đọc bài';
var_dump($post);
?>

<article class="inner-product bg-light p-5 text-left col-md-12">
    <div class="row">
        <div class="col-sm-4">
            <?php
            the_title( '<h3 class=""><a class="text-dark" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
            ?>
            <p class="text-dark" style="min-height: 60px">Advanced System On a Chip (SOC) radio technology delivers Wi-Fi 6 data rates up to 2.4 Gbps concurrently on both the 2.4 GHz and 5 GHz radios</p>
            <span>
                <i class="fa fa-info-circle text-primary mr-1" aria-hidden="true"></i>
                <a href="<?php echo $post->guid ?>" class="text-primary"><?php echo $read ?></a>
            </span>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-7">
            <?php the_post_thumbnail( $image_size ); ?>
        </div>
    </div>
</article>
