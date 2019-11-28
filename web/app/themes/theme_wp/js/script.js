var swiper = new Swiper('.swiper-container', {
    slidesPerView: 'auto',
    spaceBetween: 20,
    loop: true,
    autoplay: {
        delay: 10000,
    },
    navigation: {
        nextEl: '.bill__swipe-next',
        prevEl: '.bill__swipe-prev',
    },
});