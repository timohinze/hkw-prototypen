$( document ).ready(function() {
  var $slideshows = $('.slideshow-element__slideshow').flickity({
    // options
    cellAlign: 'left',
    contain: true,
    wrapAround: false,
    pageDots: false,
    prevNextButtons: true,
    imagesLoaded: true,
   // arrowShape: 'M49.2.4 26.8 50.3l22.6 49.4h22.2L48.9 50.2 71.3.4z',
   arrowShape: {
     x0: 10,
     x1: 60, y1: 50,
     x2: 60, y2: 30,
     x3: 30
   },
    // arrowShape: 'M17 0l17 17.1h-6.7L17 6.6 6.7 17.1H0L17 0z'

    // adaptiveHeight: true

     fullscreen: true,


  });

  // $slideshows.on( 'cellSelect' , function() {
  //   var flkty = $(this).data('flickity');
  //   var element = flkty.selectedElement;
  //   console.log(element);
  // });


});



$('.slideshow-element__slideshow').each(function(index, element) {

    $(this).on('staticClick.flickity', function (event, pointer, cellElement, cellIndex) {
      // dismiss if cell was not clicked
        if ( !cellElement ) {
          return;
        }
        console.log("static click");
console.log(cellElement);

   $(element).flickity('viewFullscreen');



    });
});

$( window ).on( 'load', function() {
    $('.slideshow-element__slideshow').flickity('resize');
});


// $slideshows.on( 'staticClick.flickity', function( event, pointer, cellElement, cellIndex ) {
//   // dismiss if cell was not clicked
//   if ( !cellElement ) {
//     return;
//   }
//   // change cell background with .is-clicked
//   $slideshows.find('.is-clicked').removeClass('is-clicked');
//   $( cellElement ).addClass('is-clicked');
//   $logger.text( 'Cell ' + ( cellIndex + 1 )  + ' clicked' );
//
//   console.log(cellElement);
// });




 // $(".slideshow-element__slideshow img" ).click(function() {
 //   $(this).closest(".slideshow-element__slideshow").flickity('viewFullscreen');
 // });


 // $(".slideshow-element__slideshow figcaption" ).click(function() {
 //   $(this).closest(".slideshow-element__slideshow").flickity('viewFullscreen');
 // });





//
// var flkty = new Flickity('.slideshow-element__slideshow');
//
// flkty.on( 'fullscreenChange', function( isFullscreen ) {
// console.log("ist fullscreen");
//    const captions = document.querySelectorAll('.slideshow-element__slideshow figcaption');
//      for ( var i = 0, length = captions.length; i < length; i++ ) {
//        var caption = captions[i];
//
//        console.log(caption.offsetHeight);
//
//
//     }
//
//
//  });
