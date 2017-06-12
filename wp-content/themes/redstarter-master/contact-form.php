<!-- <?php /* Template Name: Contact-Form */ ?> -->
<!-- <?php echo "page-contact" ?> -->
<?php get_header(); ?>

<content class="flex">
  <div class=" flex dir-col flex-grow-1">

<?php while(have_posts()):the_post();?>


    <div class="contact-main">
    <?php
     get_template_part( 'template-parts/content', 'page' );
     ?>

    </div>
    <?php endwhile; ?>
  </div>
<div class="aside">
  <?php get_sidebar(); ?>
</div>
</content>
<?php
get_footer();
 ?>
