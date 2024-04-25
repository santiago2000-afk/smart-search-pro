<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://https://www.linkedin.com/in/santiago-alvarado-1275601b1/
 * @since             1.0.0
 * @package           Smart_Search_Pro
 *
 * @wordpress-plugin
 * Plugin Name:       smartSearchPro
 * Plugin URI:        https://https://www.linkedin.com/in/santiago-alvarado-1275601b1/
 * Description:       Smart Search Pro
 * Version:           1.0.0
 * Author:            Santiago Alvarado
 * Author URI:        https://https://www.linkedin.com/in/santiago-alvarado-1275601b1//
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       smart-search-pro
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'SMART_SEARCH_PRO_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-smart-search-pro-activator.php
 */
function activate_smart_search_pro() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-smart-search-pro-activator.php';
	Smart_Search_Pro_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-smart-search-pro-deactivator.php
 */
function deactivate_smart_search_pro() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-smart-search-pro-deactivator.php';
	Smart_Search_Pro_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_smart_search_pro' );
register_deactivation_hook( __FILE__, 'deactivate_smart_search_pro' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-smart-search-pro.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_smart_search_pro() {

	$plugin = new Smart_Search_Pro();
	$plugin->run();

}
run_smart_search_pro();
