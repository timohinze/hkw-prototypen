///hide the more content
$( document ).ready(function() {

  $(".multiteaser-item--accordion").addClass('multiteaser-item--accordion-js');
  $(".multiteaser-item--accordion .multiteaser-item__text").hide();
  $(".multiteaser-item--accordion .multiteaser-item__content").css('cursor', 'pointer');
  $(".multiteaser-item--accordion .multiteaser__toggle-btn").show();

});

$( ".multiteaser-item--accordion .multiteaser-item__content" ).click(function(e) {
  // keine Action bei Klick auf Link
  if (e.target.tagName != 'A'){
    $(this).parents(".multiteaser-item--accordion").toggleClass('multiteaser-item--accordion-open');
  }

})
