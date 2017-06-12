<?php

/* Custom function for custom post type and taxonomy*/


add_action ("init", "loop_cpt");

function loop_cpt(){
$ar = array(
  "products" => array("type"),
  "adventures"
);

foreach ($ar as $key => $value) {
  //print_r ($cpt);
  if (is_array($value)) {
  create_posttype ($key);
    foreach ($value as $tax) {
        //print_r($tax);
        create_taxonomy($tax, $key);
    }
  }
  else {
    create_posttype($value);
    //creates the cpt without the value
  }
 }
}
function create_posttype($key) {
  $new_string = str_replace(['-', '\\', '/', '*'], ' ', $key); //replaces special characters in the key and slug field)
	register_post_type( $new_string,
		array(
			'labels' => array(
				'name' => __( $key ),
				'singular_name' => __( $key)
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => $new_string),
		)
	);
}
function create_taxonomy ($tax, $key) {
   register_taxonomy( $tax, $key, array (
     'label' => __( $tax ), //it wont create with the custom key value if argument is not passed
        )
   );
}

?>
