<!--header-->
<?php
$titulo = "Gestate em Curso - Fale Conosco";
include('includes/inc_header.php');
include("ckeditor/ckeditor_php5.php");
include("ckeditor/ckfinder/ckfinder.php");
?>
<div class="conteudo">
    <div class="area_busca">
        <?php include("includes/inc_login.php"); ?>
    </div>
    <div class="paginas">
        <h1 class="titulo">Fale Conosco</h1>
        <form action="#" method="post" class="form">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" size="400"/>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="" size="400" />
            <label for="mensagem">Mensagem:</label>
            <?php
            $CKEditor = new CKEditor();
            $CKEditor->basePath = './ckeditor/';
            $config = array();
            $config['toolbar'] = array(
                array('Bold', '-'),
                array('TextColor')
            );
            $ckfinder = new CKFinder();
            $ckfinder->BasePath = './ckeditor/ckfinder/'; // Note: the BasePath property in the CKFinder class starts with a capital letter.
            $ckfinder->SetupCKEditorObject($CKEditor);
            $CKEditor->editor('mensagem', '', $config);
            ?>
            <input type="submit" id="enviar" name="enviar" value="Enviar" />
        </form>
    </div>
    <div class="sidebar">
        <?php include('includes/inc_publicidade.php'); ?>
    </div>
</div>
<!--include cursos e rodape-->
<?php include('includes/inc_footer.php'); ?>