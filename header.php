<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Baghira
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>

<div class="container-fluid header">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <?php if ( has_custom_logo() ){
                        the_custom_logo();
                    }else { ?> 
                        <h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
                    <?php } ?>            
            </div>
            
            <div class="col-8 social-buttons d-flex justify-content-end">
                <ul>
                    <li><a href="<?php echo get_theme_mod('baghira_add_fb_link'); ?>"><i class="social-icon fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="<?php echo get_theme_mod('baghira_add_twitter_link'); ?>"><i class="social-icon fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="<?php echo get_theme_mod('baghira_add_instagram_link'); ?>"><i class="social-icon fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="<?php echo get_theme_mod('baghira_add_youtube_link'); ?>"><i class="social-icon fa fa-youtube" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div> 

           <nav class="navbar navbar-expand-lg">
              <div class="container">
                    <button class="navbar-toggler mt-5 mx-auto" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars toggle-button" aria-hidden="true"></i>
                    </button>                                   
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <?php bootstrap_nav(); ?>  <! -- Bootstrap Walker Nav -- >
                </div>
              </div>
            </nav>        

    </div> 
</div>
    


</header>  <!-- Logo and Menu -->
<!--Nav Version 1
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <div class="navbar-brand">
            <?php if ( has_custom_logo() ){
                    the_custom_logo();
                }else { ?> 
                    <h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
                <?php } ?>
            
            
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars toggle-button" aria-hidden="true"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <?php bootstrap_nav(); ?>  <! -- Bootstrap Walker Nav -- >
        </div>
      </div>
    </nav>
-->
    <div class="container">
    
    <div class="row">
    
    <div class="col-md-12"><h1>Hello World</h1></div>
    </div>    
    
    </div>