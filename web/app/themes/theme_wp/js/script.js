/**
 * Sticky header
 */
// When the user scrolls the page, execute myFunction
window.onscroll = function () {
    callSticky() };

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function callSticky()
{
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }
}


/**
 * QTY increment/decrement
 */

jQuery(document).ready(function ($) {
    $('.qty-minus').on('click', function () {
        var $qtyer = jQuery(this).siblings('.input-text.qty');
        var qtyerVal = parseInt($qtyer.val());
        $qtyer.val(qtyerVal <= 1 ? 1 : qtyerVal -1);
    });
    $('.qty-plus').on('click', function () {
        var $qtyer = jQuery(this).siblings('.input-text.qty');
        var qtyerVal = parseInt($qtyer.val());
        $qtyer.val(qtyerVal + 1);
    });
    $('.input-text.qty').on('change', function () {
         $(this).val($(this).val() <= 1 ? 1 : $(this).val());
    });
});

/**
 * Hamburger JS
 */
jQuery(document).ready(function ($) {
    var $hamburger = $('.hamburger'),
        $bg = $('.bgshadow'),
        $body = $('body');

    $hamburger.on('click', function () {
        $body.toggleClass('menuShowed');
    });

    $bg.on('click', function () {
        $body.removeClass('menuShowed');
    });
});
