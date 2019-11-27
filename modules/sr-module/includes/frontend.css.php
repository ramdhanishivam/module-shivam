<?php
/**
 * Register the module's CSS file for Module Shivam
 *
 * @package  Module Shivam
 */
?>
.sr-icon i{
	font-size: <?php echo $settings->icon_size; ?>px;
}

.sr-icon-wrap{
	text-align: <?php echo $settings->icon_align; ?>;
}

.sr-image {
	width: <?php echo $settings->image_size; ?>px;
}

.sr-image-wrap {
	text-align: <?php echo $settings->image_align; ?>;
}

.sr-heading-wrap <?php echo $settings->tag_select; ?> {
	color: #<?php echo $settings->heading_color; ?>;
}

.sr-description {
	color: #<?php echo $settings->description_color; ?>;
}

<?php
	FLBuilderCSS::typography_field_rule(
			array(
				'settings'     => $settings,
				'setting_name' => 'heading_font_type',
				'selector'     => ".sr-heading-wrap $settings->tag_select",
			)
		);
	
	FLBuilderCSS::typography_field_rule(
			array(
				'settings'     => $settings,
				'setting_name' => 'description_font_type',
				'selector'     => ".sr-description",
			)
		);
?>

=======
}
>>>>>>> parent of c8b7bfe... feat: font property added
