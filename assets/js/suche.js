$( ".search-btn" ).click(function() {
  if(!$("main").hasClass('search-result-page')){

    //hide mobile menu
    $(".page-header").removeClass("header--open-menu");
    $(".header__burger").removeClass("header__burger--open");


 if($(".search-overlay").hasClass("search-overlay--open")){
   $(".search-overlay").removeClass("search-overlay--open");
   $( ".search-btn" ).removeClass('search-btn--open');

 }else{
   $(".search-overlay").addClass("search-overlay--open");
   $( ".search-btn" ).addClass('search-btn--open');
   $( "#search" ).select();

 }

}

});
