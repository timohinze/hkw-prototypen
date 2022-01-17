$( ".search-btn" ).click(function() {
  // not on search result page
  if(!$("main").hasClass('search-result-page')){

    // close menu
    $(".page-header").removeClass("header--open-menu");
    $(".header__burger").removeClass("header__burger--open");

    // open search overlay
    $(".page-header").toggleClass("header--open-search");
    $( ".search-btn" ).toggleClass('search-btn--open');

    $( "#search" ).select();
  }
});
