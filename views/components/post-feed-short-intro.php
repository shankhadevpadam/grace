<?php
if (empty($args)) return;

$headline           = $args['headline'];
$short_introduction = $args['short_introduction'];
$extra_class        = $args['extra_class'] ?? '';

if ($headline || $short_introduction) : ?>
	<div class="row">
    <div class="col-lg-12">
        <div class="ilml-common-title <?php echo $extra_class;?>">
            <?php echo $headline ? '<h3>'.$headline.'</h3>' : '';?>
            <?php echo $short_introduction ? '<h2>'.$short_introduction.'</h2>' : '';?>
        </div>
    </div>
    </div>
<?php endif; ?>
