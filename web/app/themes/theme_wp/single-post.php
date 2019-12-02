<?php
    /**
     * Одиночная запись без шаблона
     */

    get_header();
    $postID = get_the_ID();
?>

<main>
    <div class="container">
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
        <?php while ( have_posts() ) :
            the_post(); ?>
            <div class="singlepost">
                <div class="singlepost__thumb"><?php the_post_thumbnail(); ?></div>
                <div class="singlepost__title"><h1><?php the_title(); ?></h1></div>
                <div class="singlepost__content"><?php the_content(); ?></div>
            </div>
            <?php endwhile; ?>
    </div>
</main>
<?php get_footer(); ?>
