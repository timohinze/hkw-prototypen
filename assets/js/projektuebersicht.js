$( "#show-filter-years" ).click(function() {
  $( ".project-filter-years" ).toggle();
});
$( "#show-filter" ).click(function() {
  $( ".project-filter" ).toggle();
});


 $( "#filter__year--all" ).click(function() {
   if ($(this).prop('checked')) {
     $( '.project-filter-years input[type="checkbox"]' ).prop( "checked", true );
     $(this).next("label").text("Zurücksetzen");
   }else{
     $( '.project-filter-years input[type="checkbox"]' ).prop( "checked", false );
     $(this).next("label").text("Alle Jahre");

   }
 });
