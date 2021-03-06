"use strict";

$(document).ready(function () {
  $('.accordion__header-cont').on('click', function () {
    if ($(this).hasClass('active')) {
      $(this).find('p').text('close');
      $(this).find('img').css({
        "transform": "rotate(0deg)",
        "transition": "all 150ms"
      });
      $(this).next('.accordion__content').slideDown();
      $(this).removeClass("active");
    } else {
      $(this).find('p').text('open');
      $(this).find('img').css({
        "transform": "rotate(180deg)",
        "transition": "all 150ms"
      });
      $(this).next('.accordion__content').slideUp();
      $(this).addClass("active");
    }
  }); // SLIDER FOR ALBUM PAGE

  var swiper = new Swiper('.swiper', {
    direction: 'horizontal',
    loop: false,
    effect: 'cards',
    pagination: {
      el: '.swiper-pagination',
      type: "fraction",
      formatFractionCurrent: function formatFractionCurrent(number) {
        return '0' + number;
      }
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    }
  });
}); // SLIDER ON FRONT PAGE SP

(function () {
  'use strict'; // breakpoint where swiper will be destroyed
  // and switches to a dual-column layout

  var breakpoint = window.matchMedia('(min-width: 751px)'); // keep track of swiper instances to destroy later

  var mySwiper;

  var breakpointChecker = function breakpointChecker() {
    // if larger viewport and multi-row layout needed
    if (breakpoint.matches === true) {
      // clean up old instances and inline styles when available
      if (mySwiper !== undefined) mySwiper.destroy(true, true); // or/and do nothing

      return; // else if a small viewport and single column layout needed
    } else if (breakpoint.matches === false) {
      // fire small viewport version of swiper
      return enableSwiper();
    }
  };

  var enableSwiper = function enableSwiper() {
    mySwiper = new Swiper('.swiper-container', {
      loop: true,
      slidesPerView: '1',
      centeredSlides: true,
      a11y: true,
      keyboardControl: true,
      grabCursor: true,
      // pagination
      pagination: {
        el: ".swiper-pagination"
      },
      paginationClickable: true
    });
  };

  breakpoint.addListener(breakpointChecker);
  breakpointChecker();
})(); // ADD OPTGROUP ON SELECT


$(function () {
  $('select').append('<optgroup label=""></optgroup>');
}); //NAVBAR TOGGLE

$('.hamburger').on('click', function () {
  $(this).find('span').toggleClass('toggled');
  $(this).find('.menu').toggleClass('active');
});