<?php

namespace Growise\WPFutter\Core;

use \Growise\WPFutter\Core\Controller;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Enqueues extends Controller {

	function register() 
	{
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ) );
	}

	public function enqueue() 
	{
		wp_enqueue_script( 'WPFutterScript', $this->url . 'dist/js/app.js' );
		wp_enqueue_style( 'WPFutterStyle', $this->url . 'dist/css/app.min.css' );
	}

}