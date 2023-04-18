<?php

use App\Core\Constant;

if (empty($args)) return;

$team           = [];
$listing_type   = $args['listing_type'];

if ($listing_type === 'all') {
    $_args = [
        'post_type'      => Constant::POSTTYPE_TEAM,
        'post_status'    => 'publish',
        'posts_per_page' => 20,
    ];
    $team = get_posts($_args);
} else {
    $team = array_filter((array)$args['selected_posts']);
}

?>
<?php if ($team) : ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="owl-carousel owl-theme" id="team-carousel">
                <?php foreach ($team as $_team) {
                    locate_template('views/components/team-card.php', true, false, $_team);
                } ?>
            </div>
        </div>
    </div>
<?php endif; ?>
