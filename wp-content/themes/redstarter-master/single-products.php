<?php
// echo "single-product";

get_header();

while(have_posts()):the_post();
?>
 <div class="section flex">
    <div class="img-info">
      <img src="<?php the_field('image'); ?>" class="image"/>
      <br>
    </div>
    <div class"info flex-grow-1">
      <h2><?php the_field("product_name"); ?> </h2>
      <p> <?php the_field("product_price"); ?> </p>
      <p> <?php the_field("product_description"); ?> </p>
    </div>
 </div>

<?php
endwhile;
get_footer();
 ?>
