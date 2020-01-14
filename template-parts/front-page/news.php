<?php
    global $post;
    $args = array( 'numberposts' => 3, 'category_name' => 'tin tức' );
    $news = get_posts( $args );
    $heading = "Bài viết";
?>

<div class="front-products bg-white pb-5">
    <div class="container pt-5 pb-3 text-center">
        <h2 class="h1">
            <?php echo $heading ?>
        </h2>
    </div>

    <div class="container">
        <div class="d-flex flex-wrap">
            <?php
            /* Start the Loop */
            foreach ( $news as $post ) : ?>
                <div class="col-md-4 p-4">
                    <?php setup_postdata($post);
                    get_template_part( 'template-parts/new');?>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>