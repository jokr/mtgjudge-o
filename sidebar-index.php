<?php
/**
 * The Sidebar containing the main widget areas, includes an automated index.
 *
 * @package o
 */
wp_enqueue_script( 'content-table', get_template_directory_uri() . '/js/content-table.js', array( 'jquery' ), '201406', true );

?>
	<div id="secondary" class="widget-area col-lg-3" role="complementary">
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>

			<aside id="archives" class="widget">
				<h1 class="widget-title"><?php _e( 'Archives', 'mtgjudge-o' ); ?></h1>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>

			<aside id="meta" class="widget">
				<h1 class="widget-title"><?php _e( 'Meta', 'mtgjudge-o' ); ?></h1>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside>

		<?php endif; // end sidebar widget area ?>
		<aside id="table-of-contents">
			<nav role="navigation">
				<h1><?php _e( 'Contents', 'mtgjudge-o' ); ?></h1>
			</nav>
		</aside>
	</div><!-- #secondary -->
