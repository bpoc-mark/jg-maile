"use strict";

$(document).ready(function () {
  $('.btn_read_more').on('click', function () {
    if ($(this).hasClass('active')) {
      $(this).children('p').text('close');
      $(this).children('img').css({
        "transform": "rotate(0deg)",
        "transition": "all 450ms"
      });
      $(this).parent('.accordion__header-cont').next('.accordion__content').slideDown();
      $(this).removeClass("active");
    } else {
      $(this).children('p').text('open');
      $(this).children('img').css({
        "transform": "rotate(180deg)",
        "transition": "all 450ms"
      });
      $(this).parent('.accordion__header-cont').next('.accordion__content').slideUp();
      $(this).addClass("active");
    }
  });
  $('.slider').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    }, {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    } // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
    ]
  });
});