<?php
/**
  * Plugin Name: Module Shivam
  * Description: Custom module for Beaver Builder
  * Version: 1.0
  * Author Name: Shivam Ramdhani
*/
define( 'MODULE_SHIVAM_DIR', plugin_dir_path( __FILE__ ) );
// define( 'MODULE_SHIVAM_URL', plugin_URL( '/', __FILE__ ) );

function module_one() {
	if ( class_exists( 'FLBuilder' ) ) {
		require_once MODULE_SHIVAM_DIR.'classes/class-fl-sr-modules-loader.php';
	}
}

add_action( 'init', 'module_one' );

?>