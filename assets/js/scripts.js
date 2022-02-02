//  image oriantation

// das macht ihr anders…
$(window).on('load',function(){
    $('img').each(function(){
        if ($(this).width() > $(this).height()) {
            $(this).addClass('landscape');
						$(this).parent("figure").addClass('landscape-wrap');
        } else if ($(this).width() <$(this).height()){
            $(this).addClass('portrait');
						$(this).parent("figure").addClass('portrait-wrap');
        }

        else {
            $(this).addClass('square');
						$(this).parent("figure").addClass('square-wrap');
        }
    });
});
