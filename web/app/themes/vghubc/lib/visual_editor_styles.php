<?php

function vgh_add_editor_styles() {
    add_editor_style( 'tce-editor-style.css' );
}
add_action( 'admin_init', 'vgh_add_editor_styles' );

// // Callback function to insert 'styleselect' into the $buttons array
function my_mce_buttons_2( $buttons ) {
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}
// Register our callback to the appropriate filter
add_filter('mce_buttons_2', 'my_mce_buttons_2');


// add some additional classes to the editor
function my_mce_before_init( $settings ) {

    $style_formats = array(
      array(
        'title' => 'Intro Paragraph',
        'selector' => 'p',
        'classes' => 'intro'
      ),
      array(
        'title' => 'Button',
        'selector' => 'a',
        'classes' => 'button'
      ),
      array(
        'title' => 'Read more link',
        'selector' => 'a',
        'classes' => 'read-more'
      ),
      array(
        'title' => 'Small Text',
        'selector' => 'p',
        'classes' => 'small'
      ),
      array(
        'title' => '-> Arrow Link',
        'selector' => 'a',
        'classes' => 'arrow-link'
      ),


        );

    $settings['style_formats'] = json_encode( $style_formats );

    unset($settings['preview_styles']);

    return $settings;

}
add_filter( 'tiny_mce_before_init', 'my_mce_before_init' );


// stop TinyMCE from stripping <i> for Font Awesome
function add_mce_markup( $initArray ) {
    $ext = 'i[id|name|class|style]';
    if ( isset( $initArray['extended_valid_elements'] ) ) {
        $initArray['extended_valid_elements'] .= ',' . $ext;
    } else {
        $initArray['extended_valid_elements'] = $ext;
    }
    return $initArray;
}
add_filter( 'tiny_mce_before_init', 'add_mce_markup' );