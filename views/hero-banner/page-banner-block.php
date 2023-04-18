<?php

/**
 * Page banner Block Template.
 *
 */

$is_home        = is_home();
$page_for_posts = get_option('page_for_posts');
$page_id        = $is_home === true ? $page_for_posts : get_the_ID();
$title          = get_the_title($page_id);
$img_id         = get_post_thumbnail_id($page_id);
$alt            = get_post_meta($img_id, '_wp_attachment_image_alt', true) ?: $title;

?>

<section class="common-inner-heading">
    <?php echo wp_get_attachment_image($img_id, 'full', "", ["class" => "img-fluid", 'alt' => $alt]);  ?>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-12">
                <div class="header-content text-center">
                    <?php echo sprintf('<h1>%s</h1>', $title);

                    if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb(' <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                        <div class="breadcrumb mb-0">', ' </div>
                        </nav>');
                    }; ?>
                </div>
            </div>
        </div>
    </div>
</section>
