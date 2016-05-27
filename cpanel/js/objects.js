$(function() {
    $('.header #menu li a').mouseover(function() {
        $(this).animate({
            backgroundColor: "#5196fe"
        }, 'fast');
    });
    $('.header #menu li a').mouseout(function() {
        $(this).animate({
            backgroundColor: "#232323"
        }, 'fast');
    });
});
