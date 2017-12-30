$(function(){
    
    //Nav item scrolling
    $('a.nav-link').on('click', function (event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $(this.hash).offset().top - 48
        }, 500);       
        return false;
    });
    
    $('#btn-schedule').on('click', function (event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $('#contact').offset().top - 48
        }, 500);
        return false;
    });
    
    //Mobile nav shadow
    var shadow = true;
    $('.navbar-toggler').on('click', function (event) { 
        if (shadow === true) {
            $('.wrapper-nav').css({'box-shadow': '0 0 20px 0 rgba(0,0,0,0.3)'});
            shadow = false;
        } else if (shadow === false) {
            $('.wrapper-nav').css({'box-shadow': 'none'});
            shadow = true;
        }
    });
    
});//document.ready
