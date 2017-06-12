<?php $adventure = new WP_Query (array ('posts_per_page'=> 4, 'post_type'=> 'adventures'));
// echo "home-adventure";
?>

<section class="adv flex dir-col align-item-center">
        <h2> LATEST ADVENTURES </h2>
        <div class="adv-cat1 flex">
<?php $i=1; ?>
<?php while($adventure -> have_posts()) : $adventure -> the_post();?>

            <?php switch($i) {
                  case 1: ?>

              <div style='background-image: url("<?php the_field('image'); ?> ");' alt="" class="adv-log height-log1 margin-log1 flex-grow-1 width-50">
                <p class="adv-text">  <?php the_title(); ?> </p>
                <button type="button" name="button" class="adv-button" onClick="parent.location='<?php the_permalink(); ?>'"> READ MORE </button>
            </div>

            <?php $i=2;
                  break;
                  case 2: ?>

            <div class="width-50 flex dir-col">

                <div style= 'background-image: url("<?php the_field('image'); ?>");' alt="" class="adv-log height-log2 margin-log2 flex-grow-1">
                    <p class="adv-text">  <?php the_title(); ?> </p>
                    <button type="button" name="button" class="adv-button" onClick="parent.location='<?php the_permalink(); ?>'"> READ MORE </button>
                </div>

            <?php $i=3;
                  break;
                  case 3: ?>

              <div class="flex dir-row flex-grow-1">

                  <div style= 'background-image: url("<?php the_field('image'); ?>");' alt="" class="adv-log height-log2 width-50 margin-log3 flex-grow-1">
                    <p class="adv-text"> <?php the_title(); ?> </p>
                    <button type="button" name="button" class="adv-button" onClick="parent.location='<?php the_permalink(); ?>'"> READ MORE </button>
                  </div>

              <?php $i=4;
                    break;
                    case 4: ?>

                  <div style='background-image: url("<?php the_field('image'); ?>");' alt="" class="adv-log height-log2 width-50 margin-log4 flex-grow-1">
                      <p class="adv-text">  <?php the_title(); ?> </p>
                      <button type="button" name="button" class="adv-button" onClick="parent.location='<?php the_permalink(); ?>'"> READ MORE </button>
                  </div>
              </div>
              <?php break; ?>
            </div>
            <?php }
                  endwhile; ?>
        </div>
      </div>
          <div class="adv-button-more flex align-self-start">
            <a href="<?php echo site_url().'/adventures'?>" class="more-adv-button">MORE ADVENTURES</a>
          </div>

</section>
</section>
