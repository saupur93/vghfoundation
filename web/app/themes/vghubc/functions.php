<?php

// Disable the admin bar
add_filter('show_admin_bar', '__return_false');

// Enable Menus
add_theme_support('menus');

// Enable post Thumbnails
add_theme_support('post-thumbnails', array('post', 'page', 'themes_post', 'signature_events'));


// Give Editor role access to Theme Options (but can not switch, edit or install themes),
// Menus, Background, Widgets and Custom Headers.
$role_object = get_role( 'editor' );
$role_object->add_cap( 'edit_theme_options' );

// Redirection Plugin Editor access
add_filter( 'redirection_role', 'redirection_to_editor' );
function redirection_to_editor() {
  return 'edit_pages';
}

function get_donor_segment($attrs) {
  global $wpdb;

  $table2 = $wpdb->prefix."donor_list";
  if (empty($attrs["secondary-category"])) {
    $result = $wpdb->get_results( "SELECT * FROM wp_donor_list WHERE primary_category = '".$attrs['primary-category']."'");
  } else {
    $result = $wpdb->get_results( "SELECT * FROM wp_donor_list WHERE primary_category = '".$attrs['primary-category']."' AND secondary_category = '".$attrs['secondary-category']."'");
  }

  if(empty($attrs['layout'])) {
    foreach ( $result as $print )   {
      $name_honouree2 = $print->donor_name;
      $name[] = "<p class='small'>".$name_honouree2."</p>";
    }

    return (implode($name));
  } else {
       $col1[] = "<div class='col-half'>";
       $col2[] = "<div class='col-half'>";
       $i = 0;
      foreach ( $result as $print )   {
        $name_honouree2 = $print->donor_name;
        if ($i <= ( count($result) / 2 )) {
          $col1[] = "<p class='small'>".$name_honouree2."</p>";
        } else {
          $col2[] = "<p class='small'>".$name_honouree2."</p>";
        }
        $i++;
      }
      $col1[] = "</div>";
      $col2[] = "</div>";

    return (implode($col1).implode($col2));
  }
}

add_shortcode('donorSegment', 'get_donor_segment');



// Custom Image Sizes
if ( function_exists( 'add_theme_support' ) ) {
  add_image_size('related_thumb', 200, 200, true);
  add_image_size('slideshow_thumb', 152, 101, true);
}

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
    // $classes[] = 'theme-section-' . sanitize_title(get_the_title(get_the_ID()));
    $classes[] = 'theme-section-' . get_post(get_the_ID())->post_name;


  }

  if (get_post_type(get_the_ID()) == 'signature_events') {
    $classes[] = 'signature-event-' . preg_replace("/\-+\d+$/", "", get_post(get_the_ID())-> post_name);
  }

  // if its parent is the About section, but not Annual Report page
  if (menu_is_child_of(38) && get_the_ID() != 20259) {
    $classes[] = 'subnavigation-visible';
  }

  return $classes;
}
add_filter('body_class','custom_body_classes');



?>
