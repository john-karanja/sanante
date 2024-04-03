<?php

if ( ! function_exists( 'pharmacare_core_add_pharmacare_spinner_layout_option' ) ) {
    /**
     * Function that set new value into page spinner layout options map
     *
     * @param array $layouts - module layouts
     *
     * @return array
     */
    function pharmacare_core_add_pharmacare_spinner_layout_option( $layouts ) {
        $layouts['pharmacare'] = esc_html__( 'PharmaCare', 'pharmacare-core' );

        return $layouts;
    }

    add_filter( 'pharmacare_core_filter_page_spinner_layout_options', 'pharmacare_core_add_pharmacare_spinner_layout_option' );
}
