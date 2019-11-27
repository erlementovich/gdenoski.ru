<?php
	/**
		*
		* @package WordPress
		* @subpackage theme_wp
		* @since theme_wp 1.0
		* Author: gmate
		* 
	*/
?>
	
<?php   get_header(); ?>

<?php
    $products = new WP_Query([
        'post_type'      => 'product',
        'posts_per_page' => -1,
        'orderby'        => 'date',
        'order'          => 'DESC'
    ]);
?>

<main>
    <div class="container">
        <div class="page__title front__title">
            <h1>Где купить носки в Казани?</h1>
            <a href="#" class="button button-black">Все носки</a>
        </div>
        <div class="page__content">
            <?php if ($products) : ?>
            <?php
                while ( $products->have_posts() ) : $products->the_post();
                    global $product;
                    ?>
                    <div class="product__item">
                        <div class="product__thumb"><?= woocommerce_get_product_thumbnail(); ?></div>
                        <div class="product__title"><?= get_the_title(); ?></div>
                        <div class="product__price"><?= $product->get_price_html(); ?></div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
