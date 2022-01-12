$( ".search-btn" ).click(function() {
  if(!$("main").hasClass('search-result-page')){
  $(".search-overlay").toggleClass("search-overlay--open");
  }
  $( "#search" ).select();

});
