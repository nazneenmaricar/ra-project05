<!-- <?php echo "home.php";?> -->
<?php get_header();?>

<section class="flex">
  <div class="flex dir-col flex-grow-1">

<?php while( have_posts() ) : the_post();?>
<div class="entry-content journal flex dir-col">
    <div class="journal-img flex dir-col"style="background-image: url('<?php the_post_thumbnail_url('large');?>');">
      <h1> <?php the_title(); ?> </h1>
      <h2 class="flex align-self-end"> <?php echo get_the_date(); ?> /<?php red_starter_comment_count(); ?>  /<?php the_author(); ?> </h2>
    </div>
    <?php the_excerpt();?>
    <button type="button" name="button"
    onClick="parent.location='<?php the_permalink()?>'" class="button-jour flex align-self-start"> READ MORE &rarr;</button>
</div>
<?php endwhile; ?>
</div>
<div class="aside">
  <?php get_sidebar(); ?>
</div>
</section>
<?php get_footer();?>



<style>
.button-jour{background-color: white;
             padding: 10px 24px;
             border: 1px solid black;
             color: black;}
</style>
