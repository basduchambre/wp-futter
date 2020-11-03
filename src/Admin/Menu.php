<?php

namespace Growise\WPFutter\Admin;

use \Growise\WPFutter\Core\Controller;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Menu extends Controller {

	public function __construct() 
	{
		parent::__construct();
		add_action( 'admin_menu', array( $this, 'add_admin_menu_page' ) );
	}

	public function add_admin_menu_page() 
	{
		add_menu_page(
			'WP Futter settings',
			'WP Futter',
			'manage_options',
			'wp-futter',
			array($this, 'settings_page'),
			'dashicons-images-alt',
			110
		);
	}

	public function settings_page()
	{
		require_once $this->path . 'src/templates/admin.php';
	}

}