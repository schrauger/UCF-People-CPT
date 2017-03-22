<?php
/*
Plugin Name: UCF People Custom Post Type
Description: Provides a people custom post type and related meta fields.
Version: 1.0.0
Author: UCF Web Communications
License: GPL3
*/
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'UCF_PEOPLE__PLUGIN_URL', plugins_url( basename( dirname( __FILE__ ) ) ) );
define( 'UCF_PEOPLE__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'UCF_PEOPLE__STATIC_URL', UCF_DEGREE__PLUGIN_URL . '/static' );
define( 'UCF_DEGREE__PLUGIN_FILE', __FILE__ );

include_once 'includes/ucf-people-posttype.php';
include_once 'includes/ucf-people-group-posttype.php';

if ( ! function_exists( 'ucf_people_plugin_activation' ) ) {
	function ucf_people_plugin_activation() {
		return;
	}
}

if ( ! function_exists( 'ucf_people_plugin_deactivation' ) ) {
	function ucf_people_plugin_deactivation() {
		return;
	}
}

if ( ! function_exists( 'ucf_people_plugins_loaded' ) ) {
	function ucf_people_plugins_loaded() {
		add_action( 'init', array( 'UCF_People_PostType', 'register' ), 10, 0 );
		add_action( 'init', array( 'UCF_People_Group_PostType', 'register' ), 10, 0 );
	}

	add_action( 'plugins_loaded', 'ucf_people_plugins_loaded', 10, 0 );
}

?>
