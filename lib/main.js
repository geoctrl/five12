var offsetHeight = 60;

$(document).ready(function() {

    var pages = $('section[id]'),
        header = $('header');
    
    $(window).on('scroll resize', function() {
        currentState();
    });
    
    function init() {
        currentState();
    }
    

    function currentState() {
        var windowTop = $(window).scrollTop();
        
        if (windowTop != 0) {
            header.addClass('isFixed');
        } else {
            header.removeClass('isFixed');
        }
        
        for (var i = pages.length; i > 0; i--) {
            var divTop = $('#' + pages[i - 1].id).offset().top - offsetHeight;
            if (divTop < windowTop) {
                $('header .nav.pull-left button').removeClass('isActive');
                $('header .nav.pull-left button:nth-child(' + i + ')').addClass('isActive');
                return;
            } else {
                $('header .nav.pull-left button').removeClass('isActive');
            }
        }
    }
    
    init();

});

function scrollById(id, offset) {
    $('#'+id)
        .velocity('scroll', {
            offset: (offsetHeight * -1) + 2
        })
}
