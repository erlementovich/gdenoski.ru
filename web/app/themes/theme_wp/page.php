<?php
    /**
     * Одиночная страница без шаблона
     */
?>

<?php get_header();
    $postID = get_the_ID();
?>

<main>
    <div class="container">
        <div class="page__title">
            <h1><?php the_title(); ?></h1>
            <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
        </div>
        <?php
            while ( have_posts() ) :
                the_post();
                the_content();

            endwhile;
        ?>
    </div>
</main>

<?php get_footer(); ?>