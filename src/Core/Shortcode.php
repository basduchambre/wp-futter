<?php

namespace Growise\WPFutter\Core;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Shortcode {

	function register() 
	{
		add_shortcode('wp-futter', array($this, 'output')); 
	}

	public function output() 
	{
		return '<div id="WPFutter" data-ig="' . get_option('instagram_handle') . '"></div>';
	}


}