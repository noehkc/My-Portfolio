
<?php
	//Enqueue Scripts and Styles
function baghira_enqueues() {



	wp_register_style('bootstrap-css', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.min.css', false, '4.0.0-beta.2', null);
	wp_enqueue_style('bootstrap-css');

	wp_register_style('font-awesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', false, '4.7.0', null);
	wp_enqueue_style('font-awesome-css');

  	wp_register_style('baghira-css', get_template_directory_uri() . '/theme/css/baghira.css', false, null);
	wp_enqueue_style( 'main-css' , get_stylesheet_uri() );

	/* Scripts */

	wp_register_script('jquery-3.2.1', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js', false, '3.2.1', true);
	wp_enqueue_script('jquery-3.2.1');

  	wp_register_script('modernizr',  'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', false, '2.8.3', true);
	wp_enqueue_script('modernizr');

	wp_register_script('popper',  'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js', false, '1.12.3', true);
	wp_enqueue_script('popper');

  	wp_register_script('bootstrap-js', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/js/bootstrap.min.js', false, '4.0.0-beta.2', true);
	wp_enqueue_script('bootstrap-js');

	wp_register_script('baghira-js', get_template_directory_uri() . '/theme/js/scripts.js', false, null, true);
	wp_enqueue_script('main-js');

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'baghira_enqueues', 100);

//Require customizer.php functions file 
require get_template_directory() . '/inc/customizer.php';

//add theme menu area 
register_nav_menus (array(
  'primary' => 'Primary Menu',
));


//add thumbnails
add_theme_support( 'post-thumbnails' );

//remove dots from exceprt
function new_excerpt_more( $more ) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

//limit except length
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

//add custom menu
function baghira_custom_new_menu() {
  register_nav_menu('baghira-menu',__( 'Main Menu' ));
}

add_action( 'init', 'baghira_custom_new_menu' );

// Register Custom Navigation Walker
require_once('wp-bootstrap-navwalker.php');

/*Bootstrap navigation version 1
function bootstrap_nav()
{
	wp_nav_menu( array(
            'theme_location'    => 'baghira-menu',
            'depth'             => 2,
            'container'         => 'false',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'items_wrap'		  => '<ul id="%1$s" class="navbar-nav ml-auto mt-2 mt-lg-0 %2$s">%3$s</ul>',
            'walker'            => new wp_bootstrap_navwalker())
    );
}*/

/*Bootstrap navigation version 2*/
function bootstrap_nav()
{
	wp_nav_menu( array(
            'theme_location'    => 'baghira-menu',
            'depth'             => 2,
            'container'         => 'false',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'items_wrap'		  => '<ul id="%1$s" class="navbar-nav mx-auto mt-5 %2$s">%3$s</ul>',
            'walker'            => new wp_bootstrap_navwalker())
    );
}
?>
