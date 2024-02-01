<?php 

add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
	'key' => 'group_65bb84da25f5f',
	'title' => 'Main Template',
	'fields' => array(
		array(
			'key' => 'field_65bb84da67e76',
			'label' => 'Main Template',
			'name' => 'main_template',
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
					'key' => 'field_65bb850467e77',
					'label' => 'Sidebar Position',
					'name' => 'sidebar_position',
					'aria-label' => '',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'left' => 'Left',
						'right' => 'Right',
						'remove' => 'Remove Sidebar',
					),
					'default_value' => false,
					'return_format' => 'value',
					'multiple' => 0,
					'allow_null' => 0,
					'ui' => 0,
					'ajax' => 0,
					'placeholder' => '',
				),
				array(
					'key' => 'field_65bb85fe67e7a',
					'label' => 'Sidebar background',
					'name' => 'sidebar_background',
					'aria-label' => '',
					'type' => 'color_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_65bb850467e77',
								'operator' => '!=',
								'value' => 'remove',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'enable_opacity' => 0,
					'return_format' => 'string',
				),
				array(
					'key' => 'field_65bb86cac17dc',
					'label' => 'Sidebar text color',
					'name' => 'sidebar_text_color',
					'aria-label' => '',
					'type' => 'color_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_65bb850467e77',
								'operator' => '!=',
								'value' => 'remove',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'enable_opacity' => 0,
					'return_format' => 'string',
				),
				array(
					'key' => 'field_65bb86e1c17dd',
					'label' => 'Sidebar text',
					'name' => 'sidebar_text',
					'aria-label' => '',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_65bb850467e77',
								'operator' => '!=',
								'value' => 'remove',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => '',
					'rows' => '',
					'placeholder' => '',
					'new_lines' => 'br',
				),
				array(
					'key' => 'field_65bb865967e7c',
					'label' => 'Main container background',
					'name' => 'main_container_background',
					'aria-label' => '',
					'type' => 'color_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'enable_opacity' => 0,
					'return_format' => 'string',
				),
				array(
					'key' => 'field_65bb8703c17df',
					'label' => 'Main container text color',
					'name' => 'main_container_text_color',
					'aria-label' => '',
					'type' => 'color_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'enable_opacity' => 0,
					'return_format' => 'string',
				),
				array(
					'key' => 'field_65bb86fdc17de',
					'label' => 'Main container text',
					'name' => 'main_container_text',
					'aria-label' => '',
					'type' => 'textarea',
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
					'rows' => '',
					'placeholder' => '',
					'new_lines' => 'br',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'views/page-home.php',
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