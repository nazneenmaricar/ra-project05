<section class="main">
      <section class="shop-stuff flex dir-col align-item-center">
        <h2> SHOP STUFF </h2>
        <div class="stuffs flex dir-row">
<?php
$terms = get_terms([
  'taxonomy' =>type,
  'hide_empty' => false,
]);

foreach ($terms as $term){ ?>

          <div class="stuff-cat flex dir-col align-item-center">
            <img src="<?php echo get_bloginfo('stylesheet_directory')?>/assets/images/product-type-icons/<?php echo $term->name ?>.svg" alt="Do Stuff Icon">
            <p class="text-cent"> <?php echo $term->description ?> </p>
            <button type="button" name="button" class="shop-button flex" onClick="parent.location=' http://localhost/ra_project05/type/<?php echo $term->name ?>/'"> <?php echo $term->name ?> STUFF</button>
          </div>
          <?php } ?>
        </div>
      </section>
<!-- http://localhost/ra_project05/?type= -->
