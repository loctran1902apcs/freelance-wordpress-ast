<?php
/*
Template Name: Contact
*/

get_header();
wp_reset_query();
$contact = get_field("hook_contact");
$array = array_values($contact);
var_dump($array);
$address = $array[1];
$heading = "Liên Hệ";
$description = "Liên hệ ngay với chúng tôi để được tư vấn hoàn toàn miễn phí";
?>
    <div class="bg-light pt-lg-5">
        <div class="container pt-5 pb-3 text-center mb-5" data-aos="zoom-in">
            <h2 class="h1">
                <?php echo $heading ?>
            </h2>
            <h4 class="h4" style="font-weight: normal; width: 60%; margin: auto"> <?php echo $description ?> </h4>
        </div>
        <div id="primary" class="content-area fullwidth col-md-12">
            <main id="main" class="site-main" role="main" data-aos="fade-down" data-aos-easing="ease-out-cubic" data-aos-duration="500" data-aos-delay="650">
                <div class="row">
                    <div class="col-md-6">
                        <div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=71%2F30%20%C4%90i%E1%BB%87n%20bi%C3%AAn%20ph%E1%BB%A7%20ph%C6%B0%E1%BB%9Dng%2015%20qu%E1%BA%ADn%20b%C3%ACnh%20th%E1%BA%A1nh+(ASTEK)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/coordinates.html">find my location</a>
                            </iframe>
                        </div><br />
                    </div>
                    <div class="col-md-6 pl-5">
                        <h3 class="h4">Thông tin liên hệ</h3>
                        <p class="pt-xs sub-text"><strong>Địa chỉ: </strong> <?php echo $address ?></p>
                        <p class="pt-xs sub-text"><strong>Số điện thoại: </strong><?php echo $contact["mobile"] ?> - <a href="tel: <?php echo $contact["mobile"] ?>">GỌI ĐIỆN</a></p>
                        <p class="pt-xs sub-text"><strong>Email: </strong><?php echo $contact["email"] ?> - <a href="mailto: <?php echo $contact["email"] ?>"> GỬI MAIL</a></p>
                    </div>
                </div>
            </main><!-- #main -->
        </div>
    </div>
<?php
get_footer();
