<?php

if ( have_posts() ) {
	while ( have_posts() ) :
		the_post();

		// Hook to include additional content before search item
		do_action( 'pharmacare_action_before_search_item' );

		// Include post item
		echo apply_filters( 'pharmacare_filter_search_item_template', pharmacare_get_template_part( 'search', 'templates/parts/post' ), get_the_ID() );

		// Hook to include additional content after search item
		do_action( 'pharmacare_action_after_search_item' );

	endwhile; // End of the loop.
} else {
	// Include global posts not found
	pharmacare_template_part( 'content', 'templates/parts/posts-not-found' );
}

wp_reset_postdata();
