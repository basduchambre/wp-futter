<?php

namespace Growise\WPFutter\Admin;

use \Growise\WPFutter\Core\Controller;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Page extends Controller {

	public function __construct() 
	{
		add_action( 'admin_init', array( $this, 'settings' ) );
	}

	public function settings() 
	{
		register_setting( 'wp-futter', 'wp_futter' );

		add_settings_section('wp-futter', 'Plugin settings', '', 'wp-futter');
		
		add_settings_field( 
			'handle',
			'Instagram handle',
			array($this, 'wp_futter_handle_field'),
			'wp-futter',
			'wp-futter',
			array( 
				'option_name' => 'wp_futter',
				'label_for' => 'handle' 
			)
		);

	}
	
	public function wp_futter_handle_field( $args ) 
	{	
		$name = $args['label_for'];
		$option_name = $args['option_name'];
		$value = get_option('wp_futter');
		echo '<input type="text" class="regular-text" name="' . $option_name . '[' . $name . ']' . '" value="' . $value[$name] . '" placeholder="Instagram profile name" />';
	}

}