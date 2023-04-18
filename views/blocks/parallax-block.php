<?php

if (empty($args)) return;

$block            = $args['block'] ?: [];
$content          = $block['content'];
$img              = $block['background_image'];
$alt              = get_post_meta($img, '_wp_attachment_image_alt', true);
$video_url        = $block['popup_video_url'];
$background_color = $block['background_color'];
$cta_button       = [
    'class' => 'btn btn-white my-4',
    'link'  => $block['cta_button'],
];
$qr_code         = $block['image'];
$qr_alt          = get_post_meta($qr_code, '_wp_attachment_image_alt', true);
?>

<section class="ilml-quote-area pb-100 unillax-container">
    <?php echo wp_get_attachment_image($img, 'full', "", ["class" => "img-fluid unillax-background", 'alt' => $alt]);  ?>
    <div class="container">
        <div class="quote-wrapper ilml-quote-wrapper">
            <?php echo sprintf('<h1>%s</h1>', $content); ?>
            <?php if ($video_url) : ?>
                <a class="video-play-btn vimo12 venobox mt-4 d-block" aria-label="Parallax video play button" href="javascript:void(0)" data-href="<?php echo $video_url; ?>" class="venobox video-icon" data-autoplay="true" data-vbtype="video">
                    <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62">
                        <g fill="none" fill-rule="evenodd" stroke="var(--bs-white)" stroke-width="2" transform="translate(1 1)">
                            <circle cx="30" cy="30" r="30" />
                            <path d="M40.992 30.867l-16.994 9.771a1 1 0 0 1-1.498-.867V20.23a1 1 0 0 1 1.498-.867l16.994 9.771a1 1 0 0 1 0 1.734z" />
                        </g>
                    </svg>
                </a>
            <?php endif; ?>
            <?php locate_template('views/components/cta-primary-btn.php', true, false, $cta_button); ?>
            <?php if ($qr_code) : ?>
                <div class="ilml-img-qr_logo py-3 text-center w-100">
                    <?php echo wp_get_attachment_image($qr_code, ['98', '98'], "", ['alt' => $qr_alt]);  ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="ilml-overlay-bg" style="background: <?php echo $background_color; ?>"></div>
</section>
