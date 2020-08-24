<?php include('includes/inc_header.php'); ?>
<?php include('includes/inc_busca.php'); ?>
<div class="paginas">
    
    <h1>H1 com estilo</h1>
    <p><br />&rAarr; Lista não ordenada <span class="laranja">class="ul"</span><br /><br /></p>
    <ul class="ul">
        <li> Texto aqui</li>
        <li> Texto aqui</li>
        <li> Texto aqui</li>
        <li> Texto aqui</li>
    </ul>
    <p><br />    &rAarr; Lista ordenada <span class="laranja">class="ol"</span><br /><br /></p>
    <ol class="ol">
        <li>Texto aqui</li>
        <li>Texto aqui</li>
        <li>Texto aqui</li>
        <li>Texto aqui</li>
    </ol>
    <p><br />&rAarr; Lista não ordenada <span class="laranja"><?=
highlight_string('<blockquote><span>"</span>Texto<span>"</span><blockquote>');?></span><br /><br /></p>
    <blockquote><span>"</span>É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação. A vantagem de usar Lorem Ipsum é que ele tem uma distribuição normal de letras, ao contrário de "Conteúdo aqui, conteúdo aqui", fazendo com que ele tenha uma aparência similar a de um texto legível. Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como texto-modelo padrão, e uma rápida busca por 'lorem ipsum' mostra vários websites ainda em sua fase de construção. Várias versões novas surgiram ao longo dos anos, eventualmente por acidente, e às vezes de propósito (injetando humor, e coisas do gênero).<span>"</span></blockquote>
    
    <p><br />&rAarr; links<span class="laranja"><?=
highlight_string('class="leiaMais"');?></span><br /><br /></p>
    
    <a class="leiaMais">Link</a>
    
   <?php include('includes/inc_atendimento.php');?>
</div> 
<?php
include('includes/inc_footer.php')?>
 