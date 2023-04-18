<?php

if (empty($args)) return;

$post_id       = $args;
$title         = get_the_title($post_id);
$short_intro   = get_field('short_introduction', $post_id);
$services_includes = get_field('service_includes', $post_id);

?>
<div class="col-lg-4 mb-4">
    <div class="ilml-price-block">
        <div class="ilml-price-heading">
            <h1><?php echo $title; ?></h1>
            <?php echo wpautop($short_intro); ?>
        </div>
        <?php if ($services_includes) : ?>
            <div class="ilml-price-list">
                <ul>
                    <?php foreach ($services_includes as $service) : ?>
                        <li><a href="#"><span class="ilml-price-title"><?php echo $service['service_name'];?></span><span class="ilml-price-unit"><?php echo $service['price'];?></span></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>
</div>
