<?php
dump($args);
if (empty($args)) return;

$block   = $args['block'] ?: [];
$stories = array_filter((array)$block['stories']);

if (empty($stories)) return;
?>
<section class="section home-stories py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="owl-carousel stories-carousel">
                    <?php foreach ($stories as $index => $story) :
                        $video_url = getSrcOembed('video_url', $story->ID);
                        //dump($video_url);
                    ?>
                        <div class="item">
                            <div class="row align-items-center story-block d-flex w-100">
                                <div class="col-lg-6">
                                    <div class="stories-content-wrapper">
                                        <span>Stores #<?php echo $index + 1; ?></span>
                                        <a href="<?php echo get_the_permalink($story->ID); ?>" class="story-heading">
                                            <h1><?php echo $story->post_title; ?></h1>
                                        </a>
                                        <?php echo wpautop($story->post_content); ?>
                                        <a href="<?php echo get_the_permalink($story->ID); ?>" class="btn btn-primary text-white px-4">Watch</a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="video-thumbnail-stories-wrapper">
                                        <?php echo get_the_post_thumbnail($story->ID, ['625', '425'], ['class' => 'img-fluid', 'alt' => altImg($story->ID, $story->post_title)]); ?>
                                        <?php if ($video_url) : ?>
                                            <a href="javascript:void(0)" data-href="<?php echo $video_url;?>" class="venobox video-icon" data-autoplay="true" data-vbtype="video">
                                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/play-icon.svg" alt="">
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
