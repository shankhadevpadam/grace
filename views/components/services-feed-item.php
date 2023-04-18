<?php

use App\Core\Constant;

if (empty($args)) return;

$services       = [];
$listing_type   = $args['listing_type'];

if ($listing_type === 'all') {
    $_args = [
        'post_type'      => Constant::POSTTYPE_SERVICE,
        'post_status'    => 'publish',
        'posts_per_page' => -1,
    ];
    $services = get_posts($_args);
} else {
    $services = array_filter((array)$args['selected_posts']);
}

?>
<?php if ($services) : ?>
    <div class="row">
        <?php foreach ($services as $service) {
            locate_template('views/components/service-card.php', true, false, $service);
        } ?>
    </div>
<?php endif; ?>
