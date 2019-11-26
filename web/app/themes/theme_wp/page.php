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

<?php if ( function_exists('yoast_breadcrumb') )  {yoast_breadcrumb('<div class="breadcrumbs">','</div>');} ?>

<div class="container">
	<main class="content">
		<?php	while ( have_posts() ) : the_post(); ?>
		<h1><? the_title(); ?></h1>
		<?php          
			the_content();
			endwhile;
		?> 
	</main><!-- .content -->
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
