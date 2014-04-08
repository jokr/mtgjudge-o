<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package o
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function mtgjudge_o_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'mtgjudge_o_jetpack_setup' );
