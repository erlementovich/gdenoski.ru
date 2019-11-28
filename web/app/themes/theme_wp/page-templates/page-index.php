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
        'posts_per_page' => -1,
        'orderby'        => 'date',
        'order'          => 'DESC',
        'product_cat'    => 'muzhskie-noski'
    ]);
    $femaleSocks = new WP_Query([
        'post_type'      => 'product',
        'posts_per_page' => -1,
        'orderby'        => 'date',
        'order'          => 'DESC',
        'product_cat'    => 'zhenskie-noski'
    ]);
?>

<main>
    <div class="container">
        <div class="page__title front__title title-button">
            <h1>Где купить носки в Казани?</h1>
            <a href="#" class="button button-black">Все носки</a>
        </div>
        <div class="page__content">
            <div class="slider__wrap">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" style="background-image: url(/app/uploads/2019/11/s1880x760.png)">
                            <div class="bill__inner">
                                <div class="bill__top">Мужские носки</div>
                                <div class="bill__bottom">
                                    <div class="bill__title">Чёрная пятница</div>
                                    <div class="bill__info">6 акций</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" style="background-image: url(/app/uploads/2019/11/s1880x760.png)">
                            <div class="bill__inner">
                                <div class="bill__top">Женские носки</div>
                                <div class="bill__bottom">
                                    <div class="bill__title">Чёрная пятница</div>
                                    <div class="bill__info">5 акций</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" style="background-image: url(/app/uploads/2019/11/s1880x760.png)">
                            <div class="bill__inner">
                                <div class="bill__top">Детские носки</div>
                                <div class="bill__bottom">
                                    <div class="bill__title">Чёрная пятница</div>
                                    <div class="bill__info">6 акций</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" style="background-image: url(/app/uploads/2019/11/s1880x760.png)">
                            <div class="bill__inner">
                                <div class="bill__top">Женские колготки</div>
                                <div class="bill__bottom">
                                    <div class="bill__title">Чёрная пятница</div>
                                    <div class="bill__info">6 акций</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" style="background-image: url(/app/uploads/2019/11/s1880x760.png)">
                            <div class="bill__inner">
                                <div class="bill__top">Женские чулки</div>
                                <div class="bill__bottom">
                                    <div class="bill__title">Чёрная пятница</div>
                                    <div class="bill__info">6 акций</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bill__swipe bill__swipe-next"></div>
                <div class="bill__swipe bill__swipe-prev"></div>
            </div>

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
        </div>
    </div>
</main>

<?php get_footer(); ?>