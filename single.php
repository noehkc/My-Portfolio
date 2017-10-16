<?php 
/**
 * The main template file
 * It puts together the home page if no home.php file exists.
 *
 * @package All About Me
 */
 get_header(); ?>


<section id="single-post">
<div class="container" role="main">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
        <div class="single-posts-img"><?php the_post_thumbnail(); ?></div>
        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>

        <div class="entry">
            <?php the_content(); ?>
        </div>

        <p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?></p>
    </div>
    <?php endwhile; endif; ?>

</div><!-- #content -->
</section>
   <?php get_footer(); ?> 
