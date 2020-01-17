<?php
$intro_contents = get_field("intro_contents");
$heading = "Giới thiệu ASTEK";
$description = "Chuyên cung cấp giải pháp WIFI cho các doanh nghiệp. Được thành lập từ năm 2014";
?>

<div class="front-products bg-white pb-5">
    <div class="container pt-5 pb-3 text-center" data-aos="zoom-in">
        <h2 class="h1">
            <?php echo $heading ?>
        </h2>
        <h4 class="h4" style="font-weight: normal; width: 60%; margin: auto"> <?php echo $description ?> </h4>
    </div>
    <div class="container-fluid" >
        <div class="row pt-5" data-aos="fade-down" data-aos-easing="ease-out-cubic" data-aos-duration="500" data-aos-delay="650">
            <?php
                foreach ($intro_contents as $content): ?>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 item">
                        <div class="intro-item-image" style="background-image: url(<?php echo $content["image_url"] ?>)">
                            <div class="intro-item-heading"><?php echo $content["heading"] ?></div>
                        </div>
                        <div class="item-group">
                            <h5 class="pt-2" style="font-weight: normal"><?php echo $content["description"] ?></h5>
                        </div>
                    </div>
            <?php
                endforeach;
            ?>
        </div>
    </div>
</div>