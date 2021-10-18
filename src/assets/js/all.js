$(document).ready(function(){
    $('.btn_read_more').on('click', function(){
        if($(this).hasClass('active')){
            $(this).children('p').text('close');
            $(this).children('img').css(
                {
                    "transform": "rotate(0deg)", 
                    "transition": "all 150ms"
                }
            );
            $(this).parent('.accordion__header-cont').next('.accordion__content').slideDown();
            $(this).removeClass("active");
        }else{
            $(this).children('p').text('open');
            $(this).children('img').css(
                {
                    "transform": "rotate(180deg)", 
                    "transition": "all 150ms"
                }
            );
            $(this).parent('.accordion__header-cont').next('.accordion__content').slideUp();
            $(this).addClass("active");
        }

    });

    // SLIDER FOR ALBUM PAGE
    const swiper = new Swiper('.swiper', {
      direction: 'horizontal',
      loop: false,
      effect: 'cards',
      
      pagination: {
        el: '.swiper-pagination',
        type: "fraction",
        formatFractionCurrent: function (number) {
          return '0' + number;
      }
      },
    
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    
    });

    // SLIDER FOR WHATS PAGE
const swiper1 = new Swiper('.swiper1', {
  direction: 'horizontal',
  loop: false,
  effect: 'cards',
  
  pagination: {
    el: '.swiper-pagination-1',
    type: "fraction",
    formatFractionCurrent: function (number) {
      return '0' + number;
  }
  },

  navigation: {
    nextEl: '.swiper-button-next-1',
    prevEl: '.swiper-button-prev-1',
  },

});

const swiper2 = new Swiper('.swiper2', {
  direction: 'horizontal',
  loop: false,
  effect: 'cards',
  
  pagination: {
    el: '.swiper-pagination-2',
    type: "fraction",
    formatFractionCurrent: function (number) {
      return '0' + number;
  }
  },

  navigation: {
    nextEl: '.swiper-button-next-2',
    prevEl: '.swiper-button-prev-2',
  },

});

const swiper3 = new Swiper('.swiper3', {
  direction: 'horizontal',
  loop: false,
  effect: 'cards',
  
  pagination: {
    el: '.swiper-pagination-3',
    type: "fraction",
    formatFractionCurrent: function (number) {
      return '0' + number;
  }
  },

  navigation: {
    nextEl: '.swiper-button-next-3',
    prevEl: '.swiper-button-prev-3',
  },

});

const swiper4 = new Swiper('.swiper4', {
  direction: 'horizontal',
  loop: false,
  effect: 'cards',
  
  pagination: {
    el: '.swiper-pagination-4',
    type: "fraction",
    formatFractionCurrent: function (number) {
      return '0' + number;
  }
  },

  navigation: {
    nextEl: '.swiper-button-next-4',
    prevEl: '.swiper-button-prev-4',
  },

});

const swiper5 = new Swiper('.swiper5', {
  direction: 'horizontal',
  loop: false,
  effect: 'cards',
  
  pagination: {
    el: '.swiper-pagination-5',
    type: "fraction",
    formatFractionCurrent: function (number) {
      return '0' + number;
  }
  },

  navigation: {
    nextEl: '.swiper-button-next-5',
    prevEl: '.swiper-button-prev-5',
  },

});

const swiper6 = new Swiper('.swiper6', {
  direction: 'horizontal',
  loop: false,
  effect: 'cards',
  
  pagination: {
    el: '.swiper-pagination-6',
    type: "fraction",
    formatFractionCurrent: function (number) {
      return '0' + number;
  }
  },

  navigation: {
    nextEl: '.swiper-button-next-6',
    prevEl: '.swiper-button-prev-6',
  },

});

});



(function() {

  'use strict';

  // breakpoint where swiper will be destroyed
  // and switches to a dual-column layout
  const breakpoint = window.matchMedia( '(min-width: 751px)' );

  // keep track of swiper instances to destroy later
  let mySwiper;

  //////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////

  const breakpointChecker = function() {

    // if larger viewport and multi-row layout needed
    if ( breakpoint.matches === true ) {

      // clean up old instances and inline styles when available
	  if ( mySwiper !== undefined ) mySwiper.destroy( true, true );

	  // or/and do nothing
	  return;

      // else if a small viewport and single column layout needed
      } else if ( breakpoint.matches === false ) {

        // fire small viewport version of swiper
        return enableSwiper();

      }

  };
  
  //////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////

  const enableSwiper = function() {

    mySwiper = new Swiper ('.swiper-container', {

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
      paginationClickable: true,

    });

  };

  //////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////

  // keep an eye on viewport size changes
  breakpoint.addListener(breakpointChecker);

  // kickstart
  breakpointChecker();



})(); /* IIFE end */


