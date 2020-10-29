<?php

namespace Growise\WPFutter\Admin;

use \Growise\WPFutter\Core\Controller;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Page extends Controller {

	public function register() 
	{
		add_action( 'admin_init', array( $this, 'settings' ) );
	}

	public function settings() 
	{
		register_setting( 'wp-futter', 'instagram_handle' );

		add_settings_section(
            'wp-futter',
            'General settings',
            array($this, 'wp_futter_settings_section'),
            'wp-futter'
        );
		add_settings_field( 
			'instagram_handle',
			'Instagram handle',
			array($this, 'wp_futter_instagram_handle'),
			'wp-futter',
			'wp-futter',
			array( 
				'label_for' => 'instagram_handle' 
				) 
			);
		}

	public function wp_futter_settings_section() {
        esc_html_e('Fill in your Instragram profile name below');
	}
	
	public function wp_futter_instagram_handle() 
	{
		$value = esc_attr( get_option( 'instagram_handle' ) );
		echo '<input type="text" class="regular-text" name="instagram_handle" value="' . $value . '" placeholder="Instagram profile name" />';
	}

}