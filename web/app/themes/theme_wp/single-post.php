<?php
    /**
     * Одиночная запись без шаблона
     */

    get_header();
    $postID = get_the_ID();
?>

<main>
    <div class="container">
        <h1>Одинокая запись: <?php the_title(); ?></h1>
        <?php
            while ( have_posts() ) :
                the_post();
                the_content();

            endwhile;
        ?>
    </div>
</main>
<?php get_footer(); ?>
