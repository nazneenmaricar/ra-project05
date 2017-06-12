<?php register_sidebar( array(
	'name'          => __( 'Header Sidebar', 'theme_text_domain' ),
	'id'            => 'header-sidebar',
	'description'   => '',
        'class'         => '',
	'before_widget' => '<div>',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="header-sidebar">',
) );




	register_sidebar (array(
	'name'          => __( 'Footer Sidebar', 'theme_text_domain' ),
	'id'            => 'footer-sidebar',
	'description'   => '',
        'class'         => '',
	'before_widget' => '<div class="footer-info">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="footer-sidebar">',
	'after_title'   => '</h2>' ));
?>
