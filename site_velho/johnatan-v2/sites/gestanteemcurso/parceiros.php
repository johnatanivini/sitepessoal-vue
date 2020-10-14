<!--header-->
<?php
$titulo = "Gestate em Curso - Parceiros";
include('includes/inc_header.php');
include("ckeditor/ckeditor_php5.php");
include("ckeditor/ckfinder/ckfinder.php");
?>
<div class="conteudo">
    <div class="area_busca">
        <?php include("includes/inc_login.php"); ?>
    </div>
    <div class="paginas">
        <h1 class="titulo">Nossos parceiros</h1>
        <?php for($i=0;$i<8;$i++){?>
        <div class="parceiros">
            <a href="#" title="parceiros"><img src="images/sem-imagem.png" alt="parceiros"/></a>
        </div>
        <?php }?>
    </div>
    <div class="sidebar">
        <?php include('includes/inc_publicidade.php'); ?>
    </div>
</div>
<!--include cursos e rodape-->
<?php include('includes/inc_footer.php'); ?>