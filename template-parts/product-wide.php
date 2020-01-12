<?php
    $image_size = 'thumb-100';
    $link_text = 'Xem chi tiết';
    $link_contact = 'Liên hệ';
    $phone = 'tel: 0934 122 124';
?>

<article class="inner-product bg-light p-5 text-left col-md-12">
    <div class="row">
        <div class="col-sm-6">
<!--            --><?php
//            the_title( '<h3 class=""><a class="text-dark" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
//            ?>
            <h3><?php the_title() ?></h3>
            <p class="text-dark" style="min-height: 60px"><?php echo get_the_excerpt(); ?></p>
            <span>
                <i class="fa fa-info-circle text-primary mr-1" aria-hidden="true"></i>
                <a href="<?php echo $post->post_name ?>" class="text-primary"><?php echo $link_text ?></a>
            </span>
            <span class="ml-3">
                <i class="fa fa-phone text-primary mr-1" aria-hidden="true"></i>
                <a href="<?php echo $phone ?>" class="text-primary"><?php echo $link_contact ?></a>
            </span>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
            <?php the_post_thumbnail( $image_size ); ?>
        </div>
    </div>
</article>
