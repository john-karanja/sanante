<?php

class PharmaCareCore_Standard_Mobile_Header extends PharmaCareCore_Mobile_Header {
	private static $instance;

	public function __construct() {
		$this->set_layout( 'standard' );
		$this->default_header_height = 70;

		parent::__construct();
	}

	/**
	 * @return PharmaCareCore_Standard_Mobile_Header
	 */
	public static function get_instance() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}

		return self::$instance;
	}
}
