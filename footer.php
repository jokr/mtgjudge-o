<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package o
 */
?>

</div><!-- #content -->
</div><!-- #page -->

<footer id="colophon" class="site-footer container" role="contentinfo">
	<div class="site-info row">
		<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'mtgjudge-o' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'mtgjudge-o' ), 'WordPress' ); ?></a>
		<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
	</div>
	<!-- .site-info -->
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
