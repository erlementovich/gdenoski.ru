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
        <h1>Одиночная страница без шаблона: <?php the_title(); ?></h1>
        <?php
            while ( have_posts() ) :
                the_post();
                the_content();

            endwhile;
        ?>
    </div>
</main>

<?php get_footer(); ?>