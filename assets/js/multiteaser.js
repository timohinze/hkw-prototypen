///hide the more content
$( document ).ready(function() {
  $(".multiteaser-item--accordion .multiteaser__text").hide();
});

// click on button is toggling the sibling with class "more"
$( ".multiteaser__toggle-btn" ).click(function() {
  $(this).parents(".multiteaser-item--accordion").toggleClass('multiteaser-item--accordion-open');

})

// $(".readmore-btn").click(function() {
//     $(this).toggleClass("open");
// });
