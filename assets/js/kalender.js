$( "#show-filter" ).click(function() {
  $( ".calendar-filter" ).toggle();

});

$( "#reset-filter" ).click(function() {
  $( '.calendar-filter input[type="checkbox"]' ).prop( "checked", false );
});
