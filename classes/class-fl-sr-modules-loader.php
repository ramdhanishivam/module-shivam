<?php
	/**
	 * 
	 */
	class FL_SR_Modules_Loader
	{
		static public function load_modules() {
			require_once MODULE_SHIVAM_DIR.'modules/sr-module/sr-module.php';
		}
	}
FL_SR_Modules_Loader::load_modules();

?>