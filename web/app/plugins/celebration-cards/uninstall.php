<?php

/**
 * Fired when the plugin is uninstalled.
 *
 * When populating this file, consider the following flow
 * of control:
 *
 * - This method should be static
 * - Check if the $_REQUEST content actually is the plugin name
 * - Run an admin referrer check to make sure it goes through authentication
 * - Verify the output of $_GET makes sense
 * - Repeat with other user roles. Best directly by using the links/query string parameters.
 * - Repeat things for multisite. Once for a single site in the network, once sitewide.
 *
 * This file may be updated more in future version of the Boilerplate; however, this is the
 * general skeleton and outline for how the file should work.
 *
 * For more information, see the following discussion:
 * https://github.com/tommcfarlin/WordPress-Plugin-Boilerplate/pull/123#issuecomment-28541913
 *
 * @link       http://yowlu.com/wordpress/celebration-cards
 * @since      1.0.0
 *
 * @package    Celebration_Cards
 */

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

// delete db version stored option
delete_option('celebration_cards_db_version');

// delete all plugin options
delete_option('celebration_cards_company_logo');

// get the global wordpress database variable
global $wpdb;

// get the names of the tables
$table_name = $wpdb->prefix . "celebration_cards_template";
$table_name2 = $wpdb->prefix . "celebration_cards_category";

// delete the tables
$wpdb->query("DROP TABLE IF EXISTS $table_name");
$wpdb->query("DROP TABLE IF EXISTS $table_name2");