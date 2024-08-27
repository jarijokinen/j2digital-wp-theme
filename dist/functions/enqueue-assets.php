<?php

namespace j2digital;

function enqueue_assets() {
  $css = get_theme_file_uri('css/main.css') . '?1724798008656';
  wp_enqueue_style(__NAMESPACE__, $css, [], null);

  $js = get_theme_file_uri('js/main.js');
  wp_enqueue_script(__NAMESPACE__, $js, null, '1724798008656', true);
}

add_action('wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_assets');

?>
