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

$(document).ready(function(){
      //ACCORDION
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
      $(this).parent('.nav').find('.menu').toggleClass('active');
      $('#overlay').toggleClass('active');
    })
    $('#overlay').on('click',function(){
      $('.hamburger span').toggleClass('toggled');
      $('.nav .menu').toggleClass('active');
      $('#overlay').toggleClass('active');
    })
    //END NAVBAR TOGGLE

    //POPOUT ON SCROLLED
    $(window).on('scroll',function(){
      $('.setAnime').each(function(){
        var viewPos = $(this).offset().top,
        viewScrollTop = $(window).scrollTop(),
        viewHeight = $(window).height();
      if(viewScrollTop > viewPos - viewHeight + viewHeight / 5) {
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

      if(length <= '9245'){
        $('#row-2').find('#2-pop').addClass('img-pop');

        if(length <= '8715'){
          $('#row-3').find('#pcview').addClass('img-pop');

          if(length <= '8120'){
            $('#row-6').find('#6-pop').addClass('img-pop');

            if(length <= '7480'){
              $('#row-7').find('#7-pc').addClass('img-pop');
    
              if(length <= '7400'){
                $('#row-5').find('#5-pc').addClass('img-pop');

                if(length <= '7099'){
                  $('#row-8').find('#8-pc').addClass('img-pop');

                  if(length <= '6670'){
                    $('#row-9').find('#9-pc').addClass('img-pop');

                    if(length <= '6299'){
                      $('#row-10').find('#10-pc').addClass('img-pop');
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
    else{
      $('#row-1').find('#left-pc').removeClass('img-pop');
      $('#row-2').find('#2-pop').removeClass('img-pop');
      $('#row-3').find('#pcview').removeClass('img-pop');
      $('#row-5').find('#5-pc').removeClass('img-pop');
      $('#row-6').find('#6-pop').removeClass('img-pop');
      $('#row-7').find('#7-pc').removeClass('img-pop');
      $('#row-8').find('#8-pc').removeClass('img-pop');
      $('#row-9').find('#9-pc').removeClass('img-pop');
      $('#row-10').find('#10-pc').removeClass('img-pop');
    }
  });
});

//SVG ANIMATION ON BODY SP VIEW
$(document).ready(function(){
  $(window).on('load resize', function(e) {
    var w = $(window).width();

    if(w <= 750){

      var $dashOffset = $(".swirl-1-sp").css("stroke-dashoffset");
      $(window).scroll(function() {
        //calculate how far down the page the user is 
        var $percentage = (($(window).scrollTop() / ($("html").height() - $(window).height())) * 500);
        //convert dashoffset pixel value to interger
        var $newUnit = parseInt($dashOffset, 15);
        //get the value to be subtracted from the 'stroke-dashoffset'
        var $offsetUnit = $percentage * ($newUnit / 500);
        //set the new value of the dashoffset to create the drawing effect
        $(".swirl-1-sp").css("stroke-dashoffset", $newUnit - $offsetUnit);
    
        var splength = $newUnit - $offsetUnit;

        if(splength <= '10805'){
          $('#row-1').find('#left-pc').addClass('img-pop');
        }else{
          $('#row-1').find('#left-pc').removeClass('img-pop');
        }

        if(splength <= '10531'){
          $('#row-2').find('#2-pop').addClass('img-pop');
        }else{
          $('#row-2').find('#2-pop').removeClass('img-pop');
        }

        if(splength <= '10080'){
          $('#row-3').find('#pcview').addClass('img-pop');
        }else{
          $('#row-3').find('#pcview').removeClass('img-pop');
        }
      });

    }else{
      $( 'meta[name=viewport]' ).attr( 'content', 'width=device-width' );
    }
  });
})


  // SLIDER FOR ALBUM PAGE
$(document).ready(function(){
  const swiper = new Swiper('.whats', {
    direction: 'horizontal',
    loop: false,
    effect: 'cards',
    speed: 500,
    autoplay: true,

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    
    pagination: {
      el: '.swiper-pagination',
      type: "fraction",
      formatFractionCurrent: function(number) {
        return('0' + number).slice(-2);
      },
      formatFractionTotal: function(number){
        return('0' + number).slice(-2);
      },
      renderFraction: function(currentClass, totalClass){
        return '<span class="' + currentClass + '"></span>' +
               ' / ' +
               '<span class="' + totalClass + '"></span>';
      }
    },
  });
})

$(document).ready(function(){
  var galleryThumbs = new Swiper('.gallery-thumbs', {
    slidesPerView: 4,
    freeMode: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
    allowTouchMove: false,
  });
  
  var galleryTop = new Swiper('.gallery-top', {
    loop: false,
    effect: 'cards',
    autoplay: false,

    pagination: {
          el: '.swiper-pagination',
          type: "fraction",
          formatFractionCurrent: function(number) {
            return('0' + number).slice(-2);
          },
          formatFractionTotal: function(number){
            return('0' + number).slice(-2);
          },
          renderFraction: function(currentClass, totalClass){
            return '<span class="' + currentClass + '"></span>' +
                   ' / ' +
                   '<span class="' + totalClass + '"></span>';
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

//MODAL TRAINER IMAGE
$(document).ready(function() {
  $('.train_img').click(function() {
    var img = $(this).attr('src');
    $("#modal-img").attr('src', img);
    $("#myModal").addClass('active');
    $('.mod-overlay').addClass('active');
  });

  $('.mod-overlay').click(function(){
    $("#myModal").removeClass('active');
    $('.mod-overlay').removeClass('active');
  })
});