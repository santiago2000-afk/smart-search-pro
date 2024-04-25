<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://https://www.linkedin.com/in/santiago-alvarado-1275601b1/
 * @since      1.0.0
 *
 * @package    Smart_Search_Pro
 * @subpackage Smart_Search_Pro/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Smart_Search_Pro
 * @subpackage Smart_Search_Pro/includes
 * @author     Santiago Alvarado <strnspprt@gmail.com>
 */
class Smart_Search_Pro_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'smart-search-pro',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
