<?php
if (empty($args['link'])) return;

$class       = $args['class'];
$link_url    = $args['link']['url'];
$link_title  = $args['link']['title'];
$link_target = $args['link']['target'] ? $args['link']['target'] : '_self';
?>
<a class="<?php echo $class;?>" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
