var swiper = new Swiper('.swiper-container', {
    slidesPerView: 'auto',
    spaceBetween: 20,
    loop: true,
    lazy: {
        loadPrevNext: true,
    },
    // autoplay: {
    //     delay: 10000,
    // },
    speed: 600,
    navigation: {
        prevEl: '.bill__swipe-prev',
        nextEl: '.bill__swipe-next'
    },
});

