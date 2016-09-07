<?php

// Disable the admin bar
add_filter('show_admin_bar', '__return_false');

// Enable Menus
add_theme_support( 'menus' );

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
  return $classes;
}
add_filter('body_class','custom_body_classes');


// Let's not overload the functions.php file... keep things separate
require_once 'lib/assets.php'; // load the correct assets for cache busting





?>
