<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.almisbah.ma/
 * @since             1.0.0
 * @package           Share_Sociale_Networks
 *
 * @wordpress-plugin
 * Plugin Name:       Share Social Networks
 * Plugin URI:        https://www.almisbah.ma/
 * Description:       This plugin is really useful for bloggers who want to share their content on social networks. The plugin allows you to share any post.
 * Version:           1.0.1
 * Author:            Amine Misbah
 * Author URI:        https://www.facebook.com/Xface0/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       share-social-networks
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
define( 'SHARE_SOCIALE_NETWORKS_VERSION', '1.0.0' );
define( 'SHARE_SOCIALE_NETWORKS_TABLE_NAME', 'ami_share_socials_settings' );
define( 'SHARE_SOCIALE_NETWORKS_PLUGIN_NAME', 'Share Socials Networks' );
define( 'SHARE_SOCIALE_NETWORKS_PLUGIN_SETTINGS_NAME', 'Share Socials Networks Settings' );
define( 'SHARE_SOCIALE_NETWORKS_PLUGIN_FOLDER_NAME','share-sociale-networks');

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-share-sociale-networks-activator.php
 */

function activate_share_sociale_networks() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-share-sociale-networks-activator.php';
	Share_Sociale_Networks_Activator::activate();

}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-share-sociale-networks-deactivator.php
 */
function deactivate_share_sociale_networks() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-share-sociale-networks-deactivator.php';
	Share_Sociale_Networks_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_share_sociale_networks' );
register_deactivation_hook( __FILE__, 'deactivate_share_sociale_networks' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-share-sociale-networks.php';



/* -------------------------------------------------------------------------- */
/*                                   MYCODE                                   */
/* -------------------------------------------------------------------------- */

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_share_sociale_networks() {

	$plugin = new Share_Sociale_Networks();
	$plugin->run();

}
run_share_sociale_networks();
