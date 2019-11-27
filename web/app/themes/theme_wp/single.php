<?php
	/**
		*
		* @package WordPress
		* @subpackage theme_wp
		* @since theme_wp 1.0
		* Author: gmate
		* 
	*/
	
get_header(); ?>

<h1>Single</h1>

<?php
    while ( have_posts() ) :
        the_post();
        /*
         * Include the post format-specific template for the content. If you want to
         * use this in a child theme, then include a file called content-___.php
         * (where ___ is the post format) and that will be used instead.
         */
        // Previous/next post navigation.
        // If comments are open or we have at least one comment, load up the comment template.
    endwhile;
?>

<?php get_footer(); ?>
