<?php

/*
 *	Plugin Name: VGH & UBC Hospital Foundation Luminate Plugin
 *	Plugin URI:
 *	Description: Provides shortcodes to help us bring in newsletter sign up forms.
 *	Version: 1.0
 *	Author: VGH & UBC Hospital Foundation
 *	Author URI: https://github.com/VGHUBCHospitalFoundation
 *	License: GPL2
 *
*/

/* Assign global variables
 *
*/

$plugin_url = WP_PLUGIN_URL . '/vgh-luminate';
$options = array();

/* Add links to the admin area
 *
*/

function vgh_ubc_luminate_menu() {
   /*
    * Use the add_options_page function
    * add_options_page( $page_title, $menu_title, $capability, $menu-slug, $function )
   */

   add_options_page(
     'VGH & UBC Hospital Foundation Luminate Plugin',
     'Luminate Forms',
     'manage_options',
     'vgh-luminate',
     'vgh_ubc_luminate_options_page'
   );
}
add_action( 'admin_menu', 'vgh_ubc_luminate_menu' );

function vgh_ubc_luminate_options_page() {
  if( !current_user_can( 'manage_options') ) {
    wp_die( 'You do not have sufficient permission to access this page');
  }

  global $plugin_url;
  global $options;

  if( isset( $_POST['nonsecure_luminate_url_form_submitted'] ) ) {
    $hidden_field = esc_html( $_POST['nonsecure_luminate_url_form_submitted'] );

    if( $hidden_field == 'Y' ) {
      $nonsecure_luminate_url = esc_html( $_POST['nonsecure_luminate_url'] );
      $secure_luminate_url = esc_html( $_POST['secure_luminate_url'] );
      $luminate_api_key = esc_html( $_POST['luminate_api_key'] );

      if(!empty($secure_luminate_url)) {
        $options['secure_luminate_url'] = $secure_luminate_url;
      }
      if(!empty($luminate_api_key)) {
        $options['luminate_api_key'] = $luminate_api_key;
      }
      if(!empty($nonsecure_luminate_url)) {
        $options['nonsecure_luminate_url'] = $nonsecure_luminate_url;
      }

      $options['last_updated']         = time();

      update_option( 'vgh_luminate', $options );
    }
  }

  $options = get_option( 'vgh_luminate' );

  if( $options != '' ) {
    $luminate_api_key = $options['luminate_api_key'];
    $secure_luminate_url = $options['secure_luminate_url'];
    $nonsecure_luminate_url = $options['nonsecure_luminate_url'];
  }
  require( 'inc/options-page-wrapper.php' );

}

function vgh_ubc_luminate_shortcode( $atts, $content = null ) {
  global $post;

  // making these default fallbacks rather than hardcoding
  if(empty($atts['form_id'])) {
    $atts['form_id'] = '1432';
  }
  if(empty($atts['js_callback'])) {
    $atts['js_callback'] = 'submitSurveyCallback';
  }
  if(empty($atts['form_class'])) {
    $atts['form_class'] = 'survey-form';
  }
  if(empty($atts['submit_text'])) {
    $atts['submit_text'] = 'Sign Me Up';
  }
  

  $options = get_option( 'vgh_luminate' );
  $luminate_api_key = $options['luminate_api_key'];
  $secure_luminate_url = $options['secure_luminate_url'];
  $nonsecure_luminate_url = $options['nonsecure_luminate_url'];

  ob_start();
  require( 'inc/front-end.php' );
  $content = ob_get_clean();
  return $content;

}
add_shortcode( 'luminate_form', 'vgh_ubc_luminate_shortcode' );

function vgh_ubc_luminate_frontend_scripts_and_styles() {
  wp_enqueue_style( 'vgh_luminate_frontend_css', plugins_url( 'vgh-luminate/vgh-luminate.css' ) );
  wp_enqueue_script( 'luminate_frontend_js', plugins_url( 'vgh-luminate/inc/luminateExtend.min.js' ), array('jquery'), '', true );
  wp_enqueue_script( 'vgh_luminate_frontend_js', plugins_url( 'vgh-luminate/vgh-luminate.js' ), array('jquery'), '', true );
}

add_action( 'wp_enqueue_scripts', 'vgh_ubc_luminate_frontend_scripts_and_styles' );
?>
