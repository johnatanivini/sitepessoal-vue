/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
    //transforma dinamicamente os input em estilo arrojado
    $('.form').jqTransform();
   
    ///deixa a area destaque curso na mesma altura dos outros cursos
    $('.curso_destaque').css({
        'height':$('.outros_cursos').height()-20
    });
    // define uma acao para o input file
    $("#arquivo").change(function() {
        $(this).prev().html($(this).val());
    });
        
    
})

Cufon.replace('h1,h2,h3,h4,h5,h6'); // Works without a selector engine
Cufon.replace('.bg_forms  label');
Cufon.replace('.menu a')