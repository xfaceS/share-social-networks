<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.almisbah.ma/
 * @since      1.0.0
 *
 * @package    Share_Sociale_Networks
 * @subpackage Share_Sociale_Networks/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Share_Sociale_Networks
 * @subpackage Share_Sociale_Networks/includes
 * @author     Amine Misbah <xamine.misbahx@gmail.com>
 */
class Share_Sociale_Networks_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'share-sociale-networks',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
