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
