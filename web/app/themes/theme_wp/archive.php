<?php
    /**
     * Шаблон для author, date, tag
     * Хз, нужен ли ваще
     */
?>

<?php get_header(); ?>
    <main>
        <div class="container">
            <h1>Archive</h1>
            <?php
                while ( have_posts() ) :
                    the_post();
                    the_content();

                endwhile;
            ?>
        </div>
    </main>
<?php get_footer(); ?>