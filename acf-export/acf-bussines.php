<?php if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_64a2de0864203',
	'title' => 'Bussines information',
	'fields' => array(
		// array(
		// 	'key' => 'field_64a2e5eb9fa12',
		// 	'label' => 'foto',
		// 	'name' => 'foto',
		// 	'type' => 'gallery',
		// 	'instructions' => '',
		// 	'required' => 0,
		// 	'conditional_logic' => 0,
		// 	'wrapper' => array(
		// 		'width' => '',
		// 		'class' => '',
		// 		'id' => '',
		// 	),
		// 	'return_format' => 'array',
		// 	'preview_size' => 'thumbnail',
		// 	'insert' => 'append',
		// 	'library' => 'all',
		// 	'min' => '',
		// 	'max' => '',
		// 	'min_width' => '',
		// 	'min_height' => '',
		// 	'min_size' => '',
		// 	'max_width' => '',
		// 	'max_height' => '',
		// 	'max_size' => '',
		// 	'mime_types' => '',
		// ),
		array(
			'key' => 'field_64a2de35e33aa',
			'label' => 'emri biznesit',
			'name' => 'emri',
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
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_64a3c72568c58',
			'label' => 'reviews',
			'name' => 'reviews',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '1',
			'max' => '5',
			'step' => '',
		),
		array(
			'key' => 'field_64a2de3de33ab',
			'label' => 'informata rreth biznesit',
			'name' => 'informata',
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
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_64a4718677421',
			'label' => 'email',
			'name' => 'email',
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
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_64a4719677422',
			'label' => 'telefoni',
			'name' => 'telefoni',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'bussines_post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'the_content',
	),
	'active' => true,
	'description' => '',
));

endif;
?>