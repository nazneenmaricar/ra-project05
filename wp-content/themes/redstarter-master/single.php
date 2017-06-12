<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */
// echo "Single";
get_header();
?>

<section class="flex">
	<div id="primary" class="content-area flex dir-col flex-grow-1">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php
			get_template_part( 'template-parts/content', 'single' ); ?>
<div class="cont">
			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
</div>
		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<div class="aside">
 <?php
 get_sidebar();
 ?>
</div>
</section>
<?php get_footer(); ?>

<style >
.cont {width: 60%;
			 margin: auto;}
</style>
