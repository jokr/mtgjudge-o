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
		<span class="sep"> | </span>
		<?php printf( __( 'Theme: %1$s by %2$s.', 'mtgjudge-o' ), 'o', '<a href="http://www.aleaiactaest.ch" rel="designer">jokr</a>' ); ?>
	</div>
	<!-- .site-info -->
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
