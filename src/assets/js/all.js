$(document).ready(function($) {
  $('#acrd-1,#acrd-2,#acrd-3,#acrd-4,#acrd-5,#acrd-6,#acrd-7,#acrd-8').on('click', function(e) {

    var $this = $(this);
    var thisHref = $this.attr('href');
    var accordion = $(thisHref).parent('.accordion').find('.accordion__header-cont');

    if (accordion && $(thisHref).hasClass('active') ) {
      accordion.trigger('click');
    }
  });
});

//ACCORDION
$(document).ready(function(){
      
    $('.accordion__header-cont').on('click', function(){
        if($(this).hasClass('active')){
          $(this).find('p').text('close');
          $(this).find('img').css(
              {
                  "transform": "rotate(0deg)", 
                  "transition": "all 300ms"
              }
          );
            $(this).next('.accordion__content').slideDown();
            $(this).removeClass("active");
        }else{
          $(this).find('p').text('open');
          $(this).find('img').css(
            {
                "transform": "rotate(180deg)", 
                "transition": "all 300ms"
            }
        );
            $(this).next('.accordion__content').slideUp();
            $(this).addClass("active");
        }
    });

    //NAVBAR TOGGLE
    $('.hamburger').on('click',function(){
      $(this).find('span').toggleClass('toggled');
      $(this).find('.menu').toggleClass('active');
      $('#overlay').toggleClass('active');
    })
    $('#overlay').on('click',function(){
      $('.hamburger span').toggleClass('toggled');
      $('.menu').toggleClass('active');
      $('#overlay').toggleClass('active');
    })
    //END NAVBAR TOGGLE

    //POPOUT ON SCROLLED
    $(window).on('scroll resize load',function(){
      $('.setAnime').each(function(){
        var viewPos = $(this).offset().top,
        viewScrollTop = $(window).scrollTop(),
        viewHeight = $(window).height();
      if(viewScrollTop > viewPos - viewHeight + viewHeight / 2) {
        $(this).addClass('animated');
      } else {
        $(this).removeClass('animated');
      }
      });
    });
    //END POPOUT
});

// SLIDER ON FRONT PAGE SP
(function() {
  'use strict';
  // breakpoint where swiper will be destroyed
  // and switches to a dual-column layout
  const breakpoint = window.matchMedia( '(min-width: 751px)' );
  // keep track of swiper instances to destroy later
  let mySwiper;
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
  const enableSwiper = function() {
    mySwiper = new Swiper ('.swiper-container', {
      loop: true,
      slidesPerView: '1',
      centeredSlides: true,
      a11y: true,
      keyboardControl: true,
      grabCursor: true,
      autoplay: true,
      speed: 1000,

      // pagination
      pagination: {
      el: ".swiper-pagination"
    },
      paginationClickable: true,
    });
  };

  breakpoint.addListener(breakpointChecker);

  breakpointChecker();
})();

// ADD OPTGROUP ON SELECT
$(function() {
  $('select').append('<optgroup label=""></optgroup>');
});

// SVG ANIMATION ON BODY PC VIEW
$(document).ready(function() {
  var $dashOffset = $(".swirl-1-pc").css("stroke-dashoffset");
  $(window).scroll(function() {
    //calculate how far down the page the user is 
    var $percentageComplete = (($(window).scrollTop() / ($("html").height() - $(window).height())) * 2000);
    //convert dashoffset pixel value to interger
    var $newUnit = parseInt($dashOffset, 14);
    //get the value to be subtracted from the 'stroke-dashoffset'
    var $offsetUnit = $percentageComplete * ($newUnit / 2000);
    //set the new value of the dashoffset to create the drawing effect
    $(".swirl-1-pc").css("stroke-dashoffset", $newUnit - $offsetUnit);

    var length = $newUnit - $offsetUnit;

    if(length <= '9350'){
      $('#row-1').find('#left-pc').addClass('img-pop');

      if(length <= '8715'){
        $('#row-3').find('#pcview').addClass('img-pop');

          if(length <= '7400'){
            $('#row-5').find('#5-pc').addClass('img-pop');
          }
      }
    }
    else{
      $('#row-3').find('#pcview').removeClass('img-pop');
      $('#row-1').find('#left-pc').removeClass('img-pop');
      $('#row-5').find('#5-pc').removeClass('img-pop');
    }
  });
});

//SVG ANIMATION ON BODY SP VIEW
$(document).ready(function() {
  var $dashOffset = $(".swirl-1-sp").css("stroke-dashoffset");
  $(window).scroll(function() {
    //calculate how far down the page the user is 
    var $percentage = (($(window).scrollTop() / ($("html").height() - $(window).height())) * 100);
    //convert dashoffset pixel value to interger
    var $newUnit = parseInt($dashOffset, 15);
    //get the value to be subtracted from the 'stroke-dashoffset'
    var $offsetUnit = $percentage * ($newUnit / 100);
    //set the new value of the dashoffset to create the drawing effect
    $(".swirl-1-sp").css("stroke-dashoffset", $newUnit - $offsetUnit);

    var spswirl = $newUnit - $offsetUnit;

    if(spswirl <= 9550){
      $('#row-8').addClass('animated');

    }
    if(spswirl <= 8780){
      $('#row-9').addClass('animated');
    }

    else{
      // $('#row-8').removeClass('animated');
      // $('#row-9').removeClass('animated');
    }
  });
});

  // SLIDER FOR ALBUM PAGE
$(document).ready(function(){
  const swiper = new Swiper('.whats', {
    direction: 'horizontal',
    loop: false,
    effect: 'cards',
    speed: 500,
    autoplay: true,
    
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
})

$(document).ready(function(){
  var galleryThumbs = new Swiper('.gallery-thumbs', {
    slidesPerView: 4,
    freeMode: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
  });
  
  var galleryTop = new Swiper('.gallery-top', {
    // direction: 'horizontal',
    loop: false,
    effect: 'cards',
    autoplay: false,

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

    thumbs: {
      swiper: galleryThumbs,
    }
  });
})

