<?php

if (empty($args)) return;

$post_id      = $args->ID;
$title        = $args->post_title;
$excerpt      = $args->post_excerpt;
$thumbnail_id = get_post_thumbnail_id($post_id);
$permalink    = get_the_permalink($post_id);
$svg_icon     = get_field('icon', $post_id);

?>
<div class="col-lg-4 mb-4">
    <div class="ilml-service-item">
        <div class="ilml-services-bg" style="background-image: url( '<?php echo wp_get_attachment_image_url($thumbnail_id, ['400', '400']); ?>' ); ">
            <div class="ilml-services-inner">
                <header class="ilml-services-header">
                    <div class="ilml-services-header-inner">
                        <?php echo wp_get_attachment_image($svg_icon, 'full', "", ['class' => 'img-fluid', 'alt' => $title]);
                        echo $title ? sprintf('<h3><a href="%s">%s</a></h3>', $permalink, $title) : ''; ?>
                    </div>
                </header>
                <div class="ilml-services-description">
                    <div class="ilml-services-description-inner">
                        <?php echo wpautop($excerpt); ?>
                    </div>
                </div>
                <a href="<?php echo $permalink; ?>" class="ilml-services-overlay-link">
                    <span class="screen-reader-text">More Info</span>
                </a>
            </div>
        </div>
    </div>
</div>
