<?php

if ( ! function_exists( 'pharmacare_core_add_general_page_meta_box' ) ) {
	/**
	 * Function that add general meta box options for this module
	 *
	 * @param object $page
	 */
	function pharmacare_core_add_general_page_meta_box( $page ) {

		$general_tab = $page->add_tab_element(
			array(
				'name'        => 'tab-page',
				'icon'        => 'fa fa-cog',
				'title'       => esc_html__( 'Page Settings', 'pharmacare-core' ),
				'description' => esc_html__( 'General page layout settings', 'pharmacare-core' ),
			)
		);

		$general_tab->add_field_element(
			array(
				'field_type'  => 'color',
				'name'        => 'qodef_page_background_color',
				'title'       => esc_html__( 'Page Background Color', 'pharmacare-core' ),
				'description' => esc_html__( 'Set background color', 'pharmacare-core' ),
			)
		);

        $general_tab->add_field_element(
            array(
                'field_type'    => 'select',
                'name'          => 'qodef_page_border',
                'title'         => esc_html__( 'Page Border', 'pharmacare-core' ),
                'description'   => esc_html__( 'Enable page border', 'pharmacare-core' ),
                'default_value' => '',
                'options'       => pharmacare_core_get_select_type_options_pool( 'yes_no' ),
            )
        );

        $border_section = $general_tab->add_section_element(
            array(
                'name'       => 'qodef_border_section',
                'title'      => esc_html__( 'Page Border Section', 'pharmacare-core' ),
                'dependency' => array(
                    'hide' => array(
                        'qodef_page_border' => array(
                            'values'        => 'no',
                            'default_value' => '',
                        ),
                    ),
                ),
            )
        );

        $border_section->add_field_element(
            array(
                'field_type'  => 'color',
                'name'        => 'qodef_border_color',
                'title'       => esc_html__( 'Border Color', 'pharmacare-core' ),
                'description' => esc_html__( 'Set border color (default is #707070)', 'pharmacare-core' ),
            )
        );

		$general_tab->add_field_element(
			array(
				'field_type'  => 'image',
				'name'        => 'qodef_page_background_image',
				'title'       => esc_html__( 'Page Background Image', 'pharmacare-core' ),
				'description' => esc_html__( 'Set background image', 'pharmacare-core' ),
			)
		);

		$general_tab->add_field_element(
			array(
				'field_type'  => 'select',
				'name'        => 'qodef_page_background_repeat',
				'title'       => esc_html__( 'Page Background Image Repeat', 'pharmacare-core' ),
				'description' => esc_html__( 'Set background image repeat', 'pharmacare-core' ),
				'options'     => array(
					''          => esc_html__( 'Default', 'pharmacare-core' ),
					'no-repeat' => esc_html__( 'No Repeat', 'pharmacare-core' ),
					'repeat'    => esc_html__( 'Repeat', 'pharmacare-core' ),
					'repeat-x'  => esc_html__( 'Repeat-x', 'pharmacare-core' ),
					'repeat-y'  => esc_html__( 'Repeat-y', 'pharmacare-core' ),
				),
			)
		);

		$general_tab->add_field_element(
			array(
				'field_type'  => 'select',
				'name'        => 'qodef_page_background_size',
				'title'       => esc_html__( 'Page Background Image Size', 'pharmacare-core' ),
				'description' => esc_html__( 'Set background image size', 'pharmacare-core' ),
				'options'     => array(
					''        => esc_html__( 'Default', 'pharmacare-core' ),
					'contain' => esc_html__( 'Contain', 'pharmacare-core' ),
					'cover'   => esc_html__( 'Cover', 'pharmacare-core' ),
				),
			)
		);

		$general_tab->add_field_element(
			array(
				'field_type'  => 'select',
				'name'        => 'qodef_page_background_attachment',
				'title'       => esc_html__( 'Page Background Image Attachment', 'pharmacare-core' ),
				'description' => esc_html__( 'Set background image attachment', 'pharmacare-core' ),
				'options'     => array(
					''       => esc_html__( 'Default', 'pharmacare-core' ),
					'fixed'  => esc_html__( 'Fixed', 'pharmacare-core' ),
					'scroll' => esc_html__( 'Scroll', 'pharmacare-core' ),
				),
			)
		);

		$general_tab->add_field_element(
			array(
				'field_type'  => 'text',
				'name'        => 'qodef_page_content_padding',
				'title'       => esc_html__( 'Page Content Padding', 'pharmacare-core' ),
				'description' => esc_html__( 'Set padding that will be applied for page content in format: top right bottom left (e.g. 10px 5px 10px 5px)', 'pharmacare-core' ),
			)
		);

		$general_tab->add_field_element(
			array(
				'field_type'  => 'text',
				'name'        => 'qodef_page_content_padding_mobile',
				'title'       => esc_html__( 'Page Content Padding Mobile', 'pharmacare-core' ),
				'description' => esc_html__( 'Set padding that will be applied for page content on mobile screens (1024px and below) in format: top right bottom left (e.g. 10px 5px 10px 5px)', 'pharmacare-core' ),
			)
		);

		$general_tab->add_field_element(
			array(
				'field_type'    => 'select',
				'name'          => 'qodef_boxed',
				'title'         => esc_html__( 'Boxed Layout', 'pharmacare-core' ),
				'description'   => esc_html__( 'Set boxed layout', 'pharmacare-core' ),
				'default_value' => '',
				'options'       => pharmacare_core_get_select_type_options_pool( 'yes_no' ),
			)
		);

		$boxed_section = $general_tab->add_section_element(
			array(
				'name'       => 'qodef_boxed_section',
				'title'      => esc_html__( 'Boxed Layout Section', 'pharmacare-core' ),
				'dependency' => array(
					'hide' => array(
						'qodef_boxed' => array(
							'values'        => 'no',
							'default_value' => '',
						),
					),
				),
			)
		);

		$boxed_section->add_field_element(
			array(
				'field_type'  => 'color',
				'name'        => 'qodef_boxed_background_color',
				'title'       => esc_html__( 'Boxed Background Color', 'pharmacare-core' ),
				'description' => esc_html__( 'Set boxed background color', 'pharmacare-core' ),
			)
		);

		$boxed_section->add_field_element(
			array(
				'field_type'  => 'image',
				'name'        => 'qodef_boxed_background_pattern',
				'title'       => esc_html__( 'Boxed Background Pattern', 'pharmacare-core' ),
				'description' => esc_html__( 'Set boxed background pattern', 'pharmacare-core' ),
			)
		);

		$boxed_section->add_field_element(
			array(
				'field_type'  => 'select',
				'name'        => 'qodef_boxed_background_pattern_behavior',
				'title'       => esc_html__( 'Boxed Background Pattern Behavior', 'pharmacare-core' ),
				'description' => esc_html__( 'Set boxed background pattern behavior', 'pharmacare-core' ),
				'options'     => array(
					''       => esc_html__( 'Default', 'pharmacare-core' ),
					'fixed'  => esc_html__( 'Fixed', 'pharmacare-core' ),
					'scroll' => esc_html__( 'Scroll', 'pharmacare-core' ),
				),
			)
		);

		$general_tab->add_field_element(
			array(
				'field_type'    => 'select',
				'name'          => 'qodef_passepartout',
				'title'         => esc_html__( 'Passepartout', 'pharmacare-core' ),
				'description'   => esc_html__( 'Enabling this option will display a passepartout around website content', 'pharmacare-core' ),
				'default_value' => '',
				'options'       => pharmacare_core_get_select_type_options_pool( 'yes_no' ),
			)
		);

		$passepartout_section = $general_tab->add_section_element(
			array(
				'name'       => 'qodef_passepartout_section',
				'dependency' => array(
					'hide' => array(
						'qodef_passepartout' => array(
							'values'        => 'no',
							'default_value' => '',
						),
					),
				),
			)
		);

		$passepartout_section->add_field_element(
			array(
				'field_type'  => 'color',
				'name'        => 'qodef_passepartout_color',
				'title'       => esc_html__( 'Passepartout Color', 'pharmacare-core' ),
				'description' => esc_html__( 'Choose background color for passepartout', 'pharmacare-core' ),
			)
		);

		$passepartout_section->add_field_element(
			array(
				'field_type'  => 'image',
				'name'        => 'qodef_passepartout_image',
				'title'       => esc_html__( 'Passepartout Background Image', 'pharmacare-core' ),
				'description' => esc_html__( 'Set background image for passepartout', 'pharmacare-core' ),
			)
		);

		$passepartout_section->add_field_element(
			array(
				'field_type'  => 'text',
				'name'        => 'qodef_passepartout_size',
				'title'       => esc_html__( 'Passepartout Size', 'pharmacare-core' ),
				'description' => esc_html__( 'Enter size amount for passepartout', 'pharmacare-core' ),
				'args'        => array(
					'suffix' => esc_html__( 'px or %', 'pharmacare-core' ),
				),
			)
		);

		$passepartout_section->add_field_element(
			array(
				'field_type'  => 'text',
				'name'        => 'qodef_passepartout_size_responsive',
				'title'       => esc_html__( 'Passepartout Responsive Size', 'pharmacare-core' ),
				'description' => esc_html__( 'Enter size amount for passepartout for smaller screens (1024px and below)', 'pharmacare-core' ),
				'args'        => array(
					'suffix' => esc_html__( 'px or %', 'pharmacare-core' ),
				),
			)
		);

		$general_tab->add_field_element(
			array(
				'field_type'  => 'select',
				'name'        => 'qodef_content_width',
				'title'       => esc_html__( 'Initial Width of Content', 'pharmacare-core' ),
				'description' => esc_html__( 'Choose the initial width of content which is in grid (applies to pages set to "Default Template" and rows set to "In Grid")', 'pharmacare-core' ),
				'options'     => pharmacare_core_get_select_type_options_pool( 'content_width' ),
			)
		);

		$general_tab->add_field_element(
			array(
				'field_type'    => 'yesno',
				'default_value' => 'no',
				'name'          => 'qodef_content_behind_header',
				'title'         => esc_html__( 'Always put content behind header', 'pharmacare-core' ),
				'description'   => esc_html__( 'Enabling this option will put page content behind page header', 'pharmacare-core' ),
			)
		);

		// Hook to include additional options after module options
		do_action( 'pharmacare_core_action_after_general_page_meta_box_map', $general_tab );
	}

	add_action( 'pharmacare_core_action_after_general_meta_box_map', 'pharmacare_core_add_general_page_meta_box', 9 );
}

if ( ! function_exists( 'pharmacare_core_add_general_page_meta_box_callback' ) ) {
	/**
	 * Function that set current meta box callback as general callback functions
	 *
	 * @param array $callbacks
	 *
	 * @return array
	 */
	function pharmacare_core_add_general_page_meta_box_callback( $callbacks ) {
		$callbacks['page'] = 'pharmacare_core_add_general_page_meta_box';

		return $callbacks;
	}

	add_filter( 'pharmacare_core_filter_general_meta_box_callbacks', 'pharmacare_core_add_general_page_meta_box_callback' );
}
