<?php
/**
 * Plugin Name:       WP BKKLIBER Multilang
 * Plugin URI:        https://github.com/niyatajayo/wp-bkkliber-multilang
 * GitHub Plugin URI: https://github.com/niyatajayo/wp-bkkliber-multilang
 * Description:       Multilingual plugin for WordPress
 * Author:            Thaworn Niyatajayo
 * License:           GPL2
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wp-bkkliber-multilang
 * Domain Path:       /languages
 * Version:           2.5.0
 * Copyright:         © 2019-202020 Thaworn Niyatajayo
 *
 * @package  WPM
 * @category Core
 * @author   Thaworn Niyatajayo
 */

use WPM\Includes\WP_Multilang;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Define WPM_PLUGIN_FILE.
if ( ! defined( 'WPM_PLUGIN_FILE' ) ) {
	define( 'WPM_PLUGIN_FILE', __FILE__ );
}

require_once __DIR__ . '/vendor/autoload.php';

function wpm() {
	return WP_Multilang::instance();
}

wpm();
