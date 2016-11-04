<?php

// Disable the admin bar
add_filter('show_admin_bar', '__return_false');

// Enable Menus
add_theme_support('menus');

// Enable post Thumbnails
add_theme_support('post-thumbnails', array('post', 'page', 'themes_post'));

// Custom Image Sizes
// if ( function_exists( 'add_theme_support' ) ) {
//   add_theme_support('post-thumbnails');
//   add_image_size('inline_full', 800, 534, true);
//   add_image_size('slideshow_thumb', 152, 101, true);
// }

// Let's not overload the functions.php file... keep things separate
require_once 'lib/assets.php'; // load the correct assets for cache busting
require_once 'lib/post_types.php'; // custom post types
require_once 'lib/visual_editor_styles.php'; // additional formatting options for the visual
require_once 'lib/custom.php'; // custom helper theme function

// Options page for global fields
if(function_exists('acf_add_options_page')) {
  acf_add_options_page();
}

// Custom body classes
function custom_body_classes($classes) {
  is_front_page() ? $classes[] = 'front' : $classes[] = 'not-front';

  if (get_post_type(get_the_ID()) == 'themes_post') {
    $classes[] = 'theme-section-' . sanitize_title(get_the_title(get_the_ID()));
  }

  if (get_post_type(get_the_ID()) == 'signature_events') {
    $classes[] = 'signature-event-' . sanitize_title(get_the_title(get_the_ID()));
  }

  // if its parent is the About section, but not Annual Report page
  if (menu_is_child_of(38) && get_the_ID() != 20259) {
    $classes[] = 'subnavigation-visible';
  }

  return $classes;
}
add_filter('body_class','custom_body_classes');



?>
