<?php $journal = new WP_Query (array ('posts_per_page'=> 3, 'post_type'=> 'post'));
// echo "home-journal";
?>

<section class="journal flex dir-col align-item-center">
    <h2> INHABITENT JOURNAL </h2>
    <div class="flex dir-row">

<?php while($journal -> have_posts()) : $journal -> the_post();?>

      <div class="entry flex dir-col just-cont-between">
        <img src="<?php  the_post_thumbnail_url($size='post-thumbnail'); ?>" class="entry-img">
        <div class="entry-cont">
          <p> <?php echo get_the_date(); ?> / 3 Comments </p>
          <h2> <?php the_title(); ?> </h2>
          <button type="button" name="button" onClick="parent.location='<?php the_permalink(); ?>'" class="entry-button"> READ ENTRY </button>
        
        </div>
      </div>

<?php endwhile; ?>
  </div>
</section>
