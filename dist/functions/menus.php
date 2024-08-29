<?php

namespace j2digital;

function default_footer_links_menu() {
  echo '<li><a href="/privacy">' . __('Privacy Policy', 'j2digital') . '</a></li>';
}

function default_header_nav_menu() {
  echo '<li><a href="/">' . __('Home', 'j2digital') . '</a></li>';
}

function default_header_cta_menu() {
  echo '<li><a href="#">' . __('Get In Touch', 'j2digital') . '</a></li>';
}

function footer_links_menu() {
  wp_nav_menu([
    'container' => '',
    'fallback_cb' => __NAMESPACE__ . '\default_footer_links_menu',
    'items_wrap' => '%3$s',
    'theme_location' => 'footer-links-menu'
  ]);
}

function header_nav_menu() {
  wp_nav_menu([
    'container' => '',
    'fallback_cb' => __NAMESPACE__ . '\default_header_nav_menu',
    'items_wrap' => '%3$s',
    'theme_location' => 'header-nav-menu'
  ]);
}

function header_cta_menu() {
  wp_nav_menu([
    'container' => '',
    'fallback_cb' => __NAMESPACE__ . '\default_header_cta_menu',
    'items_wrap' => '%3$s',
    'theme_location' => 'header-cta-menu'
  ]);
}

function menu_classes($classes, $item, $args) {
  $new_classes = [];

  if (in_array('current_page_item', $classes)) {
    $new_classes[] = 'active';
  }

  return $new_classes;
}

add_filter('nav_menu_css_class', __NAMESPACE__ . '\menu_classes', 1, 3);
add_filter('nav_menu_item_id', '__return_false');

register_nav_menus([
  'footer-links-menu' => __('Footer Links Menu', 'j2digital'),
  'header-nav-menu' => __('Header Nav Menu', 'j2digital'),
  'header-cta-menu' => __('Header CTA Menu', 'j2digital')
]);

?>
