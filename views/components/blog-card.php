<?php

if (empty($args)) return;
$post_id         = $args->ID;
$title           = $args->post_title;
$excerpt         = $args->post_excerpt;
$thumbnail_id    = get_post_thumbnail_id($post_id);
$alt             = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true) ?: $title;
$permalink       = get_the_permalink($post_id);
$author_id       = $args->post_author;
$author_name     = get_the_author_meta('display_name', $author_id);
$comments_count  = get_comments_number($post_id);
$post_date       = get_the_date('d', $post_id);
$post_month      = get_the_date('M', $post_id);
$category        = get_the_category($post_id);
$category_name   = !empty($category) ? esc_html($category[0]->name) : '';
$content         = $args->post_content;
$trimmed_content = substr($content, 0, 150);
$last_space      = strrpos($trimmed_content, ' ');
$video_url       = get_field('video_url', $post_id);

?>
<div class="col-lg-4 col-md-6">
    <div class="blog-wrapper mb-5 mb-lg-4">
        <div class="post-image-with-overlay">
            <figure class="post-image-wrapper">
                <a href="<?php echo $permalink; ?>">
                    <?php if ($video_url) : ?>
                        <span class="ilml-video-icon"> <!-- Only add icon if post contains video -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62">
                                <g fill="rgb(206 60 95 / 16%)" fill-rule="evenodd" stroke="var(--bs-white)" stroke-width="2" transform="translate(1 1)">
                                    <circle cx="30" cy="30" r="30" />
                                    <path d="M40.992 30.867l-16.994 9.771a1 1 0 0 1-1.498-.867V20.23a1 1 0 0 1 1.498-.867l16.994 9.771a1 1 0 0 1 0 1.734z" />
                                </g>
                            </svg>
                        </span>
                    <?php endif; ?>
                    <?php echo wp_get_attachment_image($thumbnail_id, ['420', '350'], "", ["class" => "img-fluid rounded", 'alt' => $alt]);  ?>
                </a>
            </figure>
            <div class="post-overlay-wrap">
                <div class="blog-title">
                    <a class="badge bg-primary text-white mb-2" href="#"><?php echo $category_name; ?></a>
                    <h5 class="post-title"><a href="<?php echo $permalink; ?>" title="<?php echo $title; ?>"><?php echo $title; ?></a></h5>
                </div>
            </div>
            <div class="date-overlay-wrap">
                <span class="overlay-date"><?php echo $post_date; ?></span>
                <span class="overlay-month"><?php echo $post_month; ?></span>
            </div>
        </div>
        <div class="post-info-wrap">
            <ul class="nav post-top-meta mb-3">
                <li class="post-author"><i class="bi bi-person text-primary me-1"></i><?php echo $author_name; ?></li>
            </ul>
            <div class="post-excerpt mb-4">
                <?php echo $trimmed_content . '...'; ?>
            </div>
            <ul class="nav post-bottom-meta">
                <li class="post-read-more"><a class="btn btn-primary" href="<?php echo $permalink; ?>">Read More</a></li>
            </ul>
        </div>
    </div>
</div>
