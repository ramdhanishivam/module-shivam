<?php
/**
 * Register the module's CSS file for Module Shivam
 *
 * @package  Module Shivam
 */

FLBuilderCSS::rule( array(
	'selector'	=> ".fl-node-$id .sr-icon-wrap",
	'props'		=> array(
		'text-align'		=> $settings->icon_align,
	),
) );

FLBuilderCSS::rule( array(
	'selector'	=> ".fl-node-$id .sr-image-wrap",
	'props'		=> array(
		'text-align'		=> $settings->image_align,
	),
) );

FLBuilderCSS::responsive_rule( array(
	'settings'	    => $settings,
	'setting_name'  => 'image_size',
	'selector'		=> ".fl-node-$id .sr-image",
	'prop'			=> 'width',
) );

FLBuilderCSS::responsive_rule( array(
	'settings'	    => $settings,
	'setting_name'  => 'icon_size',
	'selector'		=> ".fl-node-$id .sr-icon",
	'prop'			=> 'font-size',
) );

FLBuilderCSS::rule( array(
	'selector'	=> ".fl-node-$id .sr-description",
	'props'		=> array(
		'color'		=> $settings->description_color,
	),
) );

FLBuilderCSS::rule( array(
	'selector'	=> ".fl-node-$id .sr-heading",
	'props'		=> array(
		'color'		=> $settings->heading_color,
	),
) );

FLBuilderCSS::typography_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'heading_font_type',
		'selector'     => ".fl-node-$id .sr-heading",
	)
);

FLBuilderCSS::typography_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'description_font_type',
		'selector'     => ".fl-node-$id .sr-description",
	)
);
?>


