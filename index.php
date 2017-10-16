<?php 
/**
 * The main template file
 * It puts together the home page if no home.php file exists.
 *
 * @package NG Folio
 */
 get_header(); ?>
<section>    
    <div class="container-fluid hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex flex-column align-items-center">
                    <h2 class="d-flex justify-content-xl-center">Web Developer San Antonio Texas</h2>
                    <h3 class="d-flex justify-content-xl-center">I specialise in front end technologies - HTML5, CSS3, Javascript, Wordpress</h3>               
                </div>
            </div>
        </div>
        


    </div> 
</section> <!-- End Hero Headline Section -->   

<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <h4>About Me</h4>
            </div>
            <div class="col-md-10">
                <p><span>Hi, I'm Noe</span> I'm an apiring front end developer working towards building a career in the web dev industry. During the day (evening) I work as a customer service specilist for a very cool company helping customers solve problems via email, phone and chat. I spend the majority of my free time practicing what I learn and apply towards advancing it into a career. A little about me, I enjoy watching the San Antonio Spurs, Dallas Cowboys, UFC, Game of Thrones, and Silicon Valley just to name a few. My favorite food is chicken alfredo. I can credit my interest in physics to the movie interstellar for blowing my mind. I'm half way decent at chess, I can hold my own in ping pong and am always up for a game of foosball. Currently starting to get back in shape after watching an episode of one punch man. </p>
                
                <h4>Background</h4>
                <p>I taught my self html when I was 12 around 2000, 2001, I thought it was the coolest thing in the world to be able to make my own dragon ball z, wwe, and San Antonio Spurs fan websites. Some of them even got pretty good traffic. In 2010 I had a defining moment in my life - I really set out to do what it took to begin a career as a web designer / developer. I taught myself XHTML and CSS which soon evolved into HTML5 and CSS3. I also learned how to develop Wordpress themes and worked with JavaScript and the jQuery library. It actually didn't take long to find work once I knew the basics. Don't tell my first client this but when I was hired to develop his psd into a wordpress theme, I was in WAY over my head. Luckily, I didn't let it scare me off. I finished his project and he was so stoked about the job I did that he hired me to do the next version of his site design, and referred me to 2 new clients. In 2013 and 2014 I was hired as a sub contractor for a Search Engine Marketing firm where I was responsible for working with the graphic designer to develop her designs into wordpress themes. Regretfully, I lost my way but I never lost my passion for Web Development. So I'm back, starting over from scratch. And since I commited to begining again, I'm even better than I ever was before.  </p>
            </div>
        </div>
    </div>
</section> <!-- End of About Paragraph -->
    
<section>
    <div class="container-fluid skills">
    <div class="container">
        <div class="row">
            <div class="col-md-12"><h4>My Skills</h4></div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <i class="fa fa-html5" aria-hidden="true"></i> <span>HTML5</span>
                <div class="skill-bg">
                    <div class="skill html">90%</div> 
                </div>
            </div><!-- HTML5 -->  
            <div class="col-md-4">
                            <i class="fa fa-css3" aria-hidden="true"></i> <span>CSS3</span>
                <div class="skill-bg">
                    <div class="skill css">90%</div> 
                </div>
            </div><!-- CSS3 -->         
            <div class="col-md-4">
                            <i class="fa fa-javascript" aria-hidden="true"></i> <span>Javascript</span>
                <div class="skill-bg">
                    <div class="skill javascript">45%</div> 
                </div><!-- Javascript -->  
            </div>     
            <div class="col-md-4">
                <i class="fa fa-html5" aria-hidden="true"></i> <span>Wordpress</span> 
                <div class="skill-bg">
                    <div class="skill wordpress">65%</div> 
                </div>
            </div><!-- Wordpress -->  
            <div class="col-md-4">
                            <i class="fa fa-css3" aria-hidden="true"></i> <span>Photoshop</span>
                <div class="skill-bg">
                    <div class="skill photoshop">70%</div> 
                </div>
            </div>  <!-- Photoshop -->            
            <div class="col-md-4">
                            <i class="fa fa-javascript" aria-hidden="true"></i> <span>Customer service</span>
                <div class="skill-bg">
                    <div class="skill customer-service">99%</div> 
                </div>
            </div><!-- Customer Service -->          
        </div>
    </div>
    </div>
</section><!-- End of Skills Attribute Section -->
    
<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4>Recent Work</h4>
            </div>
            <div class="col-md-9">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <img class="img-fluid" src="http://via.placeholder.com/600x400" />
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="http://via.placeholder.com/600x400" />
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="http://via.placeholder.com/600x400" />
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="http://via.placeholder.com/600x400" />
                    </div>                    
                </div>
        </div>
        </div>
    </div>    
</section> <!-- End of Portfolio -->
    
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 posts">
                <div class="d-flex justify-content-center pb-5"><h4>From The Blog</h4></div>
                <div class="row">
                    <?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
                    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                        <div class="col-md-4">
                            <div class="thumbnail"><img class="img-responsive" src="<?php $img=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); echo $img[0]; ?>" alt="<?php the_title(); ?>"/> </div>   
                            <div class="post">
                                <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                                <p><?php the_excerpt(__('(more…)')); ?></p>
                            </div><!-- End Post -->
                            <div class="meta">
                                <?php the_time('F jS, Y'); ?> | <?php the_category(', ') ?> 
                            </div>
                            </div><!-- End loop -->
                    <?php 
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
                </div>    
            </div>
        </div>
</section><!-- End of Recent Blog Posts -->
   <?php get_footer(); ?> 
