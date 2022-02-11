
// Medien Slideshow

var pathDirections = {
  view: 'M24 22h-24v-20h24v20zm-1-19h-22v18h22v-18zm-4 7h-1v-3.241l-11.241 11.241h3.241v1h-5v-5h1v3.241l11.241-11.241h-3.241v-1h5v5z',
  exit: 'M24 22h-24v-20h24v20zm-1-19h-22v18h22v-18zm-4 7h-1v-3.241l-11.241 11.241h3.241v1h-5v-5h1v3.241l11.241-11.241h-3.241v-1h5v5z',
};

var svgURI = 'http://www.w3.org/2000/svg';

Flickity.FullscreenButton.prototype.createIcon = function() {
  var svg = document.createElementNS( svgURI, 'svg');
  svg.setAttribute( 'class', 'flickity-button-icon' );
  svg.setAttribute( 'viewBox', '0 0 24 24' );
  // path & direction
  var path = document.createElementNS( svgURI, 'path');
  var direction = pathDirections[ this.name ];
  path.setAttribute( 'd', direction );
  // put it together
  svg.appendChild( path );
  this.element.appendChild( svg );
};

$( document ).ready(function() {
  var $slideshows = $('.medien-slideshow-element .slideshow-element__slideshow').flickity({
    cellAlign: 'left',
    contain: true,
    wrapAround: false,
    pageDots: false,
    prevNextButtons: true,
    imagesLoaded: true,
   arrowShape: {
     x0: 10,
     x1: 60, y1: 50,
     x2: 60, y2: 30,
     x3: 30
   },
     fullscreen: true,


  });

  // $slideshows.on( 'cellSelect' , function() {
  //   var flkty = $(this).data('flickity');
  //   var element = flkty.selectedElement;
  //   console.log(element);
  // });


});






// Other Slideshows
$( document ).ready(function() {
  var $slideshows = $('.slideshow-element:not(.medien-slideshow-element) .slideshow-element__slideshow').flickity({
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

     fullscreen: false,


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
