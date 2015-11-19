<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/jvestman
 * @since             1.0.0
 * @package           Vfb_Document
 *
 * @wordpress-plugin
 * Plugin Name:       VFBDocument
 * Plugin URI:        https://github.com/jvestman/vfb-document
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Jussi Vestman
 * Author URI:        https://github.com/jvestman
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       vfb-document
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-vfb-document-activator.php
 */
function activate_vfb_document() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-vfb-document-activator.php';
	Vfb_Document_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-vfb-document-deactivator.php
 */
function deactivate_vfb_document() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-vfb-document-deactivator.php';
	Vfb_Document_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_vfb_document' );
register_deactivation_hook( __FILE__, 'deactivate_vfb_document' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-vfb-document.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_vfb_document() {

	$plugin = new Vfb_Document();
	$plugin->run();

}
run_vfb_document();
