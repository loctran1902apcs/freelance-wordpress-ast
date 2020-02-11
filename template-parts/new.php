<?php

//var_dump(truncate_description($excerpt,$max_length));
?>

<?php
$image_size = 'thumb-h200-cover';
$read = 'Đọc bài';
$max_length = 100;
$excerpt = get_the_excerpt();
$description = substr($excerpt,0,100);
//var_dump($excerpt[100]);
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
            <p class="text-dark" style="min-height: 60px"><?php echo $description ?>...</p>
            <span>
                <i class="fa fa-eye text-primary mr-1" aria-hidden="true"></i>
                <a href="<?php echo $post->guid ?>" class="text-primary"><?php echo $read ?></a>
            </span>
        </div>
    </div>
</article>
