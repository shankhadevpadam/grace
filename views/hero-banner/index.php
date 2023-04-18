<?php
$is_front_page = is_front_page();
$is_home       = is_home();

if ($is_front_page === true) {
    locate_template('views/hero-banner/hero-startpage-block.php', true, false);
} else {
    locate_template('views/hero-banner/page-banner-block.php', true, false);
}
