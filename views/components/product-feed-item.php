<?php

use App\Core\Constant;

if (empty($args)) return;

$products       = [];
$listing_type   = $args['listing_type'];

if ($listing_type === 'all') {
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    $_args = [
        'post_type'      => Constant::POSTTYPE_PRODUCT,
        'post_status'    => 'publish',
        'posts_per_page' => 9,
        'paged'          => $paged,
    ];

    $query = new WP_Query($_args);

    $products = $query->posts;
} else {
    $products = array_filter((array)$args['selected_posts']);
}
?>
<?php if ($products) : ?>
    <div class="row">
        <?php foreach ($products as $product) {
            locate_template('views/components/product-card.php', true, false, $product);
        } ?>
    </div>

    <?php if ($listing_type === 'all') {
        ilml_pagination($query->max_num_pages);
        wp_reset_postdata();
    } ?>
<?php endif; ?>
