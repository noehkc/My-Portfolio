<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NGFolio
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
        <div class="row">            
            <div class="col-md-12 menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <img src="<?php bloginfo('template_url'); ?>/imgs/logo.png" />
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link scroll" href="#Home">home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link scroll" href="#about">About Me</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link scroll" href="#portfolio">Portfolio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link scroll" href="#contact">Contact</a>
                  </li>
                </ul>
              </div>
            </nav>
                
            </div> <!-- End Menu -->
        </div>
    </div>
</header>  <!-- Logo and Menu -->

