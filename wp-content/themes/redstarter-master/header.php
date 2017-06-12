<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */
// echo "homepage";
?>
<?php
// foreach ($variable as $key => $value):
  ?>

 <?php
// endforeach;
 ?>
 <!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



	<?php wp_head(); ?>
	</head>



	<body <?php body_class(); ?>>

      <?php
      $image = new camp_banner();
      ?>

		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div> <!-- .site-branding -->

				<div class="banner">
						<nav id="site-navigation" class="main-navigation" role="navigation">
							<div class="top-nav">
								<div class="logo-img <?php echo $image->logo_imgs()?>" onClick="parent.location='http://localhost/ra_project05/'"> <?php  dynamic_sidebar('header-sidebar');?> </div>

								<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
                <div class="flex">
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                <div id="search-nav" class="flex">
								<?php get_search_form(); ?>
							   </div>
                    <div class="fa fa-search flex align-item-center" id="serach-icon" aria-hidden="true">
                    </div>
              </div>

							</div>
					</nav><!-- #site-navigation -->
				</div>

			</header><!-- #masthead -->

			<div id="content" class="site-content">
