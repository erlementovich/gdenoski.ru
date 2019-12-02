<?php
    /**
     *
     *  Template name: Главная страница
     */
?>

<?php get_header(); ?>

<?php
    $maleSocks = new WP_Query([
        'post_type'      => 'product',
        'posts_per_page' => 8,
        'orderby'        => 'date',
        'order'          => 'DESC',
        'product_cat'    => 'muzhskie-noski'
    ]);
    $femaleSocks = new WP_Query([
        'post_type'      => 'product',
        'posts_per_page' => 8,
        'orderby'        => 'date',
        'order'          => 'DESC',
        'product_cat'    => 'zhenskie-noski'
    ]);
    $blogPosts = get_posts([
       'post_type'       => 'post',
        'posts_per_page' => 4,
        'orderby'        => 'date',
        'order'          => 'DESC'
    ]);
?>

<main>
    <div class="container">
        <div class="page__title front__title title-button">
            <h1>Где купить носки в Казани?</h1>
            <a href="#" class="button button-black">Все носки</a>
        </div>
        <div class="page__content">


            <!--  Start Slider section  -->
            <div class="slider__wrap">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <a class="swiper-slide" href="#">
                            <div class="bill__inner">
                                <div class="bill__bg">
                                    <img src="/app/uploads/2019/11/s1880x760.png" alt="Купить носки в розницу">
                                </div>
                                <div class="bill__top">Мужские носки</div>
                                <div class="bill__bottom">
                                    <div class="bill__title">Чёрная пятница</div>
                                    <div class="bill__info">6 акций</div>
                                </div>
                            </div>
                        </a>
                        <a class="swiper-slide" href="#">
                            <div class="bill__inner">
                                <div class="bill__bg">
                                    <video loop muted autoplay>
                                        <source src="/app/uploads/2019/11/allj.mp4" type="video/mp4" poster="/app/uploads/2019/11/allj.png">
                                    </video>
                                </div>
                                <div class="bill__top">Женские носки</div>
                                <div class="bill__bottom">
                                    <div class="bill__title">Чёрная пятница</div>
                                    <div class="bill__info">5 акций</div>
                                </div>
                            </div>
                        </a>
                        <a class="swiper-slide" href="#">
                            <div class="bill__inner">
                                <img src="/app/uploads/2019/11/s1880x760.png" alt="Купить носки в розницу" class="bill__bg">
                                <div class="bill__top">Детские носки</div>
                                <div class="bill__bottom">
                                    <div class="bill__title">Чёрная пятница</div>
                                    <div class="bill__info">6 акций</div>
                                </div>
                            </div>
                        </a>
                        <a class="swiper-slide" href="#">
                            <div class="bill__inner">
                                <img src="/app/uploads/2019/11/s1880x760.png" alt="Купить носки в розницу" class="bill__bg">
                                <div class="bill__top">Женские колготки</div>
                                <div class="bill__bottom">
                                    <div class="bill__title">Чёрная пятница</div>
                                    <div class="bill__info">6 акций</div>
                                </div>
                            </div>
                        </a>
                        <a class="swiper-slide" href="#">
                            <div class="bill__inner">
                                <img src="/app/uploads/2019/11/s1880x760.png" alt="Купить носки в розницу" class="bill__bg">
                                <div class="bill__top">Женские чулки</div>
                                <div class="bill__bottom">
                                    <div class="bill__title">Чёрная пятница</div>
                                    <div class="bill__info">6 акций</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="bill__swipe bill__swipe-next"></div>
                <div class="bill__swipe bill__swipe-prev"></div>
            </div>
            <!--  End Slider section  -->


            <!--  Start Male section  -->
            <?php if ($maleSocks) : ?>
                <section class="socks__wrap">
                    <div class="section__title title-button">
                        <h2>Мужские носки</h2>
                        <a href="#" class="button button-black">Все мужские носки</a>
                    </div>
                <?php while ( $maleSocks->have_posts() ) : $maleSocks->the_post();
                    global $product;
                    ?>
                    <a href="<?= get_the_permalink(); ?>" class="socks__item">
                        <div class="socks__inner">
                            <div class="socks__thumb">
                                <?= woocommerce_get_product_thumbnail(); ?>
                                <?php
                                    $attachment_ids = $product->get_gallery_image_ids();
                                    $secondImage = wp_get_attachment_url( $attachment_ids[0] );
                                ?>
                                <img src="<?= $secondImage; ?>" alt="<?= get_the_title(); ?>">
                            </div>
                            <div class="socks__price"><?= $product->get_price_html(); ?></div>
                        </div>
                        <div class="socks__title"><?= get_the_title(); ?></div>
                    </a>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
                </section>
            <?php endif; ?>
            <!--  End Male section  -->


            <!--  Start Afisha section  -->
            <section class="afisha">
                <div class="section__title">
                    <h2>Обратите внимание</h2>
                </div>
                <div class="afisha__item-wrap afisha-hasbg" style="background-image: url(/app/uploads/2019/11/skidki.png);">
                    <a href="#" class="afisha__item">
                        <div class="afisha__img">
                            <img src="/app/uploads/2019/11/noski_online.svg" alt="Скидки на лимитированные коллекции носков" class="a3-no-load">
                        </div>
                        <div class="afisha__text">Скидки на лимитированные коллекции носков</div>
                    </a>
                </div>
                <div class="afisha__item-wrap" style="background-color: #F82F2F;">
                    <a href="#" class="afisha__item">
                        <div class="afisha__img">
                            <img src="/app/uploads/2019/11/skidki_noski_optom.svg" alt="Получайте до 30% от суммы заказ баллами" class="a3-no-load">
                        </div>
                        <div class="afisha__text">Получайте до 30% от суммы заказ баллами</div>
                    </a>
                </div>
                <div class="afisha__item-wrap" style="background-color: #FFA523;">
                    <a href="#" class="afisha__item">
                        <div class="afisha__img">
                            <img src="/app/uploads/2019/11/noski_na_zakaz_35_rub.svg" alt="Дарите впечатления с сертификатами на носки Гденоски" class="a3-no-load">
                        </div>
                        <div class="afisha__text">Дарите впечатления с сертификатами на носки Гденоски</div>
                    </a>
                </div>
                <div class="afisha__item-wrap" style="background-color: #31D665;">
                    <a href="#" class="afisha__item">
                        <div class="afisha__img">
                            <img src="/app/uploads/2019/11/zarabativai_s_nami.svg" alt="Заказывайте носки на заказ по вашему дизайну" class="a3-no-load">
                        </div>
                        <div class="afisha__text">Заказывайте носки "На заказ" по вашему дизайну</div>
                    </a>
                </div>
            </section>
            <!--  End Afisha section  -->


            <!--  Start Female section  -->
            <?php if ($femaleSocks) : ?>
                <section class="socks__wrap">
                    <div class="section__title title-button">
                        <h2>Женские носки</h2>
                        <a href="#" class="button button-black">Все женские носки</a>
                    </div>
                <?php while ( $femaleSocks->have_posts() ) : $femaleSocks->the_post();
                    global $product;
                    ?>
                    <a href="<?= get_the_permalink(); ?>" class="socks__item">
                        <div class="socks__inner">
                            <div class="socks__thumb">
                                <?= woocommerce_get_product_thumbnail(); ?>
                                <?php
                                    $attachment_ids = $product->get_gallery_image_ids();
                                    $secondImage = wp_get_attachment_url( $attachment_ids[0] );
                                ?>
                                <img src="<?= $secondImage; ?>" alt="<?= get_the_title(); ?>">
                            </div>
                            <div class="socks__price"><?= $product->get_price_html(); ?></div>
                        </div>
                        <div class="socks__title"><?= get_the_title(); ?></div>
                    </a>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
                </section>
            <?php endif; ?>
            <!--  End Female section  -->


            <!--  Start Blog section  -->
            <?php if ( $blogPosts ): ?>
                <section class="blog__wrap section__blog">
                    <div class="section__title title-button">
                        <h2>Блог о носках</h2>
                        <a href="#" class="button button-black">Все новости</a>
                    </div>
                    <?php foreach( $blogPosts as $post ):
                        setup_postdata( $post ); ?>
                        <a class="blog__item" href="<?php the_permalink(); ?>">
                            <div class="blog__inner">
                                <div class="blog__thumb">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="blog__title"><?php the_title(); ?></div>
                                <div class="blog__excerpt">
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                        </a>
                    <?php endforeach;
                          wp_reset_postdata(); ?>
                </section>
            <?php endif; ?>
            <!--  End Blog section  -->


        </div>
    </div>
</main>

<?php get_footer(); ?>