;(function ($, window, undefined) {
  'use strict';

  var $doc = $(document),
      Modernizr = window.Modernizr;

  $(document).ready(function() {
  	
  	 var scrollCount;

        if( $(window).width() < 480 ) {
            scrollCount = 2;
        } else if( $(window).width() > 768 &&  $(window).width() < 959 ) {
            scrollCount = 5;
        } 
        else if( $(window).width() > 480 &&  $(window).width() < 765 ) {
            scrollCount = 3;
        }
        else if( $(window).width() < 960 ) {
            scrollCount = 6;
        } else {
            scrollCount = 6;
        }
  	
    $.fn.foundationAlerts           ? $doc.foundationAlerts() : null;
    $.fn.foundationButtons          ? $doc.foundationButtons() : null;
    $.fn.foundationAccordion        ? $doc.foundationAccordion() : null;
    $.fn.foundationNavigation       ? $doc.foundationNavigation() : null;
    $.fn.foundationTopBar           ? $doc.foundationTopBar() : null;
    $.fn.foundationCustomForms      ? $doc.foundationCustomForms() : null;
    $.fn.foundationMediaQueryViewer ? $doc.foundationMediaQueryViewer() : null;
    $.fn.foundationTabs             ? $doc.foundationTabs({callback : $.foundation.customForms.appendCustomMarkup}) : null;
    $.fn.foundationTooltips         ? $doc.foundationTooltips() : null;
    $.fn.foundationMagellan         ? $doc.foundationMagellan() : null;
    $.fn.foundationClearing         ? $doc.foundationClearing() : null;

    $.fn.placeholder                ? $('input, textarea').placeholder() : null;
    $.fn.fancybox 					? $('.lightbox').fancybox({
    	helpers:{
    		title:'outside'
    	}
    }) : null;
	
	 $.fn.placeholder 				? $(".carroucel").jCarouselLite({
        btnNext: ".next",
        btnPrev: ".prev",
         visible: scrollCount,
          auto: 800,
    speed: 1000
    }):null;				
								
	
	if( $(window).width() < 768 ) {
		$('nav ul li ul').hide();
	$('nav ul li').click(function(){
		$(this).find('.sub').css({"background-position-x":"-92px","width":"12px"})
		$(this).find('ul').stop(true,true).slideToggle();
	});
	}else{
		$('nav ul li ul').hide();
	$('nav ul li').hover(function(){
		$(this).find('.sub').css({"background-position-x":"-92px","width":"12px"})
		$(this).find('ul').stop(true,true).slideDown();
	},function(){
		$(this).find('.sub').css({"background-position-x":"-140px"})
		$(this).find('ul').stop(true,true).slideUp();
	
	})
	}
	/*
	 * anima cartão
	 */
	
	$('.logo a').css({'left':'-300px'});
	$('.logo a').delay(1000).animate({'left':'10px'},2000);
	$('.cartoes').delay(1000).animate({'bottom':'0px'},2000);
	
  });

  // UNCOMMENT THE LINE YOU WANT BELOW IF YOU WANT IE8 SUPPORT AND ARE USING .block-grids
  // $('.block-grid.two-up>li:nth-child(2n+1)').css({clear: 'both'});
  // $('.block-grid.three-up>li:nth-child(3n+1)').css({clear: 'both'});
  // $('.block-grid.four-up>li:nth-child(4n+1)').css({clear: 'both'});
  // $('.block-grid.five-up>li:nth-child(5n+1)').css({clear: 'both'});

  // Hide address bar on mobile devices (except if #hash present, so we don't mess up deep linking).
  if (Modernizr.touch && !window.location.hash) {
    $(window).load(function () {
      setTimeout(function () {
        window.scrollTo(0, 1);
      }, 0);
    });
  }

})(jQuery, this);
