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
        if ( $product->get_meta( '_number_field', true ) ):
            echo '<div class="socks__discount">-' . $product->get_meta( '_number_field', true ) . '%</div>';
        endif;
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

    /**
     * Slider support
     */
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');

    /**
     * Remove Downloads from account page
     */
    add_filter('woocommerce_account_menu_items', 'custom_remove_downloads_my_account', 999);
    function custom_remove_downloads_my_account($items)
    {
        unset($items['downloads']);
    
        return $items;
    }
    
    /**
     * Adding woocommerce image size
     */
    add_image_size('theme_wp-catalogs', 276, 276, false);
    
    
    /**
     * Custom metabox
     */
    add_action('woocommerce_product_options_reviews', 'art_woo_add_custom_fields');
    function art_woo_add_custom_fields()
    {
        global $product, $post;
        echo '<div class="options_group">';// Группировка полей
        woocommerce_wp_text_input([
            'id'                => '_number_field',
            'label'             => __('Скидка', 'woocommerce'),
            'placeholder'       => 'Введите скидку в процентах',
            'description'       => __('Например "30", для "-30%" (без кавычек)', 'woocommerce'),
            'type'              => 'number',
            'custom_attributes' => [
                'step' => 'any',
                'min'  => '0',
            ],
        ]);
        echo '</div>';
    }
    add_action('woocommerce_process_product_meta', 'art_woo_custom_fields_save', 10);
    function art_woo_custom_fields_save($post_id)
    {
        $woocommerce_number_field = $_POST[ '_number_field' ];
        if (! empty($woocommerce_number_field)) {
            update_post_meta($post_id, '_number_field', esc_attr($woocommerce_number_field));
        }
    }
    // woocommerce_product_options_reviews
    // woocommerce_wp_text_input()
