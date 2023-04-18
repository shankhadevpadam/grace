<?php
/**
 * Flexible Blocks
 */


if (!$args) {
  $flexible_blocks = get_field('page_builder');
} else {
  $flexible_blocks = $args;
}

if ($flexible_blocks) :
  foreach ($flexible_blocks as $index => $block) {
    $layout = $block['acf_fc_layout'];

    dump($layout);

    if ($layout == 'services_block') {
      locate_template('views/blocks/services-block.php', true, false, ['block' => $block]);
    }

    if ($layout == 'stories_block') {
      locate_template('views/blocks/stories-block.php', true, false, ['block' => $block]);
    }

    if ($layout == '2_x_width_block') {
      locate_template('views/blocks/two-x-half-width-block.php', true, false, ['block' => $block]);
    }

    // if ($layout == 'parallax_block') {
    //   locate_template('views/blocks/parallax-block.php', true, false, ['block' => $block]);
    // }

    // if ($layout == 'carousel_gallery_block') {
    //   locate_template('views/blocks/carousel-gallery-block.php', true, false, ['block' => $block]);
    // }

    // if ($layout == 'packages_block') {
    //   locate_template('views/blocks/packages-block.php', true, false, ['block' => $block]);
    // }

    // if ($layout == 'gallery_block') {
    //   locate_template('views/blocks/gallery-block.php', true, false, ['block' => $block]);
    // }

    // if ($layout == 'wysiwyg_editor_block') {
    //   locate_template('views/blocks/wysiwyg-editor-block.php', true, false, ['block' => $block]);
    // }

    // if ($layout == 'two_half_width_block') {
    //   locate_template('views/blocks/two-half-width-block.php', true, false, ['block' => $block]);
    // }

    // if ($layout == 'repeater_block') {
    //   locate_template('views/blocks/repeater-block.php', true, false, ['block' => $block]);
    // }



    // if ($layout == 'contact_form_block') {
    //   locate_template('views/blocks/contact-form-block.php', true, false, ['block' => $block]);
    // }

    // if ($layout == 'google_map_block') {
    //   locate_template('views/blocks/google-map-block.php', true, false, ['block' => $block]);
    // }

    // if ($layout == 'care_credit_block') {
    //   locate_template('views/blocks/care-credit-block.php', true, false, ['block' => $block]);
    // }

    // if ($layout == 'two_half_width_parallax_block') {
    //   locate_template('views/blocks/two-half-width-parallax-block.php', true, false, ['block' => $block]);
    // }

  }
endif;
