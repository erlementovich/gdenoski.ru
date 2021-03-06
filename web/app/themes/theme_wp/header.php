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
<?php
if (is_product()) {
    if (isset($_COOKIE['viewedProd'])) {
        $socksCookie = [];
        foreach ($_COOKIE['viewedProd'] as $viewedProdId) {
            array_push($socksCookie, $viewedProdId);
            if ( count($socksCookie) == 8 && (!in_array( $post->ID, $socksCookie )) ) {
                setcookie('viewedProd[' . $socksCookie[0] . ']', $socksCookie[0], time() - 31556926, '/');
            }
        }
    }
    setcookie('viewedProd[' . $post->ID . ']', $post->ID, time() + 31556926, '/');
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <link rel="shortcut icon" href="<?= get_template_directory_uri() ?>/images/favicon.png" type="image/x-icon">
    
    <?php wp_head(); ?>
    <?php if ( is_front_page() ): ?>
        <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    <?php endif; ?>
    
    <meta property="og:title" content="Где носки" />
    <meta property="og:description" content="Купить носки оптом и в розницу" />
    <meta property="og:url" content="https://www.gdenoski.ru/" />
    <meta property="og:image" content="" />
    
</head>
<body class="post-<?php the_ID(); ?> <?php if (is_account_page()) {
    echo 'account';
                  } ?>">
<header class="header">
    <div class="header__inner container">
        <div class="header__top">
            <div class="header__logo">
                <a href="/">
                    <img src="/app/uploads/2019/12/noski_logo.svg" alt="Где носки логотип">
                </a>
            </div>
            <div class="header__search">
                <?php get_search_form(); ?>
            </div>
            <div class="header__panel">
                <a href="#" class="button button-transparent">Войти</a>
            </div>
        </div>
        <div class="header__bottom">
            <?php
                wp_nav_menu([
                    'menu'            => 'HeaderMenu',
                    'container'       => 'nav',
                    'container_class' => 'header__menu',
                    'container_id'    => 'navbar',
                    'items_wrap'      => '<ul>%3$s</ul>',
                    'menu_id'         => '',
                    'fallback_cb'     => 'wp_page_menu',
                    'theme_location'  => 'top'
                ]);
            ?>
        </div>
        <div class="header__mobile">
            <div class="header__mobile-inner">
                <div class="mobile__logo">
                    <a href="/">
                        <img src="/app/uploads/2019/12/noski_logo.svg" alt="Где носки логотип">
                    </a>
                </div>
                <div class="hamburger"><span></span><span></span><span></span></div>
            </div>
        </div>
    </div>
</header>
<div class="bgshadow"></div>
<div class="header__swipe">
    <div class="swipe__search">
        <?php get_search_form(); ?>
    </div>
    <div class="swipe__menu">
        <?php
            wp_nav_menu([
                'menu'            => 'HeaderMenu',
                'container'       => 'nav',
                'container_class' => 'mobile__menu',
                'container_id'    => 'navbar',
                'items_wrap'      => '<ul>%3$s</ul>',
                'menu_id'         => '',
                'fallback_cb'     => 'wp_page_menu',
                'theme_location'  => 'top'
            ]);
        ?>
    </div>
    <div class="swipe__bottom">
        <div class="swipe__in">
            <a href="#" class="">Войти</a>
        </div>
    </div>
</div>