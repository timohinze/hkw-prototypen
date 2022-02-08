// neu 20220201
// scrollable menu flickity
$( document ).ready(function() {
  $('.scrollable-menu').addClass('scrollable-menu-flickity')
  $('.scrollable-menu').flickity({
    cellAlign: 'left',
    freeScroll: true,
    prevNextButtons: true,
    pageDots: false,
    contain: true,
    cellSelector: ".projektmenu__item, .submenu__item",
    groupCells: true,
    watchCSS: true,

  });

 });
// resize menu after load to make sure the height is correct
$( window ).on( 'load', function() {
    $('.scrollable-menu').flickity('resize');
    console.log("resize scrollable-menu menu");
});

//
//  $( document ).ready(function() {
// const navs2 = document.querySelectorAll('.neu-scrollable-menu');
//   for ( var i = 0, length = navs2.length; i < length; i++ ) {
//     var nav2 = navs2[i];
//        nav2.classList.add("scrollable-menu-flickity");
//         new Flickity( nav2, {
//           cellAlign: 'left',
//           freeScroll: true,
//           prevNextButtons: true,
//           pageDots: false,
//           contain: true,
//           cellSelector: ".neu-item",
//           groupCells: true,
//           watchCSS: true,
//         });
//
//  }
// });


// scrollable menu flickity
//  $( document ).ready(function() {
// const navs = document.querySelectorAll('.scrollable-menu');
//   for ( var i = 0, length = navs.length; i < length; i++ ) {
//     var nav = navs[i];
//        nav.classList.add("scrollable-menu-flickity");
//         new Flickity( nav, {
//           cellAlign: 'left',
//           freeScroll: true,
//           prevNextButtons: true,
//           pageDots: false,
//           contain: true,
//           cellSelector: "li",
//           groupCells: true,
//           watchCSS: true
//
//         });
//
//  }
// });





// just a test
// add functionality for swipe gestures

//  $( document ).ready(function() {
//
//   function $(selector) {
//     return document.querySelector(selector);
//  }
//
//  var swipe_timer = 0;
//
//  var carousel = document.querySelector('.scrollable-menu')
//  var flkty = Flickity.data( carousel )
//
//  $('.scrollable-menu').addEventListener('wheel', e => {
//  e.preventDefault();
//
//  clearTimeout(swipe_timer);
//  swipe_timer = setTimeout(function () {
//    swipe_slide(e)
//  }, 25)
//
//  });
//
//  function swipe_slide(e){
//    e.preventDefault();
//    console.log(e.deltaX);
//    if(e.deltaX >= 1) {
//      flkty.next();
//      console.log("next");
//      e.deltaX=0;
//    } else if (e.deltaX <= -1) {
//      flkty.previous();
//      console.log("prev");
//      e.deltaX=0;
//
//    }
//  }
//
//
// });
//






// Mobile

$( ".header__burger" ).click(function() {

//close search overlay
  $(".page-header").removeClass("header--open-search");
  $( ".search-btn" ).removeClass('search-btn--open');

//open mobile menu
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

    if(st > navbarHeight ){

    if (st > lastScrollTop){
        // Scroll Down
        $('.page-header').removeClass('nav-down').addClass('nav-up');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('.page-header').removeClass('nav-up').addClass('nav-down');
        }
    }
  }else{
    $('.page-header').removeClass('nav-down');

  }
    lastScrollTop = st;
}
