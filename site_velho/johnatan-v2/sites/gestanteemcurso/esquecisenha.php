<!--header-->
<?php
$titulo = "Gestate em Curso - Esqueci a senha";
include('includes/inc_header.php');
include("ckeditor/ckeditor_php5.php");
include("ckeditor/ckfinder/ckfinder.php");
?>
<div class="conteudo">
    <div class="area_busca " id="perdi_senha" style="width:400px; margin: 0 auto; float:none; text-align:center">
        <form action="#" name="form_matricula" id="form_login" method="post" class="form">
            <h2><img src="css/i/link_menu.jpg" width="4" height="8" alt=""  class="seta"/>Resgate sua senha:</h2>
            <br />
            <p >Digite Seu email para receber novamente sua senha de acesso</p>
            <input type="text" id="nome" name="resgate_senha" value="" size="400" />
            <br />
            <input type="submit" id="cdastrar" name="cadastrar" value="Resgatar Senha" />
        </form>
        <div class="clear"></div>
    </div>
</div>
<!--include cursos e rodape-->
<?php include('includes/inc_footer.php'); ?>