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

    // SLIDER FOR ALBUM PAGE
    const swiper = new Swiper('.swiper', {
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

    if($('.swirl-1-pc').css("stroke-dashoffset" == "8708.47px")){
      console.log('success');
      // $('#row-3').closest('.p-popout').addClass('delay');
    }else{
      console.log('error');
    }
  });
});

//SVG ANIMATION ON BODY SP VIEW
$(document).ready(function() {
  var $dashOffset = $(".swirl-1-sp").css("stroke-dashoffset");
  $(window).scroll(function() {
    //calculate how far down the page the user is 
    var $percentageComplete = (($(window).scrollTop() / ($("html").height() - $(window).height())) * 2000);
    //convert dashoffset pixel value to interger
    var $newUnit = parseInt($dashOffset, 15);
    //get the value to be subtracted from the 'stroke-dashoffset'
    var $offsetUnit = $percentageComplete * ($newUnit / 2000);
    //set the new value of the dashoffset to create the drawing effect
    $(".swirl-1-sp").css("stroke-dashoffset", $newUnit - $offsetUnit);
  });
});

//MODAL 1
var slideIndex = 1;
showSlide(slideIndex);
function openLightbox() {
  document.getElementById('Lightbox1').style.display = 'block';
}
function closeLightbox() {
  document.getElementById('Lightbox1').style.display = 'none';
}
function changeSlide(n) {
	showSlide(slideIndex += n);
}
function toSlide(n) {
	showSlide(slideIndex = n);
}
function showSlide(n) {
  const slides = document.getElementsByClassName('slide');
  let modalPreviews = document.getElementsByClassName('modal-preview');
  if (n > slides.length) {
    slideIndex = 1;	
  }
  if (n < 1) {
  	slideIndex = slides.length;
  }

  for (let i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (let i = 0; i < modalPreviews.length; i++) {
      modalPreviews[i].className = modalPreviews[i].className.replace(' active', '');
  }
  
  slides[slideIndex - 1].style.display = 'block';
  modalPreviews[slideIndex - 1].className += ' active';
}

//MODAL 2
var slideIndex2 = 1;
showSlide2(slideIndex2);

function openLightbox2() {
  document.getElementById('Lightbox2').style.display = 'block';
}
function closeLightbox2() {
  document.getElementById('Lightbox2').style.display = 'none';
}
function changeSlide2(n) {
	showSlide2(slideIndex2 += n);
}
function toSlide2(n) {
	showSlide2(slideIndex2 = n);
}
function showSlide2(n) {
  const slides2 = document.getElementsByClassName('slide2');
  let modalPreviews2 = document.getElementsByClassName('modal-preview2');
  if (n > slides2.length) {
    slideIndex2 = 1;	
  }
  if (n < 1) {
  	slideIndex2 = slides2.length;
  }

  for (let i = 0; i < slides2.length; i++) {
      slides2[i].style.display = "none";
  }
  for (let i = 0; i < modalPreviews2.length; i++) {
      modalPreviews2[i].className = modalPreviews2[i].className.replace(' active', '');
  }
  
  slides2[slideIndex2 - 1].style.display = 'block';
  modalPreviews2[slideIndex2 - 1].className += ' active';
}

//MODAL 3
var slideIndex3 = 1;
showSlide3(slideIndex3);

function openLightbox3() {
  document.getElementById('Lightbox3').style.display = 'block';
}
function closeLightbox3() {
  document.getElementById('Lightbox3').style.display = 'none';
}
function changeSlide3(n) {
	showSlide3(slideIndex3 += n);
}
function toSlide3(n) {
	showSlide3(slideIndex3 = n);
}
function showSlide3(n) {
  const slides3 = document.getElementsByClassName('slide3');
  let modalPreviews3 = document.getElementsByClassName('modal-preview3');
  if (n > slides3.length) {
    slideIndex3 = 1;	
  }
  if (n < 1) {
  	slideIndex3 = slides3.length;
  }

  for (let i = 0; i < slides3.length; i++) {
      slides3[i].style.display = "none";
  }
  for (let i = 0; i < modalPreviews3.length; i++) {
      modalPreviews3[i].className = modalPreviews3[i].className.replace(' active', '');
  }
  
  slides3[slideIndex3 - 1].style.display = 'block';
  modalPreviews3[slideIndex3 - 1].className += ' active';
}
