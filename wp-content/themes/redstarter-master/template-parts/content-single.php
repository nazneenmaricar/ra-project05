<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article class="entry-content"id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="journal flex dir-col">
		    <div class="journal-img flex dir-col"style="background-image: url('<?php the_post_thumbnail_url('large');?>');">
		      <h1> <?php the_title(); ?> </h1>
		      <h2 class="flex align-self-end"> <?php echo get_the_date();?> /<?php red_starter_comment_count();?>  /<?php the_author();?> </h2>
		    </div>
		</div>
	</header><!-- .entry-header -->

	<div class="content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
