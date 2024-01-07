<?php
/*
Plugin Name: Qwery Core
Plugin URI: https://qwery.com/
Description: A plugin that implements Qwery Functionality
Version: 5.3
Requires at least: 5.8
Requires PHP: 7.4
Author: Yauheni
Author URI: https://qwery.com/
License: GPLv2 or later
Text Domain: qwery-core
*/

if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}
require plugin_dir_path (__FILE__) . '/inc/elementor.php';
require plugin_dir_path (__FILE__) . '/inc/metaboxes.php';
require plugin_dir_path (__FILE__) . '/inc/posttypes.php';
require plugin_dir_path (__FILE__) . '/inc/taxonomies.php';
require plugin_dir_path (__FILE__) . '/inc/acf.php';