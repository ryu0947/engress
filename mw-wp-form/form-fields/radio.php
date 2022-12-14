<?php

/**
 * @package mw-wp-form
 * @author inc2734
 * @license GPL-2.0+
 */

if ('true' === $vertically) {
	$vertically_class = 'vertical-item';
} else {
	$vertically_class = 'horizontal-item';
}
?>
<?php foreach ($fields as $field_value => $field) : ?>
	<div class="contact__radio">
		<label <?php echo MWF_Functions::generate_input_attribute('for', $field['id']); ?>>
			<input class="radio" type="radio" name="<?php echo esc_attr($field['name']); ?>" value="<?php echo esc_attr($field_value); ?>" <?php checked($field_value, $value, true); ?> <?php echo MWF_Functions::generate_input_attribute('id', $field['id']); ?> <?php echo MWF_Functions::generate_input_attribute('class', $field['class']); ?> />
			<span class="radio-name"><?php echo esc_attr($field['label']); ?></span>
		</label>
	</div>
<?php endforeach; ?>