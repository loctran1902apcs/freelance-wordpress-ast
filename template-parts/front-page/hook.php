<?php
    $hook = get_field("hook");
    $contact = get_field("hook_contact");
?>

<div class="hook-wrapper" style="background-image: url(<?php echo $hook["image"] ?>)">
    <div class="hook-content p-3">
        <div class="">
            <h1 class="text-white"><?php echo $hook["title"] ?></h1>
            <h2 class="text-white pl-4 pr-4"><?php echo $hook["description"] ?></h2>
            <a href="tel: <?php echo $contact["mobile"] ?>"><button class="btn-cta mt-4">LIÊN HỆ: <?php echo $contact["mobile"] ?></button></a>
        </div>
    </div>
    <div class="hook-overlay"></div>
</div>