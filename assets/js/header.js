//
// Dragg Submenu

const slider = document.querySelector('.scrollable-menu');



var width = slider.innerWidth;

window.addEventListener('resize', checkWindowSize);

checkWindowSize();
function checkWindowSize(){
if(slider.scrollWidth > slider.clientWidth){
  console.log("hat overflow");
  slider.classList.add("scrollable-menu--scrollable");
}else{
  slider.classList.remove("scrollable-menu--scrollable");

}

}




let mouseDown = false;
let startX, scrollLeft;

let startDragging = function (e) {
  mouseDown = true;
  startX = e.pageX - slider.offsetLeft;
  scrollLeft = slider.scrollLeft;
};
let stopDragging = function (event) {
  mouseDown = false;
};

slider.addEventListener('mousemove', (e) => {
  e.preventDefault();
  if(!mouseDown) { return; }
  const x = e.pageX - slider.offsetLeft;
  const scroll = x - startX;
  slider.scrollLeft = scrollLeft - scroll;
});

// Add the event listeners
slider.addEventListener('mousedown', startDragging, false);
slider.addEventListener('mouseup', stopDragging, false);
slider.addEventListener('mouseleave', stopDragging, false);





//alternative flickity menu


const slider2 = document.querySelector('.scrollable-menu-flickity');



var width = slider2.innerWidth;

window.addEventListener('resize', checkWindowSize2);

checkWindowSize2();
function checkWindowSize2(){
if(slider2.scrollWidth > slider2.clientWidth){
  console.log("hat overflow");
  slider2.classList.add("hat-overflow");
}else{
  slider2classList.remove("hat-overflow");

}

}


function is_touch_device()
{
  // Checks for existence in all browsers and IE10/11 & Surface
  return 'ontouchstart' in window || navigator.maxTouchPoints;
}

var navs = document.querySelectorAll('.scrollable-menu-flickity');

if (!is_touch_device())
{
  for ( var i = 0, length = navs.length; i < length; i++ ) {
    var nav = navs[i];

    if(nav.classList.contains("hat-overflow")) {


    new Flickity( nav, {
      cellAlign: 'left',
      freeScroll: true,
      prevNextButtons: true,
      pageDots: false,
      contain: true,
      cellSelector: ".projektmenu__item"
    });

  }else{
    //remove flickity
  }
  }
}








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
