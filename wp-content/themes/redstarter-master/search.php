<?php
/**
 * The template for displaying search results pages.
 *
 * @package RED_Starter_Theme
 */
// echo "search.php";
get_header(); ?>

<section class="flex">
	<section id="primary" class="content-area flex dir-col flex-grow-1">
		<main id="main" class="site-main main form-search" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header border-bottom">
				<h1 class="page-title"><?php printf( esc_html( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'search' ); ?>

			<?php endwhile; ?>

			<?php red_starter_numbered_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<div class="aside">
	<?php get_sidebar(); ?>
</div>
</section>
<?php get_footer(); ?>
