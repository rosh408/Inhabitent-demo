<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php if (has_post_thumbnail()) : ?>
						<?php the_post_thumbnail('large'); ?>
					<?php endif; ?>

					<?php the_title('<h1 class="entry-title">', '</h1>'); ?>

					<div class="entry-meta">
						<?php red_starter_posted_on(); ?> / <?php red_starter_comment_count(); ?> / <?php red_starter_posted_by(); ?>
					</div><!-- .entry-meta -->
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php the_content(); ?>
					<?php
					wp_link_pages(array(
						'before' => '<div class="page-links">' . esc_html('Pages:'),
						'after'  => '</div>',
					));
					?>
				</div><!-- .entry-content -->

				<footer class="entry-footer">
					<?php red_starter_entry_footer(); ?>
					<div class="social-buttons">
							<button><i class="fab fa-facebook-f"></i>&nbsp; Like</button>
							<button><i class="fab fa-twitter"></i>&nbsp; Tweet</button>
							<button><i class="fab fa-pinterest"></i>&nbsp; Pin</button>
						</div>
				</footer><!-- .entry-footer -->
			</article><!-- #post-## -->


			<?php the_post_navigation(); ?>

			<?php
			if (comments_open() || get_comments_number()) :
				comments_template();
			endif;
			?>

		<?php endwhile; 
	?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>