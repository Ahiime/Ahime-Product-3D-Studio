<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://blyd3d.com
 * @since             1.0.0
 * @package           A3ds
 *
 * @wordpress-plugin
 * Plugin Name:       Ahime Product 3D Studio
 * Plugin URI:        https://github.com/Ahiime/Ahime-Product-3D-Studio
 * Description:       Ahime Product 3D Studio is an innovative WordPress plugin that allows users to visually customize products in 3D. Perfect for e-commerce sites using WooCommerce, this powerful 3D configurator lets you create and add custom shapes, offering a unique and interactive customization experience. It seamlessly integrates with WooCommerce for smooth management of customized products. Whether you sell clothing, accessories, furniture, or other products, Ahime Product 3D Studio enhances your WooCommerce store with cutting-edge 3D customization. Try it for free and transform your online store today!
 * Version:           1.0.0
 * Author:            Ahime
 * Author URI:        https://blyd3d.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       a3ds
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
define( 'A3DS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-a3ds-activator.php
 */
function activate_a3ds() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-a3ds-activator.php';
	A3ds_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-a3ds-deactivator.php
 */
function deactivate_a3ds() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-a3ds-deactivator.php';
	A3ds_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_a3ds' );
register_deactivation_hook( __FILE__, 'deactivate_a3ds' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-a3ds.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_a3ds() {

	$plugin = new A3ds();
	$plugin->run();

}
run_a3ds();
