<?php
	/**
	 * Loads Module Shivam and its custom fields
	 */
	class FL_SR_Modules_Loader
	{
		/**
		 * Initializes the class once all plugins have loaded.
		 */
		static public function init() {
			add_action( 'plugins_loaded', __CLASS__.'::setup_hooks' );
		}

		/**
		 * Setup hooks if the builder is installed and activated.
	     */
		static public function setup_hooks() {
			if ( !class_exists( 'FLBuilder' ) ) {
				return ;
			}

			add_action( 'init', __CLASS__ . '::load_modules' );

			add_action( 'fl_builder_custom_fields', __CLASS__ . '::register_fields' );

			add_action( 'init', __CLASS__ . '::enqueue_field_assets' );

		}

		/**
		 * Loads our custom modules.
		 */
		static public function load_modules() {
			require_once MODULE_SHIVAM_DIR.'modules/sr-module/sr-module.php';
		}

		/**
		 * Registers our custom fields.
		 */
		static public function register_fields( $fields ) {
			$fields['my-custom-field'] = MODULE_SHIVAM_DIR.'fields/my-custom-field.php';
			return $fields;
		}

		/**
		 * Enqueues our custom field assets only if the builder UI is active.
		 */
		static public function enqueue_field_assets() {
			if ( ! FLBuilderModel::is_builder_active() ) {
				return ;
			}

			wp_enqueue_style( 'my-custom-fields', MODULE_SHIVAM_URL . 'assets/css/fields.css', array(), '' );

			wp_enqueue_script( 'my-custom-fields', MODULE_SHIVAM_URL . 'assets/js/fields.js', array(), '', true );
		}
	}
FL_SR_Modules_Loader::init();

?>