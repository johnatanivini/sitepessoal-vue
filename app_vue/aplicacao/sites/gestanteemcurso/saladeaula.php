<!--header-->
<?php
$titulo = "Gestate em Curso - Sala de Aula";
include('includes/inc_header.php');
?>
<div class="conteudo">

    <div class="area_busca detalhe_curso">
        <h1 class="titulo" style="border: none">Sala de Aula <a href="#" class="sair">Sair <img src="css/i/Close.png" alt="sair" height="10"/></a></h1>    
        <br />
        <p>Olá {aluno}, boa aula!</p>
        <p class="titulo">Atividades Físicas para gestante</p>  
        <br />
        <h2><img src="css/i/link_menu.jpg" /> Capítulos do curso</h2>
        <br />
        <ul>
            <?php for ($i = 0; $i < 8; $i++) { ?>
                <li>Capítulo <?= $i + 1; ?></li>
            <?php } ?>
        </ul>
    </div>
    <div class="paginas sobre_curso">
        <h1 class="titulo">Nome do capítulo</h1>
    </div>
</div>
<!--include cursos e rodape-->
<?php include('includes/inc_footer.php'); ?>