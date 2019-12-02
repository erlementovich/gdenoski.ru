<?php
    /**
     * Вывод блога
     */
?>

<?php get_header();

    $posts = get_posts([
       'post_type'      => 'post',
       'numberposts'    => -1
    ]);
?>
<main>
    <div class="container">
        <div class="page__title">
            <h1>Блог</h1>
            <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
        </div>
        <section class="blog__wrap">
            <?php if ( $posts ) : ?>
                <?php foreach ( $posts as $post ) : ?>
                    <?php setup_postdata( $post ); ?>
                    <a class="blog__item" href="<?php the_permalink(); ?>">
                        <div class="blog__inner">
                            <div class="blog__thumb"> <?php the_post_thumbnail(); ?> </div>
                            <div class="blog__title"> <?php the_title(); ?> </div>
                            <div class="blog__excerpt"> <?php the_excerpt(); ?> </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </section>
    </div>
</main>
<?php get_footer(); ?>