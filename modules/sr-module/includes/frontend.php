<?php
/**
 * Render the frontend content.
 *
 * @package Module Shivam
 */
?>
<div class="main-box <?php echo($settings->img_icon_position);	 ?>">
	<div class="sr-imgicon-wrap">
		<?php if ( !empty($settings->photo_src)) { ?>
			<div class="sr-image-wrap">
				<img class="sr-image" src="<?php echo($settings->photo_src) ?>"/>
			</div>
		<?php }  ?>
		<?php if ( !empty($settings->icon)) { ?>
			<div class="sr-icon-wrap">
				<span class="sr-icon">
					<i class="<?php echo $settings->icon; ?>"></i>
				</span>
			</div>
		<?php }  ?>
	</div>
	<div class="main-box-content">
		<div class="sr-heading-wrap">
			<?php echo '<' . $settings->tag_select .  ' class="sr-heading"> ';
			echo $settings->heading;
			echo '</'. $settings->tag_select.'>'; ?>
		</div>
		<div class="sr-description">
			<?php echo $settings->textarea_field; ?>
		</div>
	</div>
</div>
