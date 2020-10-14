<!--header-->
<?php
$titulo = "Gestate em Curso - Quero Ensinar";
include('includes/inc_header.php');
include("ckeditor/ckeditor_php5.php");
include("ckeditor/ckfinder/ckfinder.php");


$CKEditor = new CKEditor();
$CKEditor->basePath = './ckeditor/';
$config = array();
$config['toolbar'] = array(
    array('Bold', 'Italic', '-'),
    array('PasteText', 'RemoveFormat')
);
$ckfinder = new CKFinder();
$ckfinder->BasePath = './ckeditor/ckfinder/'; // Note: the BasePath property in the CKFinder class starts with a capital letter.
$ckfinder->SetupCKEditorObject($CKEditor);

?>
<div class="conteudo">

    <div class="area_busca">
<?php include("includes/inc_login.php"); ?>
    </div>
    <div class="paginas">
        <form action="#" name="form_cad_curso" id="form_login" method="post" class="form">
            <div class="aula_curso">
                <label for="nome_professor">Nome:</label>
                <input type="text" id="nome_professor" name="nome_professor" size="400"/>

                <label for="email_professor">Email(será seu login para acesso):</label>
                <input type="text" id="email_professor" name="email_professor" size="400"/>

                <label for="senha_professor">Senha:</label>
                <input type="text" id="senha_professor" name="senha_professor" size="400"/>
                <label for="relato_trabalho">Breve relato do seu trabalho</label>
<?php
$CKEditor->editor('relato_professor', 'escreva um resumo do seu trabalho', $config);
?>
                <label for="relato_trabalho">Dados Bancários</label>
                <?php
                $CKEditor->editor('dados_professor', 'coloque aqui seu dados bancários  (agência / conta / cpf ) ou abra uma conta em pagseguro.com.br', $config);
                ?>
                <label for="enviar"></label>
                <input type="submit" id="enviar" name="cadastrar" value="salvar e continuar" />
            </div>
        </form>
    </div>

    <div class="sidebar">
<?php include('includes/inc_publicidade.php'); ?>
    </div>
</div>
<!--include cursos e rodape-->
<?php include('includes/inc_footer.php'); ?>