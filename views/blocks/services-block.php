<?php

if (empty($args)) return;

$block        = $args['block'] ?: [];
$heading      = $block['heading'];
$introduction = $block['introduction'];
$services     = $block['services'];
?>
<section class="services py-5 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="common-heading">
                    <?php echo sprintf('<h1>%s</h1>', $heading); ?>
                    <?php echo $introduction; ?>
                </div>
            </div>
        </div>
        <?php if ($services) : ?>
            <div class="row home-services justify-content-center mt-5">
                <?php foreach ($services as $service) :
                ?>
                    <div class="col-6 col-sm-3">
                        <a href="<?php echo $service['service_link']; ?>">
                            <div class="icon">
                                <?php echo wp_get_attachment_image($service['service_icon'], 'full', "", ["class" => "default", 'alt' => altImg($service['service_icon'], $service['service_name'])]);  ?>
                                <?php echo wp_get_attachment_image($service['service_icon_hover'], 'full', "", ["class" => "hover", 'alt' => altImg($service['service_icon'], $service['service_name'])]);  ?>
                            </div>
                            <?php echo sprintf('<h4>%s</h4>', $service['service_name']); ?>
                            <?php echo $service['short_introduction'];?>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
