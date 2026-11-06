<?php
/**
 * Product search uses the shop layout. Everything else uses the fallback.
 */
if ( isset( $_GET['post_type'] ) && 'product' === $_GET['post_type'] && function_exists( 'wc_get_products' ) ) {
	$almanac_template = locate_template( 'archive-product.php' );
	if ( $almanac_template ) {
		require $almanac_template;
		return;
	}
}
$almanac_template = locate_template( 'index.php' );
if ( $almanac_template ) {
	require $almanac_template;
}
