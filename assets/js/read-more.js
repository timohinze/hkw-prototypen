///hide the more content
$( document ).ready(function() {
  $(".more").hide();
});

// click on button is toggling the sibling with class "more"
$( ".readmore-btn" ).click(function() {
  $(this).siblings(".more").toggle();

})

// change text of button
// $(".readmore-btn").click(function() {
//     if ($(this).text() == "\u002b") {
//         $(this).text("\u2212");
//     } else {
//         $(this).text("\u002b");
//     };
// });


$(".readmore-btn").click(function() {
    $(this).toggleClass("open");
});
