<?php
$subtitle_tag = qode_essential_addons_get_post_value_through_levels( 'qodef_page_subtitle_tag' );

if ( ! empty( $subtitle ) ) {
	?>
	<<?php echo qode_essential_addons_framework_sanitize_tags( $subtitle_tag ); ?> class="qodef-m-subtitle"><?php echo wp_kses_post( $subtitle ); ?></<?php echo qode_essential_addons_framework_sanitize_tags( $subtitle_tag ); ?>>
<?php } ?>
