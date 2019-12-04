<?php
/**
 * Register the module's CSS file for Module Shivam
 *
 * @package  Module Shivam
 */
?>

<?php if ($settings->img_icon_position === 'left' ) { ?>
	.fl-node-<?php echo $id; ?> .sr-box  .sr-<?php echo $settings->img_icon_position; ?> {
	display: flex;
}
<?php } ?>

<?php if ($settings->img_icon_position === 'right' ) { ?>
	.fl-node-<?php echo $id; ?> .sr-box  .sr-<?php echo $settings->img_icon_position; ?> {
	display: flex;
	flex-flow: row-reverse;
}
<?php } ?>

.fl-node-<?php echo $id; ?> .sr-box {
padding-top: <?php echo $settings->sr_padding_top; ?>px;
padding-right: <?php echo $settings->sr_padding_right; ?>px;
padding-bottom: <?php echo $settings->sr_padding_bottom; ?>px;
padding-left: <?php echo $settings->sr_padding_left; ?>px;
}

.fl-node-<?php echo $id; ?> .sr-heading-wrap <?php echo $settings->tag_select; ?> {
margin-top: <?php echo $settings->heading_margin_top; ?>px;
margin-bottom: <?php echo $settings->heading_margin_bottom; ?>px;
}

.fl-node-<?php echo $id; ?> .sr-description {
margin-top: <?php echo $settings->description_margin_top; ?>px;
margin-bottom: <?php echo $settings->description_margin_bottom; ?>px;
}

.fl-node-<?php echo $id; ?> .sr-imgicon-wrap {
margin-top: <?php echo $settings->imgicon_margin_top; ?>px;
margin-bottom: <?php echo $settings->imgicon_margin_bottom; ?>px;
margin-left: <?php echo $settings->imgicon_margin_left; ?>px;
margin-right: <?php echo $settings->imgicon_margin_right; ?>px;
}

<?php

FLBuilderCSS::rule( array(
	'selector'	=> ".fl-node-$id .sr-box",
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


