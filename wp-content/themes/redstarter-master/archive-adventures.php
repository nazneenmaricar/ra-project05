<!-- <?php echo "archive-adventures"; ?> -->

<?php get_header();?>

<section class="main flex dir-col align-item-center">
  <h1> LATEST ADVENTURES </h1>
  <div class="grey-line"> </div>
<div class="adv-main padding-top-20 flex dir-row flex-wrap">

<?php while(have_posts()):the_post(); ?>

    <div class="adv-image margin-5px" style='background-image: url("<?php the_field('banner_image');?> ");'>
      <h2> <?php the_title();?> </h2>
      <!-- REMOVE BUTTON TAG AND REPLACE IT WITH HREF -->
      <button type="button" name="button" class="adv-button" onClick="parent.location='<?php the_permalink();?>'"> READ MORE </button>
    </div>


<?php endwhile; ?>
</section>

<?php


// get_sidebar();
get_footer();
 ?>
