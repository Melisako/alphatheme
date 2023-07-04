<?php if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'group_64942ce39e3b3',
    'title' => 'Modules',
    'fields' => array(
        array(
            'key' => 'field_64942ce8f43c9',
            'label' => 'Modules List',
            'name' => 'modules_list',
            'type' => 'flexible_content',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            // prej qitu keni me shtu layouts (module)
            'layouts' => array(
                'layout_64937496af6bc' => array(
					'key' => 'layout_64937496af6bc',
					'name' => 'pro_section',
					'label' => 'Pro Section',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_649374e374a1f',
							'label' => 'Columns',
							'name' => 'columns',
							'type' => 'repeater',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'collapsed' => '',
							'min' => 0,
							'max' => 0,
							'layout' => 'table',
							'button_label' => '',
							'sub_fields' => array(
								array(
									'key' => 'field_6493750274a21',
									'label' => 'Content',
									'name' => 'content',
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
									'placeholder' => '',
									'maxlength' => '',
									'rows' => '',
									'new_lines' => '',
								),
							),
						),
					),
					'min' => '',
					'max' => '',
				),
                'layout_64942cee77bea' => array(
                    'key' => 'layout_64942cee77bea',
                    'name' => 'faq',
                    'label' => 'FAQ',
                    'display' => 'block',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_64942cf9f43ca',
                            'label' => 'FAQ items',
                            'name' => 'faq_items',
                            'type' => 'repeater',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'collapsed' => '',
                            'min' => 0,
                            'max' => 0,
                            'layout' => 'table',
                            'button_label' => '',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_64942d3b850e5',
                                    'label' => 'Question',
                                    'name' => 'faq_question',
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
                                    'key' => 'field_64942d40850e6',
                                    'label' => 'Answer',
                                    'name' => 'faq_answer',
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
                            ),
                        ),
                    ),
                    'min' => '',
                    'max' => '',
                ),
				
				
            ),


            // end
            'button_label' => 'Add Module',
            'min' => '',
            'max' => '',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'page',
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
));
endif;