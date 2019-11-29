<?php
    add_action( 'woocommerce_before_shop_loop_item_title', function(){
        echo '<div class="socks__inner"><div class="socks__thumb">';
    }, 9 );
    add_action( 'woocommerce_after_shop_loop_item_title', function(){
        echo '</div>';
    }, 11 );
    add_action( 'woocommerce_before_shop_loop_item_title', function() {
        global $product;
        $attachment_ids = $product->get_gallery_image_ids();
        $secondImage = wp_get_attachment_url( $attachment_ids[0] );
        $productTitle = get_the_title();
        echo "<img src='{$secondImage}' alt='{$productTitle}'></div>";
    }, 10);
    remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');
