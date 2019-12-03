<?php
    add_action('woocommerce_before_shop_loop_item_title', function () {
        echo '<div class="socks__inner"><div class="socks__thumb">';
    }, 9);
    add_action('woocommerce_after_shop_loop_item_title', function () {
        echo '</div>';
    }, 11);
    add_action('woocommerce_before_shop_loop_item_title', function () {
        global $product;
        $attachment_ids = $product->get_gallery_image_ids();
        $secondImage = wp_get_attachment_url($attachment_ids[0]);
        $productTitle = get_the_title();
        echo "<img src='{$secondImage}' alt='{$productTitle}'></div>";
    }, 10);
    remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');

    /**
     * Edit woo wrapper
     */
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);

    // First remove default wrapper
    remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
    remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

    // Then add new wrappers
    add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
    add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

    function my_theme_wrapper_start()
    {
        echo '<main class="woocommerce"><div class="container">';
    }

    function my_theme_wrapper_end()
    {
        echo '</div></main>';
    }


    /**
     * Remove sidebar from Single Socks
     */
    add_action('wp', 'bbloomer_remove_sidebar_product_pages');

    function bbloomer_remove_sidebar_product_pages()
    {
        if (is_product()) {
            remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
        }
    }
