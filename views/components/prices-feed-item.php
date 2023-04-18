<?php

use App\Core\Constant;

if (empty($args)) return;

$prices       = [];
$listing_type   = $args['listing_type'];

if ($listing_type === 'all') {
    $_args = [
        'post_type'      => Constant::POSTTYPE_SERVICE_PRICE,
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'fields'         => 'ids',
    ];
    $prices = get_posts($_args);
} else {
    $prices = array_filter((array)$args['selected_posts']);
}

?>

<?php if ($prices) : ?>
    <div class="row">
        <?php foreach ($prices as $price) {
            locate_template('views/components/service-price-card.php', true, false, $price);
        } ?>
    </div>
<?php endif;
