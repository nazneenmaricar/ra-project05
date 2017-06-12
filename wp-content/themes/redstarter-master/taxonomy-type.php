<!-- <?php echo "tax-type"; ?> -->
<? get_header(); ?>

<section class="tax">
  <!-- REPLACE strtoupper TO A CLASS AND STYLE IT IN CSS WITH FONT TEXT TRANSFORM -->
  <h1 class="flex just-cont-cent"> <?php echo $term = get_query_var('term');?> </h1>
  <p> <?php echo term_description(); ?> </p>
  <div class="grey-line"> </div>
<section class="tax-entry flex dir-row align-item-center">

  <?php while(have_posts()):the_post(); ?>
    <div class=" flex dir-col padding-right-10px width-25">
      <div class=" each-entry">
        <img src="<?php the_field('product_image'); ?>"  onClick="parent.location='<?php the_permalink()?>'"  class="tax-img">
        <div class="tax-content">
          <p class="flex just-cont-cent"> <?php the_title(); ?>...........<?php the_field('product_price'); ?> </p>
        </div>
     </div>
   </div>

    <?php endwhile; ?>
  </section>
</section>
  <?php get_footer();?>
