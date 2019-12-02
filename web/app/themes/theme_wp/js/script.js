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
});
/**
 * Sticky header
 */
// When the user scrolls the page, execute myFunction
window.onscroll = function() { callSticky() };

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function callSticky() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }
}