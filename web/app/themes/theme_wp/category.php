<?php
    /**
     * Одиночная категория без шаблона
     */
?>

<?php get_header(); ?>

    <main>
        <div class="container">
            <h1>Одиночная категория без шаблона: <?php the_title(); ?></h1>
            <?php
                while ( have_posts() ) :
                    the_post();
                    the_content();

                endwhile;
            ?>
        </div>
    </main>

<?php get_footer(); ?>