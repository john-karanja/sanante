<?php

if ( ! function_exists( 'pharmacare_core_add_tabs_shortcode' ) ) {
	/**
	 * Function that add shortcode into shortcodes list for registration
	 *
	 * @param array $shortcodes
	 *
	 * @return array
	 */
	function pharmacare_core_add_tabs_shortcode( $shortcodes ) {
		$shortcodes[] = 'PharmaCareCore_Tabs_Shortcode';
		
		return $shortcodes;
	}
	
	add_filter( 'pharmacare_core_filter_register_shortcodes', 'pharmacare_core_add_tabs_shortcode' );
}

if ( class_exists( 'PharmaCareCore_Shortcode' ) ) {
	class PharmaCareCore_Tabs_Shortcode extends PharmaCareCore_Shortcode {
		
		public function __construct() {
			$this->set_layouts( apply_filters( 'pharmacare_core_filter_tabs_layouts', array() ) );
			
			parent::__construct();
		}
		
		public function map_shortcode() {
			$this->set_shortcode_path( PHARMACARE_CORE_SHORTCODES_URL_PATH . '/tabs' );
			$this->set_base( 'pharmacare_core_tabs' );
			$this->set_name( esc_html__( 'Tabs', 'pharmacare-core' ) );
			$this->set_description( esc_html__( 'Shortcode that adds tabs holder', 'pharmacare-core' ) );
			$this->set_category( esc_html__( 'PharmaCare Core', 'pharmacare-core' ) );
			$this->set_is_parent_shortcode( true );
			$this->set_child_elements( array(
				'pharmacare_core_tabs_child'
			) );
			$this->set_scripts(
				array(
					'jquery-ui-tabs' => array(
						'registered'	=> true
					)
				)
			);

			$options_map = pharmacare_core_get_variations_options_map( $this->get_layouts() );

			$this->set_option( array(
				'field_type'    => 'select',
				'name'          => 'layout',
				'title'         => esc_html__( 'Layout', 'pharmacare-core' ),
				'options'       => $this->get_layouts(),
				'default_value' => $options_map['default_value'],
				'visibility'    => array( 'map_for_page_builder' => $options_map['visibility'] )
			) );
			$this->set_option(
				array(
					'field_type' => 'text',
					'name'       => 'custom_class',
					'title'      => esc_html__( 'Custom Class', 'pharmacare-core' ),
				)
			);
			$this->set_option( array(
				'field_type'    => 'select',
				'name'          => 'orientation',
				'title'         => esc_html__( 'Orientation', 'pharmacare-core' ),
				'options'       => array(
					'horizontal' => esc_html__( 'Horizontal', 'pharmacare-core' ),
					'vertical'   => esc_html__( 'Vertical', 'pharmacare-core' )
				),
				'default_value' => 'horizontal'
			) );
		}
		
		public function load_assets() {
			wp_enqueue_script( 'jquery-ui-tabs' );
		}
		
		public function render( $options, $content = null ) {
			parent::render( $options );
			$atts = $this->get_atts();
			
			$atts['holder_classes'] = $this->get_holder_classes( $atts );
			$atts['tabs_titles']    = $this->get_tabs_titles( $content );
			$atts['content']        = $content;
			$atts['content'] = preg_replace('/\[pharmacare_core_tabs_child/i', '[pharmacare_core_tabs_child layout="'.$atts['layout'].'"', $content);

			return pharmacare_core_get_template_part( 'shortcodes/tabs', 'variations/'.$atts['layout'].'/templates/holder', '', $atts );
		}
		
		private function get_holder_classes( $atts ) {
			$holder_classes = $this->init_holder_classes();
			
			$holder_classes[] = 'qodef-tabs';
			$holder_classes[] = 'clear';
			$holder_classes[] = ! empty( $atts['orientation'] ) ? 'qodef-orientation--' . $atts['orientation'] : '';
			$holder_classes[] = ! empty( $atts['layout'] ) ? 'qodef-layout--' . $atts['layout'] : '';
			
			return implode( ' ', $holder_classes );
		}
		
		private function get_tabs_titles( $content ) {
			// Extract tab titles
			preg_match_all( '/tab_title="([^\"]+)"/i', $content, $titles, PREG_OFFSET_CAPTURE );
			$tab_titles = array();
			
			/**
			 * get tab titles array
			 */
			if ( isset( $titles[0] ) ) {
				$tab_titles = $titles[0];
			}
			
			$tab_title_array = array();
			
			foreach ( $tab_titles as $tab ) {
				preg_match( '/tab_title="([^\"]+)"/i', $tab[0], $tab_matches, PREG_OFFSET_CAPTURE );
				$tab_title_array[] = $tab_matches[1][0];
			}
			
			return $tab_title_array;
		}
	}
}