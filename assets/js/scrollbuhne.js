// scroll buhne
// wenn javascript aktiv ist aktiviere Css-Klassen
$( document ).ready(function() {
  $(".scroll-buhne-item").addClass("scroll-buhne-item--js-prepared");
});


// text element größer als fenster? Dann CSS Klasse aktivieren
$(document).ready(check_height);
$(window).on('resize',check_height);

function check_height() {
  var win = $(window).height();

  $(".scroll-buhne-item__text").each(function(){
    $(this).parents(".scroll-buhne-item").removeClass('scroll-buhne-item--too-high')

     var thisH = $(this).height();
     if (thisH > win ) {
        $(this).parents(".scroll-buhne-item").addClass('scroll-buhne-item--too-high')
     }

  });}







$(window).scroll(function() {
  var $window = $(window),
      $body = $('body'),
      $item = $('.scroll-buhne-item');

  var scroll = $window.scrollTop() + ($window.height());

  $item.each(function () {
    var $this = $(this);

    if ($this.position().top <= scroll-($window.height()) && $this.position().top + $this.outerHeight() > scroll-($window.height())) {
      $this.addClass('scroll-buhne-item--visible');
    }else{
      $this.removeClass('scroll-buhne-item--visible');

    }
  });

}).scroll();
