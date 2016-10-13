<?php

// Disable the admin bar
add_filter('show_admin_bar', '__return_false');

// Enable Menus
add_theme_support('menus');

// Enable post Thumbnails
//add_theme_support( 'post-thumbnails' );


// Custom Image Sizes
// if ( function_exists( 'add_theme_support' ) ) {
//   add_theme_support('post-thumbnails');
//   add_image_size('inline_full', 800, 534, true);
//   add_image_size('slideshow_thumb', 152, 101, true);
// }


// Custom body classes
function custom_body_classes($classes) {
  is_front_page() ? $classes[] = 'front' : $classes[] = 'not-front';

  if (get_post_type(get_the_ID()) == 'themes_post') {
    $classes[] = 'theme-section-' . sanitize_title(get_the_title(get_the_ID()));
  }

  if (get_post_type(get_the_ID()) == 'signature_events') {
    $classes[] = 'signature-event-' . sanitize_title(get_the_title(get_the_ID()));
  }

  return $classes;
}
add_filter('body_class','custom_body_classes');

// add meta key & meta value to wp json rest
function rest_api_allow_meta_query($valid_vars) {
    $valid_vars[] = 'meta_key';
    $valid_vars[] = 'meta_value';
    $valid_vars[] = 'meta_compare';

    return $valid_vars;
}
add_filter('rest_query_vars', 'rest_api_allow_meta_query');

// Let's not overload the functions.php file... keep things separate
require_once 'lib/assets.php'; // load the correct assets for cache busting
require_once 'lib/post_types.php'; // custom post types
require_once 'lib/visual_editor_styles.php'; // additional formatting options for the visual




?>
