<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://olpo.de
 * @since             1.0.0
 * @package           Zbstyler
 *
 * @wordpress-plugin
 * Plugin Name:       ZionBuilderStyler
 * Plugin URI:        https://olpo.de/plugins
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Olpo
 * Author URI:        https://olpo.de
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       zbstyler
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
define( 'ZBSTYLER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-zbstyler-activator.php
 */
function activate_zbstyler() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-zbstyler-activator.php';
	Zbstyler_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-zbstyler-deactivator.php
 */
function deactivate_zbstyler() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-zbstyler-deactivator.php';
	Zbstyler_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_zbstyler' );
register_deactivation_hook( __FILE__, 'deactivate_zbstyler' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-zbstyler.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_zbstyler() {

	$plugin = new Zbstyler();
	$plugin->run();

}
run_zbstyler();
