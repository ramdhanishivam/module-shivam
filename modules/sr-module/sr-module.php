	<?php
	/**
	 *  Function that initializes Module Shivam
	 *
	 *  @class SrModuleClass
	 */
	class SrModuleClass extends FLBuilderModule {
		/**
		 * Constructor function that constructs default values for the Mdoule Shivam
		 *
		 * @method __construct
		 */
		public function __construct() {
			parent::__construct(array(
				'name'		   => __( 'Module Shivam', 'module-shivam' ),
				'description'  => __( 'You gonna love it', 'module-shivam'),
				'category'	   => __( 'Category Shivam', 'module-shivam'),
				'dir'		   => MODULE_SHIVAM_DIR . 'modules/sr-module/',
				'url'          => MODULE_SHIVAM_URL . 'modules/sr-module/',
				'enabled'	   => true,
				'editor_export'=> true,
			));
		}
	}

	/**
	 * Register the Module
	 */
	FLBuilder::register_module( 'SrModuleClass', array(
		'general'      => array(
			'title'	       => __( 'General', 'module-shivam'),
			'sections'	   => array(
				'heading_description' => array(
					'title'			=> __( 'Heading & Description', 'module-shivam' ),
					'fields'		=> array(
						'heading'          => array(
							'type'        => 'text',
							'label'       => __( 'Title', 'sr-module' ),
							'default'     => '',
							'connections' => array( 'string', 'html' ),
							'preview'     => array(
								'type'      => 'text',
								'selector'  => '.sr-heading',
								'important' => true,
							),
						),
						'textarea_field'    => array(
							'type'			=> 'editor',
							'label'			=> __( 'Textarea Field', 'module-shivam' ),
							'default'       => '',
							'placeholder'   => __('Placeholder Text', 'module-shivam'),
							'rows'          => '6',
							'preview'         => array(
								'type'             => 'text',
								'selector'         => '.sr-description',
							),
						),
						'image_type' => array(
							'type'    => 'select',
							'label'   => __( 'Image Type', 'module-shivam' ),
							'default' => 'icon',
							'options' => array(
								'icon'  => __( 'Icon', 'module-shivam' ),
								'photo' => __( 'Photo', 'module-shivam' ),
							),
							'toggle'  => array(
								'icon'  => array(
									'sections' => array( 'Icons' ),
								),
								'photo' => array(
									'sections' => array( 'Images' ),
								),
							),
						),
					),
				),
				'Icons' => array(
					'title'			=> __( 'Icons', 'module-shivam' ),
					'fields'	    => array(
						'icon' 			=> array(
							'type' 	       =>'icon',
							'label'        =>__( 'Icon', 'module-shivam' ),
							'default'	   =>'',
							'show_remove'  =>true,
						),
						'icon_size'     => array(
							'type'	       => 'unit',
							'label'		   => __('Size', 'module-shivam' ),
							'preview'     => array(
								'type'     => 'css',
								'selector' => '.sr-icon i',
								'property' => 'font-size',
								'unit'     => 'px',
							),
						),
						'icon_align'     => array(
							'type'			=> 'select',
							'label'			=> __( 'Alignment', 'module-shivam' ),
							'default'		=> 'left',
							'options'		=> array(
								'left'			=> __( 'Left', 'module-shivam' ),
								'right'			=> __( 'Right', 'module-shivam' ),
								'center'		=> __( 'Center', 'module-shivam' ),
							),
							'preview'	  => array(
								'type'		=> 'css',
								'selector'  => '.sr-icon-wrap',
								'property'	=> 'text-align',
							),
						),
					),
				),
				'Images' => array(
					'title'			=> __( 'Images', 'module-shivam' ),
					'fields' 		=> array(
						'photo' 		=> array(
							'type' 			=> 'photo',
							'label' 		=> __( 'Photo', 'module-shivam' ),
							'show_remove'   => true,
						),
						'image_size'     => array(
							'type'        => 'unit',
							'label'       => __( 'Size', 'module-shivam' ),
							'preview'     => array(
								'type'     => 'css',
								'selector' => '.sr-image',
								'property' => 'width',
								'unit'     => 'px',
							),
						),
						'image_align'     => array(
							'type'			=> 'select',
							'label'			=> __( 'Alignment', 'module-shivam' ),
							'default'		=> 'left',
							'options'		=> array(
								'left'			=> __( 'Left', 'module-shivam' ),
								'right'			=> __( 'Right', 'module-shivam' ),
								'center'		=> __( 'Center', 'module-shivam' ),
							),
							'preview'	  => array(
								'type'		=> 'css',
								'selector'  => '.sr-image-wrap',
								'property'	=> 'text-align',
								'important' => true,
							),
						),

					),
				),
			),
		),
		'typography'      => array(
			'title'	       => __( 'Typography', 'module-shivam' ),
			'sections'	   => array(
				'heading_typography' => array(
					'title'  => __( 'Heading Typography', 'module-shivam' ),
					'fields' => array(
						'tag_select'    => array(
							'type'		=> 'select',
							'label'		=> __( 'Tag', 'module-shivam' ),
							'default'   => 'h4',
							'options'	=> array(
								'h1'	=> __( 'H1', 'module-shivam' ),
								'h2'	=> __( 'H2', 'module-shivam' ),
								'h3'	=> __( 'H3', 'module-shivam' ),
								'h4'	=> __( 'H4', 'module-shivam' ),
								'h5'	=> __( 'H5', 'module-shivam' ),
								'h6'	=> __( 'H6', 'module-shivam' ),
								'p'		=> __( 'p', 'module-shivam' ),
								'span'	=> __( 'span', 'module-shivam' ),
							),
						),
						'heading_font_type'   => array(
							'type'  => 'typography',
							'label' => __( 'Typography', 'module-shivam' ),
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.sr-heading',
								'important'=> true,
							),
						),
						'heading_color'     => array(
							'type'	=> 'color',
							'label' => __( 'Color', 'module-shivam' ),
							'default' => '',
							'show_reset' => true,
							'preview'	 => array(
								'type' => 'css',
								'selector' => '.sr-heading',
								'property' => 'color',
							),
						),
						'heading_font_family'      => array(
							'type'    => 'font',
							'label'   => __( 'Font Family', 'module-shivam' ),
							'default' => array(
								'family' => 'Default',
								'weight' => 'Default',
							),
							'preview' => array(
								'type'     => 'font',
								'selector' => '.sr-heading',
							),
						),
						'heading_font_size_unit'   => array(
							'type'        => 'unit',
							'label'       => __( 'Font Size', 'module-shivam' ),
							'description' => 'px',
							'preview'     => array(
								'type'     => 'css',
								'selector' => '.sr-heading',
								'property' => 'font-size',
								'unit'     => 'px',
							),
							'responsive'  => array(
								'placeholder' => array(
									'default'    => '',
									'medium'     => '',
									'responsive' => '',
								),
							),
						),
					),

				),
				'description_typography' => array(
					'title'  => __( 'Description Typography', 'module-shivam' ),
					'fields' => array(
						'description_font_type'   => array(
							'type'  => 'typography',
							'label' => __( 'Typography', 'module-shivam' ),
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.sr-description',
								'important'=> true,
							),
						),
						'description_color'     => array(
							'type'	=> 'color',
							'label' => __( 'Color', 'module-shivam' ),
							'default' => '',
							'show_reset' => true,
							'preview'	 => array(
								'type' => 'css',
								'selector' => '.sr-description',
								'property' => 'color',
							),
						),
						'description_font_family'      => array(
							'type'    => 'font',
							'label'   => __( 'Font Family', 'module-shivam' ),
							'default' => array(
								'family' => 'Default',
								'weight' => 'Default',
							),
							'preview' => array(
								'type'     => 'font',
								'selector' => '.sr-description',
							),
						),
						'description_font_size_unit'   => array(
							'type'        => 'unit',
							'label'       => __( 'Font Size', 'module-shivam' ),
							'description' => 'px',
							'preview'     => array(
								'type'     => 'css',
								'selector' => '.sr-description',
								'property' => 'font-size',
								'unit'     => 'px',
							),
							'responsive'  => array(
								'placeholder' => array(
									'default'    => '',
									'medium'     => '',
									'responsive' => '',
								),
							),
						),
					),

				),

			),
		),
	) );
	?>