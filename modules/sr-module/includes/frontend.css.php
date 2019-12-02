<?php
/**
 * Register the module's CSS file for Module Shivam
 *
 * @package  Module Shivam
 */
?>

.fl-node-<?php echo $id; ?> .sr-heading-wrap <?php echo $settings->tag_select; ?> {
	margin-top: <?php echo $settings->heading_margin_top; ?>px;
	margin-bottom: <?php echo $settings->heading_margin_bottom; ?>px;
}

.fl-node-<?php echo $id; ?> .sr-description {
	margin-top: <?php echo $settings->description_margin_top; ?>px;
	margin-bottom: <?php echo $settings->description_margin_bottom; ?>px;
}

<?php

FLBuilderCSS::rule( array(
	'selector'	=> ".fl-node-$id .main-box",
	'props'		=> array(
		'background-color'	=> $settings->bg_color,
	),
) );

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


