<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>
	<!-- <?php dynamic_sidebar('footer-sidebar-id'); ?> -->
			</div><!-- #content -->

			<footer class="footer-image flex">
		    <section class=" margin-auto">
		        <div class="info flex dir-row">
		          <?php  dynamic_sidebar('footer-sidebar');?>
		         </div>
		      <div class="text-white text-center">
		        <p >COPYRIGHT  © <?php echo date("Y"); ?> INHABITENT</p>
		      </div>
		    </section>
		  </footer>
		</div>
		<!-- #page -->

		<?php wp_footer(); ?>


		<style>
		.footer-image {
		                background-image: url("<?php echo get_bloginfo('stylesheet_directory')?>/assets/images/dark-wood.png");
		                height: auto;
		                background-size: cover;
		                background-repeat: no-repeat;}

		</style>
	</body>
</html>
