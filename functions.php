
<?php
/* enqueue styles and scripts */
function jpen_enqueue_assets() {
  
  /* theme's primary style.css file */
  wp_enqueue_style( 'main-css' , get_stylesheet_uri() );
  /* template's primary css file */
  /* boostrap resources from theme files */
    
  wp_enqueue_style( 'bootstrap-css' , get_template_directory_uri() . '/css/bootstrap.min.css' );
  wp_enqueue_script( 'jquery-js' , get_template_directory_uri() . '/js/jquery.slim.min.js' , array( 'jquery' ) , false , true );
  wp_enqueue_script( 'bootstrap-js' , get_template_directory_uri() . '/js/bootstrap.min.js' , array( 'jquery' ) , false , true );
  wp_enqueue_script( 'scripts-js' , get_template_directory_uri() . '/js/scripts.js' , array( 'jquery' ) , false , true );
}
add_action( 'wp_enqueue_scripts' , 'jpen_enqueue_assets' );

/* add theme menu area */
register_nav_menus (array(
  'primary' => 'Primary Menu',
));


/*add thumbnails*/
add_theme_support( 'post-thumbnails' );

/*remove dots from exceprt*/
function new_excerpt_more( $more ) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

/*limit except length*/
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
?>