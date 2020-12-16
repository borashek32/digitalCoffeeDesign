$(document).ready(function(){

    $('.thankYou__close').on('click', function() {
        $('.thankYou').fadeOut();
        $(this).closest('form').get(0).reset();
    });

    $(window).scroll(function()
    {
        if ($(this).scrollTop() > 300){
            $('.up').fadeIn();
        } else {
            $('.up').fadeOut();
        }
    });
    $('.up').on('click', function(){
        var body = $("html, body");
        body.stop().animate({scrollTop:0}, '1000', 'swing');
        return false;
    });
});