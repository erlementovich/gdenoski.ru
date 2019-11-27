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
                <?php get_template_part('/template-parts/elements/logo'); ?>
            </div>
            <div class="header__search">
                <?php get_search_form(); ?>
            </div>
            <div class="header__panel">
                <a href="#" class="button button-transparent">Войти</a>
            </div>
        </div>
        <?php get_template_part('/template-parts/menu'); ?>
    </div>
</header>