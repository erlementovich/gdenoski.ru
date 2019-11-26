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

<main>
    <div class="container">
		<?php	while ( have_posts() ) : the_post(); ?>
		<h1><? the_title(); ?></h1>
		<?php          
			the_content();
			endwhile;
		?> 
    </div>
</main>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
