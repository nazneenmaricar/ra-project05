<!-- <?php echo "archive-products"; ?> -->

<?php get_header();
$products = new WP_Query( array( 'posts_per_page' => 16,'post_type' => 'products') );
$terms = get_terms([
  'taxonomy' =>type,
  'hide_empty' => false,
]);?>

  <section class="prod flex dir-col ">
      <h1 class="flex just-cont-cent">SHOP STUFF</h1>
      <ul class="flex just-cont-between">

<?php foreach ($terms as $term){ ?>
  <li><a href='<?php echo get_term_link($term->term_id)?>'> <?php echo $term->name;?> </a> </li> <?php } ?> </ul>


  <div class="grey-line"> </div>
    <section class="prod-entry flex just-cont-cent row-wrap">
<?php while($products->have_posts()):$products->the_post(); ?>

  <div class=" each-prod flex dir-col">
    <div>
      <!-- ADD HREF TO THE IMAGE TAG AND REMOVE THE ONCLICK -->
        <img src="<?php the_field('product_image'); ?>"  onClick="parent.location='<?php the_permalink()?>'"  class="prod-img">

         <div class="prod-content">
           <p class="flex just-cont-cent"> <?php the_field('product_name'); ?>...........<?php the_field('product_price'); ?> </p>
         </div>
    </div>
  </div>
  <?php endwhile; ?>
</section>
</section>
<?php get_footer(); ?>
