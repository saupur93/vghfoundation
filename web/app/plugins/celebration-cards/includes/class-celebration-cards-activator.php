<?php

/**
 * Fired during plugin activation
 *
 * @link       http://yowlu.com/wordpress/celebration-cards
 * @since      1.0.0
 *
 * @package    Celebration_Cards
 * @subpackage Celebration_Cards/includes
 */

global $celebration_cards_db_version;
$celebration_cards_db_version = '1.0';

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Celebration_Cards
 * @subpackage Celebration_Cards/includes
 * @author     Yowlu <info@yowlu.com>
 */
class Celebration_Cards_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

		// create the needed database tables
		$creation_result = self::create_database_tables();

		// if we just created the tables, insert the default values
		if ( $creation_result ) {

			// insert the default values
			self::insert_to_database_tables();

			// set default options
			self::set_default_options();

		}

	}

	/**
	 * Create the needed database tables.
	 *
	 * To init our plugin we need to create some tables that will store some values.
	 *
	 * @since    1.0.0
	 */
	public function create_database_tables() {

		// get the global wordpress database variable
		global $wpdb;
		
		// get the global celebration cards db version
		global $celebration_cards_db_version;

		// create a name for the table
   		$table_name = $wpdb->prefix . "celebration_cards_template";

   		// get the defined charset
   		$charset_collate = $wpdb->get_charset_collate();

   		// declare the query
		$sql =	"CREATE TABLE IF NOT EXISTS $table_name (
  				id mediumint(5) NOT NULL,
  				template mediumint(5) NOT NULL,
  				cover_image varchar(256) NOT NULL,
  				background_image varchar(256) NOT NULL,
  				decoration_image varchar(256) NOT NULL,
  				background_color varchar(64) NOT NULL,
  				text_color varchar(64) NOT NULL,
  				text_font varchar(128) NOT NULL,
  				categoryId mediumint(5) NOT NULL,
  				update_time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
  				UNIQUE KEY id (id)
				) $charset_collate;";

		// call the upgrade file where dbDelta is defined
		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		
		// perform the query
		$creation_result = dbDelta( $sql );

		// create a name for the table
   		$table_name = $wpdb->prefix . "celebration_cards_category";

   		// get the defined charset
   		$charset_collate = $wpdb->get_charset_collate();

   		// declare the query
		$sql =	"CREATE TABLE IF NOT EXISTS $table_name (
  				id mediumint(5) NOT NULL,
  				title varchar(128) NOT NULL,
  				update_time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
  				UNIQUE KEY id (id)
				) $charset_collate;";
		
		// perform the query
		$creation_result2 = dbDelta( $sql );

		// return the result
		return $creation_result && $creation_result2;
	}

	/**
	 * Insert the default values.
	 *
	 * To continue the setup of our plugin we need to insert the default data to the table such as all the images and css properties.
	 *
	 * @since    1.0.0
	 */
	public function insert_to_database_tables() {

		// get the global wordpress database variable
		global $wpdb;

		// create a name for the table
   		$table_name = $wpdb->prefix . "celebration_cards_template";
   		$table_name2 = $wpdb->prefix . "celebration_cards_category";

		// templates array
		$templates_array = array( 1, 3, 4, 3, 1, 2, 1, 1, 5, 1, 1, 4, 2, 1, 1, 4, 2, 3, 5, 1, 2, 1, 7, 6, 6, 6, 8, 7, 6, 7, 7, 6, 3, 2, 1, 1, 1, 3, 2, 5, 2, 1, 1, 1, 1, 1, 7, 6, 6, 1, 4, 1, 2, 1, 4, 6, 7);

		// background images array
		$background_images = array( 1, 0, 2, 0, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 6, 0, 15, 16, 17, 18, 19, 20, 21, 22, 0, 23, 24, 25, 26, 27, 0, 28, 29, 30, 31, 0, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50);

		// decoration images array
		$decoration_images = array( 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 18, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56);

		// background colors array
		$background_colors = array( "#AF3C37", "#BBEDF7", "#FFFFFF", "#98CC96", "#80C7D5", "#FDB940", "#698766", "#AF3C37", "#FFFFFF", "#80C7D5", "#434A54", "#FFFFFF", "#FFFFFF", "#60464B", "#AF3C37", "#FFFFFF", "#434A54", "#BBEDF7", "#434A54", "#DA4453", "#FDB940", "#EFD995", "#FFFFFF", "#434A54", "#FFFFFF", "#FFFFFF", "#FFFFFF", "#FFFFFF", "#AF3C37", "#FFFFFF", "#FFFFFF", "#AF3C37", "#434A54", "#434A54", "#FFFFFF", "#6FAF9E", "#EFD995", "#F2DDC4", "#434A54","#FFFFFF", "#F2DDC4", "#FFFFFF", "#F2DDC4","#FFFFFF", "#D89295","#FFFFFF", "#F4D381" ,"#FFDDDD","#FFFFFF", "#E3CA8F","#FFFFFF","#FFFFFF","#FFFFFF", "#EB9281", "#000000","#FFFFFF","#FFFFFF");

		// text colors array
		$text_colors = array( "#FFFFFF", "#FFFFFF", "#434A54", "#FFFFFF", "#FFFFFF", "#AF3C37", "#FFFFFF", "#FFFFFF", "#434A54", "#FFFFFF", "#FFFFFF", "#434A54", "#AF3C37", "#FFFFFF", "#FFFFFF", "#434A54", "#FFFFFF", "#434A54", "#FFFFFF", "#FFFFFF", "#FFFFFF", "#FFFFFF", "#434A54", "#FFFFFF", "#434A54", "#434A54", "#434A54", "#434A54", "#FFFFFF", "#434A54", "#434A54", "#434A54","#FFFFFF","#FFFFFF","#434A54", "#FFFFFF", "#FFFFFF","#434A54","#FFFFFF","#434A54", "#434A54","#434A54","#434A54","#434A54","#434A54","#434A54","#434A54","#434A54","#434A54","#FFDDDD","#434A54","#434A54", "#FB2151","#FFFFFF","#FFFFFF","#434A54","#434A54");

		// categories titles
		$categories_array = array( "Christmas", "Saint Valentine's Day", "Happy Birthday");

		// loop 2 times as we have 2 categories
		for ( $i = 1; $i < 4; $i++ ) { 

			$wpdb->insert( 
					
					$table_name2, 
					
					array( 
					
						'id' => $i,
						'title' => $categories_array[ $i - 1 ],
						'update_time' => current_time( 'mysql' ), 
					
					) 
				
				);
		}

		// loop 58 times as we have 58 templates
		for ( $i = 1; $i < 58; $i++ ) { 
			
			$wpdb->insert( 
				
				$table_name, 
				
				array( 
				
					'id' => $i,
					'template' => $templates_array[ $i - 1 ],
					'cover_image' => content_url() . '/plugins/celebration-cards/public/images/template' . $i . '.png',
					'background_image' => content_url() . '/plugins/celebration-cards/public/images/templates/sample-img/img_template' . $background_images[ $i - 1 ] . '.png',
					'decoration_image' => content_url() . '/plugins/celebration-cards/public/images/templates/card-decoration/card_decoration' . $decoration_images[ $i - 1 ] . '.png',
					'background_color' => $background_colors[ $i - 1 ],
					'text_color' => $text_colors[ $i - 1 ],
					'text_font' => 'Open Sans Light',
					'categoryId' => ($i < 33) ? 1 : (($i < 50) ? 2 : 3),
					'update_time' => current_time( 'mysql' ), 
				
				) 
			
			);
		
		}		

	}

	/**
	 * Set some default values needed for the correct display of the plugin.
	 *
	 * To init our plugin we need to store some settings.
	 *
	 * @since    1.0.0
	 */
	public function set_default_options() {

		update_option( 'celebration_cards_company_logo', plugins_url() . '/celebration-cards/public/images/company-logo.png' );

	}

}
