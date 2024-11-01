<tr class="form-field hide-if-no-js">
	<th scope="row" valign="top"><?php print _e('Featured Image', 'W2DC') ?></th>
	<td>
		<input type="hidden" name="location_image_attachment_id" id="w2dc-location-image-attachment-id" value="<?php echo $attachment_id; ?>">

		<div>
			<img src="<?php echo $image_url; ?>" id="w2dc-location-image" width="300" <?php if (!$image_url): ?>style="display: none;"<?php endif; ?> />
		</div>

		<div class="options">
			<button id="w2dc-upload-location-featured" class="button" data-title="<?php esc_attr_e("Location Featured Image", "W2DC")?>" data-button="<?php esc_attr_e("Insert", "W2DC"); ?>"><?php _e("Select image", "W2DC"); ?></button>
			<button id="w2dc-remove-location-featured" class="button"><?php _e("Remove image", "W2DC"); ?></button>
		</div>
	</td>
</tr>