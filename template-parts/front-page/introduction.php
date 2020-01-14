<?php
global $post;
$args = array( 'numberposts' => 10, 'category_name' => 'san-pham' );
$posts = get_posts( $args );
$image_size = 'thumb-h350';
$link_text = 'Xem thông số';
$link_contact = 'Liên hệ';
$phone = 'tel: 0934 122 124';
$featured_products = get_field("featured_products");
$heading = "Giới thiệu ASTEK";
$description = "Chuyên cung cấp giải pháp WIFI cho các doanh nghiệp. Được thành lập từ năm 2014"
?>

<div class="front-products bg-white pb-5">
    <div class="container pt-5 pb-3 text-center">
        <h2 class="h1">
            <?php echo $heading ?>
        </h2>
        <h4 class="h4" style="font-weight: normal; width: 60%; margin: auto"> <?php echo $description ?> </h4>
    </div>

    <div class="container-fluid">
        <div class="row pt-5">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 item">
                <div class="intro-item-image" style="background-image: url(https://images.unsplash.com/photo-1563884705074-7c8b15f16295?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1001&q=80)">
                    <div class="intro-item-heading">Distribution</div>
                </div>
                <div class="item-group">
                    <h5 class="pt-2" style="font-weight: normal">Nhập khẩu và cung cấp tb wifi, license</h5>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 item">
                <div class="intro-item-image" style="background-image: url(https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60)">
                    <div class="intro-item-heading">Customer</div>
                </div>
                <div class="item-group">
                    <h5 class="pt-2" style="font-weight: normal">Khách hàng và đối tác là các công ty uy tín</h5>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 item">
                <div class="intro-item-image" style="background-image: url(https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60)">
                    <div class="intro-item-heading">Qualification</div>
                </div>
                <div class="item-group">
                    <h5 class="pt-2" style="font-weight: normal">Đầy đủ chứng nhận của cục viễn thông, bảo hành</h5>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 item">
                <div class="intro-item-image" style="background-image: url(https://images.unsplash.com/photo-1566576721346-d4a3b4eaeb55?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60)">
                    <div class="intro-item-heading">Delivery</div>
                </div>
                <div class="item-group">
                    <h5 class="pt-2" style="font-weight: normal">Giao hàng toàn quốc</h5>
                </div>
            </div>
        </div>
    </div>
</div>