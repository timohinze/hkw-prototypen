$( "#show-filter-years" ).click(function() {
  if($( ".project-filter-years" ).hasClass("project-filter-years--open")){
    $( ".project-filter-years" ).removeClass("project-filter-years--open");
  }else{
    $( ".project-filter-years" ).addClass("project-filter-years--open");
  }
});


$( "#show-filter" ).click(function() {
  if($( ".project-filter" ).hasClass("project-filter--open")){
    $( ".project-filter" ).removeClass("project-filter--open");
  }else{
    $( ".project-filter" ).addClass("project-filter--open");
  }

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
