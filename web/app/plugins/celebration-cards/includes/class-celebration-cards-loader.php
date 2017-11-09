<?php

/**
 * Register all actions and filters for the plugin
 *
 * @link       http://yowlu.com/wordpress/celebration-cards
 * @since      1.0.0
 *
 * @package    Celebration_Cards
 * @subpackage Celebration_Cards/includes
 */

/**
 * Register all actions and filters for the plugin.
 *
 * Maintain a list of all hooks that are registered throughout
 * the plugin, and register them with the WordPress API. Call the
 * run function to execute the list of actions and filters.
 *
 * @package    Celebration_Cards
 * @subpackage Celebration_Cards/includes
 * @author     Yowlu <info@yowlu.com>
 */
class Celebration_Cards_Loader {

	/**
	 * The array of actions registered with WordPress.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      array    $actions    The actions registered with WordPress to fire when the plugin loads.
	 */
	protected $actions;

	/**
	 * The array of filters registered with WordPress.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      array    $filters    The filters registered with WordPress to fire when the plugin loads.
	 */
	protected $filters;

	/**
	 * Initialize the collections used to maintain the actions and filters.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {

		$this->actions = array();
		$this->filters = array();

	}

	/**
	 * Add a new action to the collection to be registered with WordPress.
	 *
	 * @since    1.0.0
	 * @param    string               $hook             The name of the WordPress action that is being registered.
	 * @param    object               $component        A reference to the instance of the object on which the action is defined.
	 * @param    string               $callback         The name of the function definition on the $component.
	 * @param    int                  $priority         Optional. he priority at which the function should be fired. Default is 10.
	 * @param    int                  $accepted_args    Optional. The number of arguments that should be passed to the $callback. Default is 1.
	 */
	public function add_action( $hook, $component, $callback, $priority = 10, $accepted_args = 1 ) {
		$this->actions = $this->add( $this->actions, $hook, $component, $callback, $priority, $accepted_args );
	}

	/**
	 * Add a new filter to the collection to be registered with WordPress.
	 *
	 * @since    1.0.0
	 * @param    string               $hook             The name of the WordPress filter that is being registered.
	 * @param    object               $component        A reference to the instance of the object on which the filter is defined.
	 * @param    string               $callback         The name of the function definition on the $component.
	 * @param    int                  $priority         Optional. he priority at which the function should be fired. Default is 10.
	 * @param    int                  $accepted_args    Optional. The number of arguments that should be passed to the $callback. Default is 1
	 */
	public function add_filter( $hook, $component, $callback, $priority = 10, $accepted_args = 1 ) {
		$this->filters = $this->add( $this->filters, $hook, $component, $callback, $priority, $accepted_args );
	}

	/**
	 * A utility function that is used to register the actions and hooks into a single
	 * collection.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @param    array                $hooks            The collection of hooks that is being registered (that is, actions or filters).
	 * @param    string               $hook             The name of the WordPress filter that is being registered.
	 * @param    object               $component        A reference to the instance of the object on which the filter is defined.
	 * @param    string               $callback         The name of the function definition on the $component.
	 * @param    int                  $priority         The priority at which the function should be fired.
	 * @param    int                  $accepted_args    The number of arguments that should be passed to the $callback.
	 * @return   array                                  The collection of actions and filters registered with WordPress.
	 */
	private function add( $hooks, $hook, $component, $callback, $priority, $accepted_args ) {

		$hooks[] = array(
			'hook'          => $hook,
			'component'     => $component,
			'callback'      => $callback,
			'priority'      => $priority,
			'accepted_args' => $accepted_args
		);

		return $hooks;

	}

	/**
	 * Register the filters and actions with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run() {

		foreach ( $this->filters as $hook ) {
			add_filter( $hook['hook'], array( $hook['component'], $hook['callback'] ), $hook['priority'], $hook['accepted_args'] );
		}

		foreach ( $this->actions as $hook ) {
			add_action( $hook['hook'], array( $hook['component'], $hook['callback'] ), $hook['priority'], $hook['accepted_args'] );
		}

		// create the admin section
		$this->create_admin_action();

		// add a shortcode
		$this->create_celebration_cards_shortcode();

		// add function on admin initalization.
		add_action('admin_init', array(&$this, 'ink_options_setup'));

		// add function for ajax uploading
		add_action('wp_ajax_celebration_cards_upload_image', array(&$this, 'celebration_cards_upload_image'));

		// add function for ajax uploading
		add_action('wp_ajax_nopriv_celebration_cards_upload_image', array(&$this, 'celebration_cards_upload_image'));

	}

	/**
	 * Create an action to upload image
	 *
	 * @since    1.0.0
	 */
	public function celebration_cards_upload_image() {

       	if ( empty( $_FILES ) ) {
			echo "Error";
			exit();
		}

		$file = wp_upload_bits( $_FILES[ 'file' ][ 'name' ], null, file_get_contents( $_FILES[ 'file' ][ 'tmp_name' ] ) );

		if ( FALSE === $file['error'] ) {
        		
			echo $file[ 'url' ];
      		
      	}
      	else {

      		echo 'error';
      		
      	}

		exit();

	}

	/**
	 * Create an action inside the settings menu
	 *
	 * @since    1.0.0
	 */
	public function create_admin_action() {

		add_action( 'admin_menu', array( $this, 'add_celebration_cards_option' ) );

	}

	/**
	 * Add an options page for the plugin
	 *
	 * @since    1.0.0
	 */
	public function add_celebration_cards_option() {

		add_menu_page( 'Celebration Cards', 'Celebration Cards', 1, 'celebration-cards', array( $this, 'include_admin_page' ) );
	}

	/**
	 * Include the partial file
	 *
	 * @since    1.0.0
	 */
	public function include_admin_page() {

		include( plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/celebration-cards-admin-display.php' );

	}

	/**
	 * Create a shortcode for the celebration cards
	 *
	 * @since    1.0.0
	 */
	public function create_celebration_cards_shortcode() {

		add_shortcode( 'celebration-cards', array( $this, 'celebration_cards_shortcode' ) );

	}

	/**
	 * Handler of the shortcode
	 *
	 * @since    1.0.0
	 */
	public function celebration_cards_shortcode() {

		ob_start();
		include( plugin_dir_path( dirname( __FILE__ ) ) . 'public/partials/celebration-cards-public-display.php' );
    	return ob_get_clean(); 

	}

	/* coded adapted from http://www.inkthemes.com/code-to-integrate-wordpress-media-uploader-in-plugintheme/ */

	// Here it check the pages that we are working on are the ones used by the Media Uploader.
	public function ink_options_setup() {

		global $pagenow;

		if ( 'media-upload.php' == $pagenow || 'async-upload.php' == $pagenow ) {

			// Now we will replace the 'Insert into Post Button inside Thickbox'
			add_filter( 'gettext', array( $this, 'replace_window_text' ), 1, 2);
		
		}
	}

	/*
	* Referer parameter in our script file is for to know from which page we are launching the Media Uploader as we want to change the text "Insert into Post".
	*/
	function replace_window_text( $translated_text, $text ) {
		
		if ( 'Insert into Post' == $text ) {
		
			$referer = strpos( wp_get_referer(), 'media_page' );
	   		
	   		if ( $referer != '' ) {
				
				return __('Upload Image', 'ink');
			
			}
	
		}
		
		return $translated_text;
	
	}

}
