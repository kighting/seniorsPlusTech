//Register service worker
if ('serviceWorker' in navigator) {
    console.log("Will the service worker register?");
    navigator.serviceWorker.register('/service-worker.js', {scope: '/'})
    .then(function(reg){
        console.log("Yes, it did.");
    }).catch(function(err) {
        console.log("No it didn't. This happened: ", err)
    });
}


$(function(){
    
    //Parallax scrolling
    var rellax = new Rellax('.rellax');
    
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
    
    //Nav bg
    $(window).on("scroll", function () {
        if ($(window).scrollTop() > 438) {
            $('.wrapper-nav').css({"background":"rgba(238,102,84,1)"});
            console.log('scroll 588')
        } else {
            $('.wrapper-nav').css({"background":"rgba(238,102,84,0)"});
        } 
    });
    
});//document.ready
