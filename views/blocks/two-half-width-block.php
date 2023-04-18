<?php

if (empty($args)) return;

$block               = $args['block'] ?: [];

// Left Block
$left_block          = $block['left_block'];
$left_content_type   = $left_block['choose_content_type'];
$left_img            = $left_block['image'];
$left_video_url      = $left_block['video_url'];
$left_block_heading  = $left_block['heading'];
$left_block_editor   = $left_block['wysiwyg_editor'];

// Right Block
$right_block         = $block['right_block'];
$right_content_type  = $right_block['choose_content_type'];
$right_img           = $right_block['image'];
$right_video_url     = $right_block['video_url'];
$right_block_heading = $right_block['heading'];
$right_block_editor  = $right_block['wysiwyg_editor'];
?>

<section class="ilml-section ilml-about ilml-about-main">
    <div class="container">
        <div class="row align-items-center">
            <?php if ($left_content_type == 'img') : ?>
                <div class="col-lg-6">
                    <?php if ($left_img) :
                        $alt = get_post_meta($left_img, '_wp_attachment_image_alt', true);
                    ?>
                        <div class="ilml-about-img-wrapper ilml-img-with-video text-center">
                            <?php echo wp_get_attachment_image($left_img, ['650', '350'], "", ["class" => "img-fluid", 'alt' => $alt]);  ?>
                            <?php if ($left_video_url ):?>
                            <div class="ilml-about-trigger ilml-video-trigger d-flex align-items-center flex-column gap-3 mt-4">
                                <a class="video-play-btn vimo12 venobox" aria-label="Video Play Button" href="javascript:void(0)" data-href="<?php echo $left_vide_url;?>" class="venobox video-icon" data-autoplay="true" data-vbtype="video">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62">
                                        <g fill="none" fill-rule="evenodd" stroke="var(--bs-white)" stroke-width="2" transform="translate(1 1)">
                                            <circle cx="30" cy="30" r="30" />
                                            <path d="M40.992 30.867l-16.994 9.771a1 1 0 0 1-1.498-.867V20.23a1 1 0 0 1 1.498-.867l16.994 9.771a1 1 0 0 1 0 1.734z" />
                                        </g>
                                    </svg>
                                </a>
                                <p class="ilml-video-label">Watch Video</p>
                            </div>
                            <?php endif;?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php else : ?>
                <div class="col-lg-6 ps-lg-4 mt-4 mt-lg-0">
                    <div class="ilml-about-wrapper">
                        <?php echo $left_block_heading ? sprintf('<h3 class="ilml-title">%s</h3>', $left_block_heading) : ''; ?>
                        <?php echo $left_block_editor; ?>
                        <span class="dots-body"></span>
                    </div>
                </div>
            <?php endif; ?>

            <?php if ($right_content_type == 'editor') : ?>
                <div class="col-lg-6 ps-lg-4 mt-4 mt-lg-0">
                    <div class="ilml-about-wrapper">
                        <?php echo $right_block_heading ? sprintf('<h3 class="ilml-title">%s</h3>', $right_block_heading) : ''; ?>
                        <?php echo $right_block_editor; ?>
                        <span class="dots-body"></span>
                    </div>
                </div>
            <?php else : ?>
                <div class="col-lg-6">
                    <?php if ($right_img) :
                        $alt = get_post_meta($right_img, '_wp_attachment_image_alt', true);
                    ?>
                        <div class="ilml-about-img-wrapper ilml-img-with-video text-center">
                            <?php echo wp_get_attachment_image($right_img, ['650', '350'], "", ["class" => "img-fluid", 'alt' => $alt]);  ?>
                            <?php if ($right_video_url) :?>
                            <div class="ilml-about-trigger ilml-video-trigger d-flex align-items-center flex-column gap-3 mt-4">
                                <a class="video-play-btn vimo12 venobox" aria-label="Video Play Button 2" href="javascript:void(0)" data-href="<?php echo $right_video_url;?>" class="venobox video-icon" data-autoplay="true" data-vbtype="video">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62">
                                        <g fill="none" fill-rule="evenodd" stroke="var(--bs-white)" stroke-width="2" transform="translate(1 1)">
                                            <circle cx="30" cy="30" r="30" />
                                            <path d="M40.992 30.867l-16.994 9.771a1 1 0 0 1-1.498-.867V20.23a1 1 0 0 1 1.498-.867l16.994 9.771a1 1 0 0 1 0 1.734z" />
                                        </g>
                                    </svg>
                                </a>
                                <p class="ilml-video-label">Watch Video</p>
                            </div>
                            <?php endif;?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
