///hide the more content
$( document ).ready(function() {

  $(".multiteaser-item--accordion").addClass('multiteaser-item--accordion-js');
  $(".multiteaser-item--accordion .multiteaser__text").hide();
  $(".multiteaser-item--accordion .multiteaser__content").css('cursor', 'pointer');
  $(".multiteaser-item--accordion .multiteaser__toggle-btn").show();

});

$( ".multiteaser-item--accordion .multiteaser__content" ).click(function() {
  $(this).parents(".multiteaser-item--accordion").toggleClass('multiteaser-item--accordion-open');

})
