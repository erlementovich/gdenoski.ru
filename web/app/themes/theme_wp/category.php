<?php
    /**
     * Одиночная категория без шаблона
     */
?>

<?php get_header(); ?>

    <main>
        <div class="container">
            <div class="page__title">
                <h1><?= single_cat_title( '', false ); ?></h1>
                <?php if (function_exists('kama_breadcrumbs')) {
                    kama_breadcrumbs();
                } ?>
            </div>
            <section class="blog__wrap">
                <?php while (have_posts()) :
                    the_post(); ?>
                    <?php foreach ($posts as $post) : ?>
                        <?php setup_postdata($post); ?>
                    <a class="blog__item" href="<?php the_permalink(); ?>">
                        <div class="blog__inner">
                            <div class="blog__thumb"> <?php the_post_thumbnail(); ?> </div>
                            <div class="blog__title"> <?php the_title(); ?> </div>
                            <div class="blog__excerpt"> <?php the_excerpt(); ?> </div>
                        </div>
                    </a>
                    <?php endforeach; ?>
                <?php endwhile; ?>
            </section>
        </div>
    </main>

<?php get_footer(); ?>