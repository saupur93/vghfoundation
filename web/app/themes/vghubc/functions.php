<?php

// Disable the admin bar
add_filter('show_admin_bar', '__return_false');

// Enable Menus
add_theme_support('menus');

// Enable post Thumbnails
add_theme_support('post-thumbnails', array('post', 'page'));

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




/**
 * get "load more" results in HTML format for JavaScript
 */
function latest_pagination_loop() {
  if ( isset($_GET['jsLoad']) ) {
    include(locate_template('templates/partials/latest-loop.php'));
    die;
  }
}
add_action('parse_request', 'latest_pagination_loop');


/**
 * Get submenu with featured images of pages attached
 */
function menu_featured_images($menu_id, $list_only = false) {
  $output = false;
  if($menu_id){
    global $wpdb, $wp_locale;
    $results = $wpdb->get_results("SELECT p.*
      FROM wp_posts AS p
      LEFT JOIN wp_term_relationships AS tr ON tr.object_id = p.ID
      LEFT JOIN wp_term_taxonomy AS tt ON tt.term_taxonomy_id = tr.term_taxonomy_id
      WHERE p.post_type = 'nav_menu_item'
      AND tt.term_id = $menu_id
      ORDER BY p.menu_order");

    $submenu_items = array();

    if($list_only){
      foreach ($results as $key => $result) {
        $post = get_post(get_post_meta($result->ID, '_menu_item_object_id', true));
        array_push($submenu_items, $post->ID);
      }
    } else {
      foreach ($results as $key => $result) {
        $post = get_post(get_post_meta($result->ID, '_menu_item_object_id', true));
        $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' )[0];
        $link = get_permalink($post->ID);
        $submenu_items[$key] = array(
          'title' => $post->post_title,
          'image' => $featured_image,
          'link' => $link
          );
      }

    }


    $output = $submenu_items;
  }

  return $output;
}



// Let's not overload the functions.php file... keep things separate
require_once 'lib/assets.php'; // load the correct assets for cache busting
require_once 'lib/post_types.php'; // custom post types
require_once 'lib/visual_editor_styles.php'; // additional formatting options for the visual




?>
