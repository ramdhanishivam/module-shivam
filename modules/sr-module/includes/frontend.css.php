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
	text-align: <?php echo $settings->heading_font_type["text_align"]; ?>;
	color: #<?php echo $settings->heading_color; ?>;
}

.sr-description {
	text-align: <?php echo $settings->description_font_type["text_align"]; ?>;
	color: #<?php echo $settings->description_color; ?>;
}