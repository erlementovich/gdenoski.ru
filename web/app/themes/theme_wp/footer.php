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

<?php wp_footer(); ?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <?php get_template_part('template-parts/forms/subscribe-form'); ?>
            </div>
        </div>
        <div class="row footer__columns">
            <?php get_template_part('/template-parts/footer/footer', '1') ?>
            <?php get_template_part('/template-parts/footer/footer', '2') ?>
            <?php get_template_part('/template-parts/footer/footer', '3') ?>
            <?php get_template_part('/template-parts/footer/footer', '4') ?>
        </div>
        <div class="footer__bottom">
            <p>Обращаем внимание, что сайт "gdenoski.ru" по продаже носков, колготок и чулок носит исключительно информационный характер и ни при каких условиях не является публичной офертой, определяемой положениями Статьи 437 (2) ГК РФ.</p>
            <p>gdenoski.ru использует файлы «cookie», с целью персонализации сервисов и повышения удобства пользования веб-сайтом. «Cookie» представляют собой небольшие файлы, содержащие информацию о предыдущих посещениях веб-сайта. Если вы не хотите использовать файлы «cookie», измените настройки браузера.</p>
        </div>
    </div>
    <div class="footer__info">
        <div class="container">
            <div class="row">
                <div class="footer__copy">
                    © 2019, ИП Гарипова Нонна Камоевна, ИНН: 165608813105, ОРГН: 310169004700047
                </div>
                <div class="footer__bottomlist">
                    <div class="bottomlist__item">
                        <a href="#">Статистика</a>
                    </div>
                    <div class="bottomlist__item">
                        <a href="#">Реклама</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>