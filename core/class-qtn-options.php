<?php

namespace QtNext\Core;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class QtN_Options {

	public function __construct() {

		add_filter( 'init', array( $this, 'get_options' ), 0 );
	}

	public function get_options() {
		global $qtn_config;

		$options = $qtn_config->settings['options'];

		foreach ( $options as $option ) {
			add_filter( "option_{$option}", 'qtn_translate_value' );
		}
	}
}