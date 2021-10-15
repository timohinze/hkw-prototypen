//  image oriantation

$(window).on('load',function(){
    $('img').each(function(){
        if ($(this).width()/$(this).height() >= 1) {
            $(this).addClass('landscape');
        } else {
            $(this).addClass('portrait');
        }
    });
});
