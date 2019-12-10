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
    <!--  Default trash  -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
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

    <!--  Temp Swiper  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">

    <script src="https://unpkg.com/swiper/js/swiper.js"></script>
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
    <!--  End Temp Swiper  -->
</head>
<body class="post-<?= get_the_ID(); ?> <?php if (is_account_page()) {
    echo 'account';
                  } ?>">
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