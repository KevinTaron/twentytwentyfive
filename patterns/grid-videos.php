<?php
/**
 * Title: Grid with videos
 * Slug: twentytwentyfive/grid-videos
 * Categories: banner, about, featured
 * Description: A grid with videos.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"textAlign":"left","align":"wide","style":{"typography":{"fontSize":"var(--wp--custom--font-size--heading-3)"},"layout":{"selfStretch":"fit","flexSize":null}}} -->
		<h2 class="wp-block-heading alignwide has-text-align-left" style="font-size:var(--wp--custom--font-size--heading-3)">Explore the episodes</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"is-style-pill","fontSize":"small"} -->
		<p class="is-style-pill has-small-font-size">Podcast</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","minimumColumnWidth":"23rem"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:video -->
		<figure class="wp-block-video"></figure>
		<!-- /wp:video -->

		<!-- wp:video -->
		<figure class="wp-block-video"></figure>
		<!-- /wp:video -->

		<!-- wp:video -->
		<figure class="wp-block-video"></figure>
		<!-- /wp:video -->

		<!-- wp:video -->
		<figure class="wp-block-video"></figure>
		<!-- /wp:video -->

		<!-- wp:video -->
		<figure class="wp-block-video"></figure>
		<!-- /wp:video -->

		<!-- wp:video -->
		<figure class="wp-block-video"></figure>
		<!-- /wp:video -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
