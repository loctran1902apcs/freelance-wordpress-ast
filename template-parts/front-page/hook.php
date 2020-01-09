<?php
    $hook = get_field("hook");
?>

<div class="hook-wrapper" style="background-image: url(<?php echo $hook["image"] ?>)">
    <div class="hook-content">
        <div class="">
            <h1 class="text-white"><?php echo $hook["title"] ?></h1>
            <h2 class="text-white"><?php echo $hook["description"] ?></h2>
            <a href="tel: 0934 122 124"><button class="btn-dark mt-4">LIÊN HỆ: 0934 122 124</button></a>
        </div>
    </div>
    <div class="hook-overlay"></div>
</div>