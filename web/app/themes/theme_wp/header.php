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
<!DOCTYPE html>
<html lang="ru">
<head>
    <!--  Default trash  -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?= get_template_directory_uri() ?>/images/favicon.png" type="image/x-icon">
    <!--  End default trash  -->

    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>

    <!-- OpenGraph -->
    <meta property="og:title" content="Где носки" />
    <meta property="og:description" content="Купить носки оптом и в розницу" />
    <meta property="og:url" content="https://www.gdenoski.ru/" />
    <meta property="og:image" content="" />
    <!-- End OpenGraph -->
</head>
<body>
<header class="header">
    <div class="header__inner container">
        <div class="header__top">
            <div class="header__logo">
                <a href="/">
                    <img src="/app/uploads/2019/11/noski_logo.svg" alt="Где носки логотип">
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
                    'container'       => 'nav',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
                    'container_class' => 'header__menu',              // (string) class контейнера (div тега)
                    'container_id'    => '',              // (string) id контейнера (div тега)
                    'items_wrap'      => '<ul>%3$s</ul>',
                    'menu_id'         => '',              // (string) id самого меню (ul тега)
                    'fallback_cb'     => 'wp_page_menu',
                    'theme_location'  => 'top'
                ]);
            ?>
        </div>
    </div>
</header>