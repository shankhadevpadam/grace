<?php

if (empty($args)) return;

$post_id      = $args->ID;
$title        = $args->post_title;
$content      = $args->post_content;
$thumbnail_id = get_post_thumbnail_id($post_id);
$alt          = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true) ?: $title;
$price        = get_field('price',$post_id);

?>

<div class="col-xl-3 col-lg-4 col-sm-6">
    <div class="ilml-product-block">
        <div class="ilml-product-thumbnail mb-3">
            <?php echo wp_get_attachment_image($thumbnail_id, ['306', '230'], "", ["class" => "img-fluid", 'alt' => $alt]);  ?>
            <!-- <span class="ilml-tag-discount d-flex align-items-center justify-content-center">-15%</span> -->
            <div class="ilml-product-icons-links">
                <ul>
                    <li>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#ilml-popup-product-<?php echo $post_id;?>">
                            <span><i class="bi bi-eye"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="ilml-product-text">
            <h4 data-bs-toggle="modal" data-bs-target="#ilml-popup-product-<?php echo $post_id;?>"><?php echo $title; ?></h4>
            <p class="ilml-price-wrapper d-flex align-items-end gap-2">
                <!-- <span class="ilml-price-old">$115</span> -->
                <span class="ilml-price"><?php echo $price;?></span>
            </p>
        </div>
    </div>
</div>
<div class="modal fade ilml-popup-wrapper ilml-popup-product-wrapper" id="ilml-popup-product-<?php echo $post_id;?>" tabindex="-1" aria-labelledby="ilml-popupproductlabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body ilml-popup-body">
                <span class="ilml-btn-close" data-bs-dismiss="modal">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/icon-close.svg" alt="img-fluid">
                </span>
                <div class="ilml-popup-content">
                    <div class="ilml-img-product-wrapper">
                    <?php echo wp_get_attachment_image($thumbnail_id, ['595', '250'], "", ["class" => "img-fluid", 'alt' => $alt]);  ?>
                    </div>
                    <div class="ilml-desc-product-wrapper px-3 py-4">
                        <p class="ilml-price-wrapper d-flex align-items-end gap-2">
                            <!-- <span class="ilml-price-old">$115</span> -->
                            <span class="ilml-product-price"><?php echo $price;?></span>
                        </p>
                        <h1><?php echo $title;?></h1>
                        <?php echo $content;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
