$(window).scroll(function(e){
    parallax();
});

function parallax(){
    var scrolled = $(window).scrollTop();
    $('#bimg2').css('background-position-y',-(scrolled * 1.2)+'px');
    $('#bimg3').css('background-position-y',-(scrolled * 0.8)+'px');
    $('#bimg4').css('background-position-y',-(scrolled * 1.0)+'px');
}


