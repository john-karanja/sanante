<?php
$title_tag = isset( $title_tag ) && ! empty( $title_tag ) ? $title_tag : 'h2';
?>
<<?php echo qode_essential_addons_framework_sanitize_tags( $title_tag ); ?> itemprop="name" class="qodef-e-title entry-title" <?php qode_essential_addons_framework_inline_style( $this_shortcode->get_title_specific_styles( $params ) ); ?>>
	<a itemprop="url" class="qodef-e-title-link" href="<?php the_permalink(); ?>">
		<?php the_title(); ?>
	</a>
</<?php echo qode_essential_addons_framework_sanitize_tags( $title_tag ); ?>>
