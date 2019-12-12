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
                <div class="subscribe">
                    <div class="subscribe__title">Подпишитесь на акции и специальные предложения</div>
                    <form class="subscribe__form" method="POST">
                        <input type="email" name="subscribe__email" placeholder="Электронная почта" class="input__email">
                        <input type="submit" value="Подписаться" class="button-submit">
                    </form>
                </div>
            </div>
        </div>
        <div class="row footer__columns">
            <div class="col-3">
                <div class="footer__coltitle">Где носки</div>
                <div class="footer__column">
                    <ul>
                        <li><a href="#">Отследить заказ</a></li>
                        <li><a href="#">О компании</a></li>
                        <li><a href="#">Помощь</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-3">
                <div class="footer__coltitle">Магазин носков</div>
                <div class="footer__column">
                    <ul>
                        <li><a href="#">Мужские носки</a></li>
                        <li><a href="#">Женские носки</a></li>
                        <li><a href="#">Детские носки</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-3">
                <div class="footer__coltitle">Оптовые продажи</div>
                <div class="footer__column">
                    <ul>
                        <li><a href="#">Носки оптом</a></li>
                        <li><a href="#">Носки на заказ</a></li>
                        <li><a href="#">Конструктор заказа носков</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-3">
                <div class="footer__coltitle">Заголовок</div>
                <div class="footer__column">
                    <ul>
                        <li><a href="#">Пункт</a></li>
                        <li><a href="#">Пункт</a></li>
                        <li><a href="#">Пункт</a></li>
                    </ul>
                </div>
            </div>
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
<?php if ( is_front_page() ): ?>
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">

    <script src="https://unpkg.com/swiper/js/swiper.js"></script>
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
    <script>
        /**
         * Init slider
         */
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 'auto',
            spaceBetween: 20,
            loop: true,
            lazy: {
                loadPrevNext: true,
            },
            speed: 600,
            navigation: {
                prevEl: '.bill__swipe-prev',
                nextEl: '.bill__swipe-next'
            },
            slideToClickedSlide: true,
            on: {
                slideChange: function () {
                    jQuery(function ($) {
                        let $curSlide = $('[data-swiper-slide-index="' + swiper.realIndex + '"]');
                        $curSlide.find('video').each(function () {
                            this.play();
                        });
    
                        var prevIn = parseInt(swiper.previousIndex-6);
                        let $prevSlide = $('[data-swiper-slide-index="' + prevIn + '"]');
                        $prevSlide.find('video').each(function () {
                            this.pause();
                        });
                    });
                }
            }
        });
    </script>
<?php endif; ?>
</body>
</html>