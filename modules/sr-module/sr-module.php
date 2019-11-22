<?php
	/**
	 * 
	 */
	class SrModuleClass extends FLBuilderModule {
		
		public function __construct() {
			parent::__construct(array(
				'name'		   => __( 'Module Shivam', 'fl-builder' ),
				'description'  => __( 'You gonna love it', 'fl-builder'),
				'group'		   => __( 'Group Shivam', 'fl-builder'),
				'category'	   => __( 'Category Shivam', 'fl-builder'),
				'dir'		   => MODULE_SHIVAM_DIR . 'sr-module/',
				'enabled'	   => true,
				'editor_export'=> true,
			));
		}
	}

	FLBuilder::register_module( 'SrModuleClass', array(
		'sr-tab-1'      => array(
			'title'	       => __( 'SR Tab 1', 'fl-builder'),
			'sections'	   => array(
				'sr-section-1' => array(
					'title'			=> __( 'SR Section 1', 'fl-builder' ),
					'fields'		=> array(
						'sr-field-1'    => array(
							'type'			=> 'text',
							'label'			=> __( 'Text Field 1', 'fl-builder' ),
						),
						'sr-field-2'    => array(
							'type'			=> 'text',
							'label'			=> __( 'Text Field 2', 'fl-builder' ),
						),
					),
				),
				'sr-section-2' => array(
					'title'			=> __( 'SR Section 2', 'fl-builder' ),
				),
			),
		),
		'sr-tab-2'      => array(
			'title'	       => __( 'SR Tab 2', 'fl-builder'),

		),

	) );


	?>