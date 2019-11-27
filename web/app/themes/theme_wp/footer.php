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
            <div class="footer__copy">
                © 2019 <a href="/">www.gdenoski.ru</a>
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
<!--        <p>SQL queries: --><?//= get_num_queries() ?><!--</p>-->
    </div>
</footer>
</body>
</html>