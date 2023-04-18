<?php

if (empty($args)) return;

$post_type    = $args['post_type'];
$post_listing = [
   'listing_type'   => $args['listing_type'],
   'selected_posts' => $args['select_posts'],
];

locate_template("views/components/{$post_type}-feed-item.php",true,false,$post_listing);
