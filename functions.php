
<?php
/* enqueue styles and scripts */
function jpen_enqueue_assets() {
  
  /* theme's primary style.css file */
  wp_enqueue_style( 'main-css' , get_stylesheet_uri() );
  /* template's primary css file */
  /* boostrap resources from theme files */
  wp_enqueue_style( 'bootstrap-css' , get_template_directory_uri() . '/css/bootstrap.min.css' );
  wp_enqueue_script( 'bootstrap-js' , get_template_directory_uri() . '/js/bootstrap.min.js' , array( 'jquery' ) , false , true );
}
add_action( 'wp_enqueue_scripts' , 'jpen_enqueue_assets' );

/* add theme menu area */
register_nav_menus (array(
  'primary' => 'Primary Menu',
));

?>