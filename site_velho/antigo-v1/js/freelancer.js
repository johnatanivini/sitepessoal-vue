/*!
 * Start Bootstrap - Freelancer Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */
/**
// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('body').on('click', '.page-scroll a', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
*/
// jQuery for page scrolling feature - requires jQuery Easing plugin
/*$(function() {
    $('a[href^="#"]').on('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});*/

$(function() {
    $('a[href^="#"]').on('click', function(event) {
        event.preventDefault();
        var $anchor = $(this);

        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');

    });
});

// Floating label headings for the contact form
$(function() {
    $("body").on("input propertychange", ".floating-label-form-group", function(e) {
        $(this).toggleClass("floating-label-form-group-with-value", !! $(e.target).val());
    }).on("focus", ".floating-label-form-group", function() {
        $(this).addClass("floating-label-form-group-with-focus");
    }).on("blur", ".floating-label-form-group", function() {
        $(this).removeClass("floating-label-form-group-with-focus");
    });
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-fixed-top'
})

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});


$(function(){



        $maxw = $(window).width();

        $maxslider = 13;

        if($maxw<=320){
            $maxslider = 2;
        }

        if($maxw>=320 && $maxw<=600){
            $maxslider = 4;
        }

        if($maxw>=600 && $maxw<=800){
            $maxslider = 6;
        }

        $('#skills > div').bxSlider({
            minSlides: $maxslider,
            maxSlides: $maxslider,
            slideWidth: 90,
            slideMargin: 10,
            ticker: true,
            pager: false,
            controls: false,
            //auto:3000
            speed: 30000

        });


});
