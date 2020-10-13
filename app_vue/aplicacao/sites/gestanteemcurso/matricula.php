<!--header-->
<?php
$titulo = "Gestate em Curso - Matrícula";
include('includes/inc_header.php');
include("ckeditor/ckeditor_php5.php");
include("ckeditor/ckfinder/ckfinder.php");
?>
<div class="conteudo">

    <div class="pagina " style="width:400px">
        <form action="#" name="form_matricula" id="form_login" method="post" class="form">
            <h2><img src="css/i/link_menu.jpg" width="4" height="8" alt=""  class="seta"/>Faça sua matrícula</h2>
            <br />
            <p >Nome</p>
            <input type="text" id="nome" name="nome" value="" size="400" />
            <br/>
            <br />
            <p >Email ( Seu login de acesso a sala de aula )</p>
            <input type="text" id="email" name="email" value="" size="400" />
            <br />
            <br />
            <p >Senha</p>
            <input type="text" id="senha" name="senha" value="" size="400" />
            <br />
            <br />
            <p >Curso escolhido</p>
            <select name="curso">
                <option value="0">escolha seu curso</option>
                <option value="1">Amamentação , um investimento para toda vida - 30,00 &nbsp;&nbsp;&nbsp;&nbsp;</option>
                <option value="2">Curso 2</option>
            </select>
            <br />
            <br />
            <input type="submit" id="cdastrar" name="cadastrar" value="Concluir matrícula" />
        </form>
        <div class="clear"></div>
    </div>
</div>
<!--include cursos e rodape-->
<?php include('includes/inc_footer.php'); ?>