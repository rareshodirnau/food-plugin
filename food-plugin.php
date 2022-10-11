<?php

/*
Plugin Name: Food plugin
Version: 1.0 
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Plugin URL.
define( 'FOOD_URL', untrailingslashit( plugins_url( basename( plugin_dir_path( __FILE__ ) ), basename( __FILE__ ) ) ) );
// Plugin path.
define( 'FOOD_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );

if (function_exists('get_field')){
	include_once(FOOD_PATH . '/inc/main.php');
}

