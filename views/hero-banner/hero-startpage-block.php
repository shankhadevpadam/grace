<?php

/**
 * Hero Startpage Block Template.
 *
 */

// Background
$video        = get_field('banner_video');

// Content
$hero_content = get_field('banner_content');
$heading      = !empty($hero_content['Headline']) ? $hero_content['Headline'] : '';
$cta          = [
    'class' => 'btn btn-primary text-white py-3 px-4 fw-bold',
    'link'  => !empty($hero_content) ? $hero_content['CTA'] : null,
];
?>
<section class="home-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="banner-content">
                    <h1 class="mb-4"><?php echo $heading; ?></h1>
                    <?php locate_template('views/components/cta-primary-btn.php', true, false, $cta); ?>
                </div>
            </div>
        </div>
    </div>
    <?php if ($video) { ?>
        <div class="ratio ratio-16x9 banner-videos">
            <iframe src="<?php echo esc_url($video);?>?h=cb47d00ad8&autoplay=1&loop=1&muted=1&title=0&byline=0&portrait=0" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
        </div>
    <?php } ?>
</section>
