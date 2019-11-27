<?php
    /**
     * Вывод блога
     */
?>

<?php get_header(); ?>
<main>
    <div class="container">
        <h1>Блог: <?php the_title(); ?></h1>
        <?php
            while ( have_posts() ) :
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail();
                } else {
                    echo 'has no thumb ';
                }
                    the_post();
                ?>
                <a href="<?= get_the_permalink(); ?>">
                    <?php
                        the_title();
                    ?>
                </a>
                <?php
                    the_content();
                ?>
                <hr/>
                <?php
            endwhile;
            wp_reset_postdata();
        ?>
    </div>
</main>
<?php get_footer(); ?>