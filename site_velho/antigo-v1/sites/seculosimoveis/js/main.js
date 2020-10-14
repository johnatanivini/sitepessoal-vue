/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function(){
    //show hide atendimento
    $('.atendimento').hover(function(){
        $(this).animate({
            'right':'0'
        },500);
    },function(){
        $(this).animate({
            'right':'-45px'
        },500)
    })
    //banner 
  
    $('.box').each(function(i){
        $('.slid-item',this).jCarouselLite({
            btnNext: ".next",
            btnPrev: ".prev"
        })
    });
    $("#cidade,#estado").multiselect({
        multiple:false,
        header: "Selecione uma opção",
        noneSelectedText: "Selecione uma opção",
        selectedList: 1
    });
    $("#bairro,#tipo").multiselect({
        header: "Selecione uma opção",
        noneSelectedText: "Selecione uma opção",
        selectedList: 4
    });
    //tabs
    var tabContainers = $('div.tabs > div');
    tabContainers.hide().filter(':first').show();
			
    $('div.tabs ul.tabNavigation a').click(function () {
        tabContainers.hide();
        tabContainers.filter(this.hash).show();
        $('div.tabs ul.tabNavigation a').removeClass('selected');
        $(this).addClass('selected');
        return false;
    }).filter(':first').click();
    //fonte
    var fonte = 13;
    $('#aumenta').click(function(){
        if (fonte<25){
            fonte = fonte+1;
            $('.paginas').css({
                'font-size' : fonte+'px'
                });
        }
        return false;
    });
    $('#diminui').click(function(){
        if (fonte>9){
            fonte = fonte-1;
            $('.paginas').css({
                'font-size' : fonte+'px'
                });
        }
        return false;
    });
    //imovel detalhe
    // We only want these styles applied when javascript is enabled
        $('div.navigation').css({'width' : '213px', 'float' : 'left'});
        $('div.content').css('display', 'block');

        // Initially set opacity on thumbs and add
        // additional styling for hover effect on thumbs
        var onMouseOutOpacity = 0.67;
        $('#thumbs ul.thumbs li').opacityrollover({
            mouseOutOpacity:   onMouseOutOpacity,
            mouseOverOpacity:  1.0,
            fadeSpeed:         'fast',
            exemptionSelector: '.selected'
        });
	//Cufon.replace('h1,h2');			
        // Initialize Advanced Galleriffic Gallery
        var gallery = $('#thumbs').galleriffic({
            delay:                     2500,
            numThumbs:                 8,
            preloadAhead:              10,
            enableTopPager:            true,
            enableBottomPager:         true,
            maxPagesToShow:            7,
            imageContainerSel:         '#slideshow',
            controlsContainerSel:      '#controls',
            captionContainerSel:       '#caption',
            loadingContainerSel:       '#loading',
            renderSSControls:          true,
            renderNavControls:         true,
            playLinkText:              'Iniciar Slideshow',
            pauseLinkText:             'Pausar Slideshow',
            prevLinkText:              '&lsaquo; Foto anterior',
            nextLinkText:              'Próxima Foto &rsaquo;',
            nextPageLinkText:          'Próxima &rsaquo;',
            prevPageLinkText:          '&lsaquo; Anterior',
            enableHistory:             false,
            autoStart:                 false,
            syncTransitions:           true,
            defaultTransitionDuration: 900,
            onSlideChange:             function(prevIndex, nextIndex) {
                // 'this' refers to the gallery, which is an extension of $('#thumbs')
                this.find('ul.thumbs').children()
                .eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
                .eq(nextIndex).fadeTo('fast', 1.0);
            },
            onPageTransitionOut:       function(callback) {
                this.fadeTo('fast', 0.0, callback);
            },
            onPageTransitionIn:        function() {
                this.fadeTo('fast', 1.0);
            }
        })
     
    //cicle
    $('.cycle').before('<div id="nav">') 
    .cycle({ 
        fx:'fade',
        speed:  'slow', 
        timeout: 2000, 
        pager:  '#nav',
        next:   '#next', 
        prev:   '#prev' 
    })
                  
                  
})

