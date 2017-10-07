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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4"><h1>Noe Garcia</h1></div> <!-- Logo -->
            
            <div class="col-md-8">
                <nav class="navbar navbar-expand-lg navbar-light">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button><!-- Responsive Toggle Button -->
                  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Portfolio</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                      </li>
                    </ul>
                  </div>
                </nav><!-- Bootstrap Menu -->
            </div> <!-- End Menu -->
        </div>
    </div>
</section>  <!-- Logo and Menu -->

<section>    
    <div class="container-fluid no-gutter hero">
        <h1 class="border-bottom d-flex justify-content-center">Web Developer San Antonio Texas</h1>
        <h2 class="d-flex justify-content-center">I specialise in front end technologies - HTML5, CSS3, Javascript, Wordpress</h2>
    </div> 
</section> <!-- End Hero Headline Section -->   

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <h2>About Me</h2>
            </div>
            <div class="col-md-10">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget ultrices lectus, mollis tempor augue. Nam placerat lectus velit, nec blandit nisl scelerisque et. Aenean eget ultrices diam. Morbi sit amet ex dolor. Sed orci est, vehicula eu massa a, aliquam sollicitudin ex. Aliquam tempus tristique odio id lacinia. Donec finibus fermentum felis in imperdiet. Pellentesque tristique dolor felis, ac molestie ex pulvinar a. Morbi est lacus, aliquet id blandit ac, posuere id massa. Cras libero lorem, accumsan quis augue non, commodo volutpat velit. Phasellus ultricies massa ac pulvinar suscipit. Praesent pellentesque tincidunt ultrices. Aliquam pulvinar nulla sit amet erat consequat iaculis. Aenean pharetra non nunc ac tempor. Aliquam erat volutpat. Mauris pellentesque augue nec vulputate laoreet.</p>
            </div>
        </div>
    </div>
</section> <!-- End of About Paragraph -->
    
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12"><h2>Skills That Pay The Bills</h2></div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <i class="fa fa-html5" aria-hidden="true"></i>HTML5
                <div class="skill-bg">
                    <div class="skill html">90%</div> 
                </div>
            </div><!-- HTML5 -->  
            <div class="col-md-4">
                            <i class="fa fa-css3" aria-hidden="true"></i> CSS // Favorite Pre-processor - SASS; Favorite Framework - Bootstrap 4
                <div class="skill-bg">
                    <div class="skill css">90%</div> 
                </div>
            </div><!-- CSS3 -->         
            <div class="col-md-4">
                            <i class="fa fa-javascript" aria-hidden="true"></i> Javascript // jQuery, react.js
                <div class="skill-bg">
                    <div class="skill javascript">45%</div> 
                </div><!-- Javascript -->  
            </div>     
            <div class="col-md-4">
                <i class="fa fa-html5" aria-hidden="true"></i>Wordpress // 
                <div class="skill-bg">
                    <div class="skill wordpress">65%</div> 
                </div>
            </div><!-- Wordpress -->  
            <div class="col-md-4">
                            <i class="fa fa-css3" aria-hidden="true"></i> Photoshop
                <div class="skill-bg">
                    <div class="skill photoshop">70%</div> 
                </div>
            </div>  <!-- Photoshop -->            
            <div class="col-md-4">
                            <i class="fa fa-javascript" aria-hidden="true"></i> Customer Service
                <div class="skill-bg">
                    <div class="skill customer-service">99%</div> 
                </div>
            </div><!-- Customer Service -->          
            <p class="">If I was a game character in a sports game my skills attribute would be <strong>76.5</strong></p>
        </div>
    </div>
</section><!-- End of Skills Attribute Section -->
    
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <h2>View My Recent Work</h2>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <img src="http://via.placeholder.com/750x450" />
                    </div>
                    <div class="col-md-6">
                        <img src="http://via.placeholder.com/750x450" />
                    </div>
                    <div class="col-md-6">
                        <img src="http://via.placeholder.com/750x450" />
                    </div>
                    <div class="col-md-6">
                        <img src="http://via.placeholder.com/750x450" />
                    </div>                    
                </div>
        </div>
        </div>
    </div>    
</section> <!-- End of About Paragraph -->
    <?php wp_footer(); ?>
<script src="https://use.fontawesome.com/2711753928.js"></script>
</body>
</html>