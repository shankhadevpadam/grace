<?php
$icon = $args["icon"] ?: "";
$url =  $args["url"] ?: '#';
?>
<li>
<a target="_blank" aria-label="<?php echo $icon;?>" href="<?php echo esc_url($url);?>">
        <i class="bi bi-<?php echo $icon;?>"></i>
    </a>
</li>
