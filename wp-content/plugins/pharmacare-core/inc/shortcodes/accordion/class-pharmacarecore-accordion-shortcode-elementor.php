<?php

class PharmaCareCore_Accordion_Shortcode_Elementor extends PharmaCareCore_Elementor_Widget_Base {

	function __construct( array $data = [], $args = null ) {
		$this->set_shortcode_slug( 'pharmacare_core_accordion' );

		parent::__construct( $data, $args );
	}
}

pharmacare_core_get_elementor_widgets_manager()->register_widget_type( new PharmaCareCore_Accordion_Shortcode_Elementor() );
