<?php

if (empty($args)) return;

$social_links  = [];
$post_id       = $args->ID;
$title         = $args->post_title;
$excerpt       = $args->post_excerpt;
$thumbnail_id  = get_post_thumbnail_id($post_id);
$permalink     = get_the_permalink($post_id);
$svg_icon      = get_field('icon', $post_id);
$designation   = get_field('designation', $post_id);
$social_medias = array_filter((array)get_field('social_media', $post_id));

?>
<div class="item">
    <div class="ilml-team-bx ">
        <div class="ilml-media">
            <?php echo wp_get_attachment_image($thumbnail_id, ['310', '320'], "", ['class' => 'img-fluid', 'alt' => $title]); ?>
            <div class="ilml-social-icon text-center">
                <?php if ($social_medias) : ?>
                    <ul>
                        <?php foreach ($social_medias['social_links'] as $link) {
                            $data = [
                                'icon' => $link['icon'],
                                'url'  => $link['url'],
                            ];
                            locate_template('views/components/social-media.php', true, false, $data);
                        }
                        ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
        <div class="ilml-info">
            <h5 class="name"><?php echo $title; ?></h5>
            <?php echo $designation ? sprintf('<h6 class="position">%s</h6>', $designation) : ''; ?>
        </div>
    </div>
</div>
