<?php
/**
 * Render the frontend content.
 *
 * @package Module Shivam
 */
?>
<div class="main-box">
	<div class="sr-image-wrap">
		<img class="sr-image" src="<?php echo($settings->photo_src) ?>"/>
	</div>
	<div class="sr-icon-wrap">
		<span class="sr-icon">
			<i class="<?php echo $settings->icon; ?>"></i>
		</span>
	</div>
	<div class="sr-heading-wrap">
		<?php echo '<' . $settings->tag_select .  ' class="sr-heading"> ';
		echo $settings->heading;
		echo '</'. $settings->tag_select.'>';?>
	</div>
	<div class="sr-description">
		<?php echo $settings->textarea_field; ?>
	</div>
</div>
