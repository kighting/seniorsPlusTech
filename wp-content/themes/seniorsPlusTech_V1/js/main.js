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
    
    //Nav bg
    function navBehavior() {
        if ($(window).scrollTop() > 438) {
            $('.wrapper-nav').css({"background":"rgba(238,102,84,1)"});
            $('.navbar-toggler').on('click', function (event) { 
                $('.wrapper-nav').css({"background":"rgba(238,102,84,1)"});
            });
        } else {
            $('.wrapper-nav').css({"background":"rgba(238,102,84,0)"});
            //Mobile nav shadow
            var shadow = true;
            $('.navbar-toggler').on('click', function (event) { 
                if (shadow === true) {
                    $('.wrapper-nav').css({'box-shadow': '0 0 20px 0 rgba(0,0,0,0.3)', 'background':'rgba(238,102,84,1)'});
                    shadow = false;
                } else if (shadow === false) {
                    $('.wrapper-nav').css({'box-shadow': 'none', 'background':'rgba(238,102,84,0)'});
                    shadow = true;
                }
            });
        } 
    } 
    navBehavior();
    $(window).on("scroll", function () {
        navBehavior();
    });
     
    // Disable scroll when focused on a number input.
    $('form').on('focus', 'input[type=number]', function(e) {
        $(this).on('wheel', function(e) {
            e.preventDefault();
        });
    });
 
    // Restore scroll on number inputs.
    $('form').on('blur', 'input[type=number]', function(e) {
        $(this).off('wheel');
    });
 
    // Disable up and down keys.
    $('form').on('keydown', 'input[type=number]', function(e) {
        if ( e.which == 38 || e.which == 40 )
            e.preventDefault();
    });
    
});//document.ready
