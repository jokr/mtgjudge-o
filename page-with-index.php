<?php
/*
Template Name: Page with Index
*/

wp_enqueue_script( 'content-table', get_template_directory_uri() . '/js/content-table.js', array( 'jquery' ), '201406', true );

get_header(); ?>

	<div id="primary" class="content-area row">
		<main id="main" class="site-main col-md-11 col-md-offset-1" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<div class="row">
					<div class="col-md-8">
						<?php get_template_part( 'content', 'page' ); ?>
					</div>
					<nav role="navigation" id="table-of-contents" class="col-md-3">
						<div class="fixed-wrap">
						<h3><?php _e( 'Contents', 'mtgjudge-o' ); ?></h3>
						</div>
					</nav>
				</div>
				<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main>
		<!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>