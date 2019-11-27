<div class="header__bottom">
    <?php
        wp_nav_menu([
            'menu'            => 'HeaderMenu',
            'container'       => 'nav',
            'container_class' => 'header__menu',
            'container_id'    => '',
            'items_wrap'      => '<ul>%3$s</ul>',
            'menu_id'         => '',
            'fallback_cb'     => 'wp_page_menu',
            'theme_location'  => 'top'
        ]);
    ?>
</div>