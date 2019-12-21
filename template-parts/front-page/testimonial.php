<?php
    $frontpage_id = get_option( 'page_on_front' );
    $testimonial = get_field( "testimonial",$frontpage_id );
    $customer_1 = get_field("customer_1",$frontpage_id);
    $customer_2 = get_field("customer_2",$frontpage_id);
    $customer_3 = get_field("customer_3",$frontpage_id);
?>

<div class="mt-5 front-certificate">
    <div class="container">
        <h1 class="pt-5 h1">Cảm nhận khách hàng</h1>
        <div class="row">
            <?php
                foreach($testimonial as $customer) {
                    ?>
                    <div class="testimonial-wrapper">
                        <div class="testimonial-content"><?php echo $customer["comment"]; ?></div>
                        <div class="testimonial-meta">
                            <div class="testimonial-meta-inner">
                                <div class="testimonial-image">
                                    <img src="<?php echo $customer["image_url"];?>">
                                </div>
                                <div class="testimonial-details">
                                    <div class="testimonial-name"><?php echo $customer["name"]; ?></div>
                                    <div class="testimonial-job">Designer</div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
            ?>
        </div>
    </div>
</div>