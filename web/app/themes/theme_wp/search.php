<?php
	/**
     * Страница вывода результатов поиска
	*/
	
get_header(); ?>

<main>
    <div class="container">
        <section id="primary" class="content-area">
            <div id="content" class="site-content">

                <?php if ( have_posts() ) : ?>

                    <header class="page-header">
                        <h1 class="page-title">Вот что нашлось по запросу: <?= get_search_query(); ?></h1>
                    </header><!-- .page-header -->


                    <?php /* Start the Loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>

                        <a href="<?= get_the_permalink(); ?>">
                            <div class="product__item">
                                <div class="product__thumb"><?= woocommerce_get_product_thumbnail(); ?></div>
                                <div class="product__title"><?= get_the_title(); ?></div>
                                <div class="product__price"><?= $product->get_price_html(); ?></div>
                            </div>
                        </a>

                    <?php endwhile; ?>

                <?php else : ?>
                    <h1 class="page-title">Ничего не удалось найти по запросу: <?= get_search_query(); ?></h1>
                <?php endif; ?>

            </div><!-- #content .site-content -->
        </section><!-- #primary .content-area -->
    </div>
</main>

<?php get_footer(); ?>
