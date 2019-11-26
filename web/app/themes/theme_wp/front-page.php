<?php
	/**
		*
		* @package WordPress
		* @subpackage theme_wp
		* @since theme_wp 1.0
		* Author: gmate
		* 
	*/
	
get_header();


    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => -1
    );

    $loop = new WP_Query( $args );
?>

<main>
    <div class="container">
        <div class="page__title front__title">
            <h1>Где купить носки в Казани?</h1>
            <a href="#" class="button button-black">Все носки</a>
        </div>
        <div class="page__content">
            <?php
                while ( $loop->have_posts() ) : $loop->the_post();
                    global $product;
                    echo '<div class="price_single">'.
                         woocommerce_get_product_thumbnail()
                         .'<div class="price_title"> '.
                         get_the_title()
                         .'</div><div class="price_price">'.
                         $product->get_price_html()
                         .'</div></div>';
                endwhile;

                wp_reset_query();
            ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
