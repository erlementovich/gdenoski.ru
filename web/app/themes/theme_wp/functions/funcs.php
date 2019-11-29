<?php
    /** Remove Gutenberg styles */
    function wpassist_remove_block_library_css() {
        wp_dequeue_style('wp-block-library');
    }
    add_action('wp_enqueue_scripts', 'wpassist_remove_block_library_css');

    /** Disable Gutenberg */
    add_filter('use_block_editor_for_post', '__return_false', 10);

    /**
     *  Remove trash from wp_head: feed, shortlink
     ************************************************************************************************/
    function mw_clear_wp_head() {
        add_filter('xmlrpc_enabled', '__return_false');
        remove_action('wp_head', 'feed_links', 2); // Удаляет ссылки RSS-лент записи и комментариев
        remove_action('wp_head', 'feed_links_extra', 3); // Удаляет ссылки RSS-лент категорий и архивов

        remove_action('wp_head', 'rsd_link'); // Удаляет RSD ссылку для удаленной публикации
        remove_action('wp_head', 'wlwmanifest_link'); // Удаляет ссылку Windows для Live Writer
        remove_action('wp_head', 'wp_generator'); // Удаляет версию WordPress

        remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0); // Удаляет короткую ссылку
        remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0); // Удаляет ссылки на предыдущую и следующую статьи
    }
    add_action('wp_head', 'mw_clear_wp_head', 1);

    /** Remove emoji */
    if ('Отключаем Emojis в WordPress') {
        /**
         * Disable the emoji's
         */
        function disable_emojis() {
            remove_action('wp_head', 'print_emoji_detection_script', 7);
            remove_action('admin_print_scripts', 'print_emoji_detection_script');
            remove_action('wp_print_styles', 'print_emoji_styles');
            remove_action('admin_print_styles', 'print_emoji_styles');
            remove_filter('the_content_feed', 'wp_staticize_emoji');
            remove_filter('comment_text_rss', 'wp_staticize_emoji');
            remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
            add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
            add_filter('wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2);
        }
        add_action('init', 'disable_emojis');

        /**
         * Filter function used to remove the tinymce emoji plugin.
         *
         * @param    array  $plugins
         * @return   array             Difference betwen the two arrays
         */
        function disable_emojis_tinymce($plugins)
        {
            if (is_array($plugins)) {
                return array_diff($plugins, array( 'wpemoji' ));
            }

            return array();
        }

        /**
         * Remove emoji CDN hostname from DNS prefetching hints.
         *
         * @param  array  $urls          URLs to print for resource hints.
         * @param  string $relation_type The relation type the URLs are printed for.
         * @return array                 Difference betwen the two arrays.
         */
        function disable_emojis_remove_dns_prefetch($urls, $relation_type) {
            if ('dns-prefetch' == $relation_type) {
                // Strip out any URLs referencing the WordPress.org emoji location
                $emoji_svg_url_bit = 'https://s.w.org/images/core/emoji/';
                foreach ($urls as $key => $url) {
                    if (strpos($url, $emoji_svg_url_bit) !== false) {
                        unset($urls[$key]);
                    }
                }
            }
            return $urls;
        }
    }

    /** Upload SVG */
    function add_file_types_to_uploads( $file_types ) {
        $new_filetypes        = array();
        $new_filetypes['svg'] = 'image/svg+xml';
        $file_types           = array_merge( $file_types, $new_filetypes );

        return $file_types;
    }
    add_action( 'upload_mimes', 'add_file_types_to_uploads' );

    /** Load styles */
    add_action('wp_enqueue_scripts', 'loadMainStyles');
    function loadMainStyles() {
        wp_enqueue_style('style-name', get_stylesheet_uri());
        wp_enqueue_script('script-name', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true);
    }

    /** Disable wp-embed.js */
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('wp_head', 'wp_oembed_add_host_js');

    /** Enable custom menu support */
    register_nav_menus([
        'top'    => 'Меню в шапке'    //Название месторасположения меню в шаблоне
    ]);



    /**
     * Woocommerce settings
     */
    /**
     * Custom currency and currency symbol
     */
    add_filter( 'woocommerce_currencies', 'add_my_currency' );

    function add_my_currency( $currencies ) {
        $currencies['ABC'] = __( 'Рубли', 'woocommerce' );
        return $currencies;
    }

    add_filter('woocommerce_currency_symbol', 'add_my_currency_symbol', 10, 2);
    function add_my_currency_symbol( $currency_symbol, $currency ) {
        switch( $currency ) {
            case 'ABC': $currency_symbol = 'руб.'; break;
        }
        return $currency_symbol;
    }

    add_action( 'after_setup_theme', 'woocommerce_support' );
    function woocommerce_support() {
        add_theme_support( 'woocommerce' );
    }


    /**
     * Sets the extension and mime type for .webp files.
     *
     * @param array  $wp_check_filetype_and_ext File data array containing 'ext', 'type', and
     *                                          'proper_filename' keys.
     * @param string $file                      Full path to the file.
     * @param string $filename                  The name of the file (may differ from $file due to
     *                                          $file being in a tmp directory).
     * @param array  $mimes                     Key is the file extension with value as the mime type.
     */
    add_filter( 'wp_check_filetype_and_ext', 'wpse_file_and_ext_webp', 10, 4 );
    function wpse_file_and_ext_webp( $types, $file, $filename, $mimes ) {
        if ( false !== strpos( $filename, '.webp' ) ) {
            $types['ext'] = 'webp';
            $types['type'] = 'image/webp';
        }

        return $types;
    }

    /**
     * Adds webp filetype to allowed mimes
     *
     * @see https://codex.wordpress.org/Plugin_API/Filter_Reference/upload_mimes
     *
     * @param array $mimes Mime types keyed by the file extension regex corresponding to
     *                     those types. 'swf' and 'exe' removed from full list. 'htm|html' also
     *                     removed depending on '$user' capabilities.
     *
     * @return array
     */
    add_filter( 'upload_mimes', 'wpse_mime_types_webp' );
    function wpse_mime_types_webp( $mimes ) {
        $mimes['webp'] = 'image/webp';

        return $mimes;
    }


    /**
     * Replace [...] with ... in post excerpt
     */
    add_filter('excerpt_more', function($more) {
        return '...';
    });

    /**
     * Change size of post excerpt
     */
    add_filter( 'excerpt_length', function(){
        return 20;
    } );


    /**
     * Disable woocommerce CSS
     */
    add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );