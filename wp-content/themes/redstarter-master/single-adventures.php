<!-- <?php echo "single-adevnture"; ?> -->
<?php

get_header();

while(have_posts()):the_post();
?>

<section class="single-adv-main">
  <!-- image is banner image -->
  <article class="adv-blog flex dir-col">
    <h2><?php the_field("title"); ?> </h2>
    <h4><?php the_field("author"); ?> </h4>
    <p><?php the_field("content"); ?> </p>
  </article>
</section>

<?php
endwhile;
get_footer();
 ?>
