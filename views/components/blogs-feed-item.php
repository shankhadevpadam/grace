<?php

if (empty($args)) return;

$blog           = [];
$listing_type   = $args['listing_type'];

if ($listing_type === 'all') {
    $_args = [
        'post_type'      => 'post',
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'ASC',
        'posts_per_page' => -1,
    ];
    $blog = get_posts($_args);
} else {
    $blog = array_filter((array)$args['selected_posts']);
}

?>
<?php if ($blog) : ?>

    <div class="row">
        <?php foreach ($blog as $_post) {
            locate_template('views/components/blog-card.php', true, false, $_post);
        }
        ?>
    </div>
    <div class="row">
        <div class="col-lg-12 text-center mt-5">
            <a href="<?php echo esc_url(home_url('/blogs/')); ?>" class="btn btn-primary btn-large">View More Blogs</a>
        </div>
    </div>
<?php endif; ?>
