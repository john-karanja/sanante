<?php

if ( ! function_exists( 'pharmacare_core_add_general_meta_box' ) ) {
	/**
	 * Function that add general options for this module
	 */
	function pharmacare_core_add_general_meta_box() {
		$qode_framework = qode_framework_get_framework_root();

		$page = $qode_framework->add_options_page(
			array(
				'scope'  => apply_filters( 'pharmacare_core_filter_general_meta_box_scope', array( 'post', 'page' ) ),
				'type'   => 'meta',
				'slug'   => 'general',
				'title'  => esc_html__( 'PharmaCare Settings', 'pharmacare-core' ),
				'layout' => 'tabbed',
			)
		);

		if ( $page ) {

			// Hook to include additional options after module options
			do_action( 'pharmacare_core_action_after_general_meta_box_map', $page );
		}
	}

	add_action( 'pharmacare_core_action_default_meta_boxes_init', 'pharmacare_core_add_general_meta_box' );
}
