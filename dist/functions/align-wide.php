<?php

namespace j2digital;

function align_wide() {
  add_theme_support( 'align-wide' );
}

add_action('after_setup_theme', __NAMESPACE__ . '\align_wide');

?>
