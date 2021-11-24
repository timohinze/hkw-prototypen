///hide the more content
$( document ).ready(function() {
  $(".multiteaser-item--accordion .multiteaser__text").hide();
  $(".multiteaser-item--accordion .multiteaser__content").css('cursor', 'pointer');
  $(".multiteaser-item--accordion .multiteaser__toggle-btn").show();

});

// click on button is toggling the sibling with class "more"
// $( ".multiteaser__toggle-btn" ).click(function() {
//   $(this).parents(".multiteaser-item--accordion").toggleClass('multiteaser-item--accordion-open');
//
// })

$( ".multiteaser-item--accordion .multiteaser__content" ).click(function() {
  $(this).parents(".multiteaser-item--accordion").toggleClass('multiteaser-item--accordion-open');

})


// $(".readmore-btn").click(function() {
//     $(this).toggleClass("open");
// });
