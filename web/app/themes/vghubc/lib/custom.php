<?php

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

/**
 * Check if current page is child of (subnav) a given ID page in menus
 */
function menu_is_child_of($id) {
   global $post;
   $children = get_pages( array( 'child_of' => $id ) );
   $count = 0;
   foreach ($children as $key => $child) {
     if(isset($post->ID) && $child->ID == $post->ID) $count++;
   }

   if ( is_page() && ($post->post_parent || $count > 0  ) && $post->ID != $id) {
    return true;
   } else {
    return false;
   }

}

/**
 * Create class from title sentence string
 */
function create_my_class($url){
    # Prep string with some basic normalization
    $url = strtolower($url);
    $url = strip_tags($url);
    $url = stripslashes($url);
    $url = html_entity_decode($url);

    # Remove quotes (can't, etc.)
    $url = str_replace('\'', '', $url);

    # Replace non-alpha numeric with hyphens
    $url = preg_replace('/[^A-Za-z0-9-]+/', '-', $url);

    return $url;
}