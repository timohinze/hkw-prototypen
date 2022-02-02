$( document ).ready(function() {
  $('.slideshow-element__slideshow').flickity({
    // options
    cellAlign: 'left',
    contain: true,
    wrapAround: false,
    pageDots: false,
    prevNextButtons: true,
    imagesLoaded: true,
    arrowShape: 'M49.2.4 26.8 50.3l22.6 49.4h22.2L48.9 50.2 71.3.4z',
    // adaptiveHeight: true

    // fullscreen: true,


  });

});
$( window ).on( 'load', function() {
    $('.slideshow-element__slideshow').flickity('resize');
});



// $(".open-lightbox" ).click(function() {
//   $(this).closest(".slideshow-element__slideshow").flickity('viewFullscreen');
// });
