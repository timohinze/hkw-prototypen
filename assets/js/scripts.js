//  image oriantation

// das macht ihr anders…
$(window).on('load',function(){
    $('img').each(function(){
        if ($(this).width()/$(this).height() >= 1) {
            $(this).addClass('landscape');
						$(this).parent("figure").addClass('landscape-wrap');
        } else {
            $(this).addClass('portrait');
						$(this).parent("figure").addClass('portrait-wrap');

        }
    });
});
