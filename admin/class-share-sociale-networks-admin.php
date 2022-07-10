<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://www.almisbah.ma/
 * @since      1.0.0
 *
 * @package    Share_Sociale_Networks
 * @subpackage Share_Sociale_Networks/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Share_Sociale_Networks
 * @subpackage Share_Sociale_Networks/admin
 * @author     Amine Misbah <xamine.misbahx@gmail.com>
 */
class Share_Sociale_Networks_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;


	}
	/* -------------------------------------------------------------------------- */
	/*                                   MY CODE                                  */
	/* -------------------------------------------------------------------------- */
	public function ami_share_social_setting()
	{
		add_options_page($this->plugin_name." Settings", $this->plugin_name.' setting' , 'manage_options' , 'ami_share_socials_admin_menu',array($this, 'ami_share_social_setting_page'));
	}
	
	function ami_share_social_setting_page(){
		include(sprintf("%s/partials/share-sociale-networks-admin-display.php", dirname(__FILE__)));
	}
	/* -------------------------------------------------------------------------- */
	/*                                 END MY CODE                                */
	/* -------------------------------------------------------------------------- */

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Share_Sociale_Networks_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Share_Sociale_Networks_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_style( $this->plugin_name."-bootstrap", plugin_dir_url( __FILE__ ) . 'css/bootstrap.css', array(), $this->version, 'all' );

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/share-sociale-networks-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Share_Sociale_Networks_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Share_Sociale_Networks_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/share-sociale-networks-admin.js', array( 'jquery' ), $this->version, false );

	}

}
