<?php

/**
 * @package mw-wp-form
 * @author inc2734
 * @license GPL-2.0+
 */
?>

<?php
if ('true' === $vertically) {
	$vertically_class = 'vertical-item';
} else {
	$vertically_class = 'horizontal-item';
}

foreach ($value as $_key => $_value) {
	$value[$_key] = (string) $_value;
}
?>
<?php foreach ($fields as $field_value => $field) : ?>
	<label <?php echo MWF_Functions::generate_input_attribute('for', $field['id']); ?>>
		<input class="contact__check" type="checkbox" name="<?php echo esc_attr($field['name']); ?>" value="<?php echo esc_attr($field_value); ?>" <?php checked(in_array((string) $field_value, $value, true), true, true); ?> <?php echo MWF_Functions::generate_input_attribute('id', $field['id']); ?> <?php echo MWF_Functions::generate_input_attribute('class', $field['class']); ?> />
		<span class="contact__check-area"><?php echo esc_attr($field['label']); ?></span>
	</label>
	</span>
<?php endforeach; ?>