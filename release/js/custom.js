"use strict";

$(document).ready(function () {
  $('.btn_read_more').on('click', function () {
    if ($(this).hasClass('active')) {
      $(this).children('p').text('close');
      $(this).children('img').css({
        "transform": "rotate(0deg)",
        "transition": "all 150ms"
      });
      $(this).parent('.accordion__header-cont').next('.accordion__content').slideDown();
      $(this).removeClass("active");
    } else {
      $(this).children('p').text('open');
      $(this).children('img').css({
        "transform": "rotate(180deg)",
        "transition": "all 150ms"
      });
      $(this).parent('.accordion__header-cont').next('.accordion__content').slideUp();
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
  }); // SLIDER FOR WHATS PAGE

  var swiper1 = new Swiper('.swiper1', {
    direction: 'horizontal',
    loop: false,
    effect: 'cards',
    pagination: {
      el: '.swiper-pagination-1',
      type: "fraction",
      formatFractionCurrent: function formatFractionCurrent(number) {
        return '0' + number;
      }
    },
    navigation: {
      nextEl: '.swiper-button-next-1',
      prevEl: '.swiper-button-prev-1'
    }
  });
  var swiper2 = new Swiper('.swiper2', {
    direction: 'horizontal',
    loop: false,
    effect: 'cards',
    pagination: {
      el: '.swiper-pagination-2',
      type: "fraction",
      formatFractionCurrent: function formatFractionCurrent(number) {
        return '0' + number;
      }
    },
    navigation: {
      nextEl: '.swiper-button-next-2',
      prevEl: '.swiper-button-prev-2'
    }
  });
  var swiper3 = new Swiper('.swiper3', {
    direction: 'horizontal',
    loop: false,
    effect: 'cards',
    pagination: {
      el: '.swiper-pagination-3',
      type: "fraction",
      formatFractionCurrent: function formatFractionCurrent(number) {
        return '0' + number;
      }
    },
    navigation: {
      nextEl: '.swiper-button-next-3',
      prevEl: '.swiper-button-prev-3'
    }
  });
  var swiper4 = new Swiper('.swiper4', {
    direction: 'horizontal',
    loop: false,
    effect: 'cards',
    pagination: {
      el: '.swiper-pagination-4',
      type: "fraction",
      formatFractionCurrent: function formatFractionCurrent(number) {
        return '0' + number;
      }
    },
    navigation: {
      nextEl: '.swiper-button-next-4',
      prevEl: '.swiper-button-prev-4'
    }
  });
  var swiper5 = new Swiper('.swiper5', {
    direction: 'horizontal',
    loop: false,
    effect: 'cards',
    pagination: {
      el: '.swiper-pagination-5',
      type: "fraction",
      formatFractionCurrent: function formatFractionCurrent(number) {
        return '0' + number;
      }
    },
    navigation: {
      nextEl: '.swiper-button-next-5',
      prevEl: '.swiper-button-prev-5'
    }
  });
  var swiper6 = new Swiper('.swiper6', {
    direction: 'horizontal',
    loop: false,
    effect: 'cards',
    pagination: {
      el: '.swiper-pagination-6',
      type: "fraction",
      formatFractionCurrent: function formatFractionCurrent(number) {
        return '0' + number;
      }
    },
    navigation: {
      nextEl: '.swiper-button-next-6',
      prevEl: '.swiper-button-prev-6'
    }
  });
});