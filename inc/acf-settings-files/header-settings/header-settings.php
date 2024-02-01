<?php add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
	'key' => 'group_64dde23a0a9db',
	'title' => 'Header Settings',
	'fields' => array(
		array(
			'key' => 'field_64dde23ad6af3',
			'label' => 'Header Settings',
			'name' => 'header_settings',
			'aria-label' => '',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'block',
			'sub_fields' => array(
				array(
					'key' => 'field_65bb9a3441b13',
					'label' => 'Header Color',
					'name' => 'header_color',
					'aria-label' => '',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 0,
					'ui_on_text' => 'Dark',
					'ui_off_text' => 'Bright',
					'ui' => 1,
				),
				array(
					'key' => 'field_64dde5831fd2e',
					'label' => 'Header Top Left',
					'name' => '',
					'aria-label' => '',
					'type' => 'tab',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'placement' => 'top',
					'endpoint' => 0,
				),
				array(
					'key' => 'field_64dde74163062',
					'label' => 'Header Top Left',
					'name' => 'header_left',
					'aria-label' => '',
					'type' => 'repeater',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'layout' => 'table',
					'pagination' => 0,
					'min' => 0,
					'max' => 0,
					'collapsed' => '',
					'button_label' => 'Add Row',
					'rows_per_page' => 20,
					'sub_fields' => array(
						array(
							'key' => 'field_64dde74d63063',
							'label' => 'Icon',
							'name' => 'icon',
							'aria-label' => '',
							'type' => 'font-awesome',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '30',
								'class' => '',
								'id' => '',
							),
							'icon_sets' => array(
								0 => 'fas',
								1 => 'far',
								2 => 'fab',
							),
							'custom_icon_set' => '',
							'default_label' => '',
							'default_value' => '',
							'save_format' => 'class',
							'allow_null' => 0,
							'show_preview' => 1,
							'enqueue_fa' => 0,
							'fa_live_preview' => '',
							'choices' => array(
							),
							'parent_repeater' => 'field_64dde74163062',
						),
						array(
							'key' => 'field_64dde75b63064',
							'label' => 'Link',
							'name' => 'link',
							'aria-label' => '',
							'type' => 'link',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '70',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'parent_repeater' => 'field_64dde74163062',
						),
					),
				),
				array(
					'key' => 'field_64dde5891fd2f',
					'label' => 'Header Top Right',
					'name' => '',
					'aria-label' => '',
					'type' => 'tab',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'placement' => 'top',
					'endpoint' => 0,
				),
				array(
					'key' => 'field_64dde6915733c',
					'label' => 'Header Top Right',
					'name' => 'header_right',
					'aria-label' => '',
					'type' => 'repeater',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'layout' => 'block',
					'pagination' => 0,
					'min' => 0,
					'max' => 0,
					'collapsed' => 'field_64dde69e5733d',
					'button_label' => 'Add Row',
					'rows_per_page' => 20,
					'sub_fields' => array(
						array(
							'key' => 'field_64dde69e5733d',
							'label' => 'Icon',
							'name' => 'icon',
							'aria-label' => '',
							'type' => 'font-awesome',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '30',
								'class' => '',
								'id' => '',
							),
							'icon_sets' => array(
								0 => 'fas',
								1 => 'far',
								2 => 'fab',
							),
							'custom_icon_set' => '',
							'default_label' => '',
							'default_value' => '',
							'save_format' => 'class',
							'allow_null' => 0,
							'show_preview' => 1,
							'enqueue_fa' => 0,
							'fa_live_preview' => '',
							'choices' => array(
							),
							'parent_repeater' => 'field_64dde6915733c',
						),
						array(
							'key' => 'field_64dde6b25733e',
							'label' => 'Link',
							'name' => 'link',
							'aria-label' => '',
							'type' => 'link',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '70',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'parent_repeater' => 'field_64dde6915733c',
						),
						array(
							'key' => 'field_651ea1e084c20',
							'label' => 'aria-label',
							'name' => 'area_label',
							'aria-label' => '',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'maxlength' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'parent_repeater' => 'field_64dde6915733c',
						),
					),
				),
				array(
					'key' => 'field_64de110902c2a',
					'label' => 'Header button section',
					'name' => '',
					'aria-label' => '',
					'type' => 'tab',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'placement' => 'top',
					'endpoint' => 0,
				),
				array(
					'key' => 'field_64de111802c2b',
					'label' => 'Header button',
					'name' => 'header_button',
					'aria-label' => '',
					'type' => 'link',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
				),
				array(
					'key' => 'field_64de127b02c2c',
					'label' => 'Header Image',
					'name' => 'header_image',
					'aria-label' => '',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'id',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
					'preview_size' => 'medium',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options-header-settings',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );
} );

 ?>