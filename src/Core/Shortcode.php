<?php

namespace Growise\WPFutter\Core;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Shortcode {

	function __construct() 
	{
		add_shortcode('wp-futter', array($this, 'output')); 
	}

	public function output() 
	{
		$option_field = get_option('wp_futter');

		$options = [
			'handle' => $option_field['handle'],
			'amount' => $option_field['amount'] ?? 3,
			'bg_color' => $option_field['bg_color'] ?? 'transparent'
		];

		return '<div id="WPFutter" data-options="' . htmlspecialchars(json_encode($options)) . '"></div>';
	}

}