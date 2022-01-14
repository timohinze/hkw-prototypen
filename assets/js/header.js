
// scrollable menu menu flickity

const navs = document.querySelectorAll('.scrollable-menu');

// window.addEventListener('resize', checkWindowSize);
//  checkWindowSize();
// function checkWindowSize(){
  for ( var i = 0, length = navs.length; i < length; i++ ) {
    var nav = navs[i];

       // if(nav.scrollWidth > nav.clientWidth){
        // console.log( nav +" hat overflow");
       nav.classList.add("scrollable-menu-flickity");
        new Flickity( nav, {
          cellAlign: 'left',
          freeScroll: true,
          prevNextButtons: true,
          pageDots: false,
          contain: true,
          cellSelector: "li",
          groupCells: true,
          watchCSS: true

        });

     //  }else{
     //    nav.remove("scrollable-menu-flickity");
     //     //remove flickity
     //
     // }

 }
 // }





 // add functionality for swipe gestures
 //src: https://codepen.io/richiksc/pen/LGEZKd?editors=1111

//  function $(selector) {
//  return document.querySelector(selector);
// }




var flkty = new Flickity('.scrollable-menu-flickity');

$(function(){
  $(".scrollable-menu-flickity").bind("wheel", function (event) {
    console.log(event.touches.length);
  });
});

// $('.scrollable-menu-flickity').addEventListener('wheel', e => {
//  e.preventDefault();
//
//  console.log(e.deltaX);
//  const selected = $('.scrollable-menu-flickity');
//  const currentTransform = window.getComputedStyle(selected)
//  .getPropertyValue('transform');
//  const matrix = new DOMMatrixReadOnly(currentTransform);
//  const currentTranslation = matrix.m41;
//  const newTranslation = currentTranslation - e.deltaX;
//
//  selected.style.transform = `translate(${newTranslation}px)`;
//  const threshold = 50;
//
//  if(newTranslation < -threshold) {
//    flkty.next();
//  } else if (newTranslation > threshold) {
//    flkty.previous();
//  }
// });







// Mobile

$( ".header__burger" ).click(function() {
  $(".page-header").toggleClass("header--open-menu");
  $(".header__burger").toggleClass("header__burger--open");
});


$( ".mainmenu__item  > a" ).click(function(e) {
  if($(".page-header").hasClass('header--open-menu')) {
  e.preventDefault();
    $(".mainmenu__item").removeClass("mainmenu__item--open-submenu");
      $(this).parent(".mainmenu__item").addClass("mainmenu__item--open-submenu");
  }
});


// Suche
$( ".search-btn" ).click(function(e) {
	e.preventDefault();
	$(".search-modal-wrap").addClass("search-modal-wrap--visible");
});

$( ".search-modal-close" ).click(function() {
	$(".search-modal-wrap").removeClass("search-modal-wrap--visible");
});


// menu
// wrap characters in spans for styling
$(".mainmenu__item > a").each(function (index) {
  var text = $(this).text().toLowerCase().replace(/ /g,'');
  var characters = $(this).text().split("");

  $this = $(this);
  $this.empty();
  $.each(characters, function (i, el) {
    if(el != ' '){
    $this.append("<span class="+ text +"-"+ i +">" + el + "</span");
  } else{
    $this.append(" ");
  }
  });
});


// Hide Header on on scroll down src: http://jsfiddle.net/mariusc23/s6mLJ/31/
var didScroll;
var lastScrollTop = 0;
var delta = 60;
var navbarHeight = $('.page-header').outerHeight();

 // $(".page-wrap").css("margin-top", navbarHeight);

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();

    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('.page-header').removeClass('nav-down').addClass('nav-up');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('.page-header').removeClass('nav-up').addClass('nav-down');
        }
    }

    lastScrollTop = st;
}
