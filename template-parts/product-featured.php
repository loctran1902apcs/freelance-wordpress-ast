<?php
$image_size = 'thumb-100';
$link_text = 'Xem thông số';
$link_contact = 'Liên hệ';
?>
<article class="inner-product bg-white p-3 text-center">
    <?php
    the_title( '<h2 class=""><a class="text-dark" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
    ?>
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