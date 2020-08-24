<?php
$titulo = "Gestate em Curso - Cadastre seu Curso";
include('includes/inc_header.php');
include("ckeditor/ckeditor_php5.php");
include("ckeditor/ckfinder/ckfinder.php");
?>
<div class="conteudo">
    <form action="#" name="form_cad_curso" id="form_login" method="post" class="form">
        <div class="area_busca">
            <h2><img src="css/i/link_menu.jpg" width="4" height="8" alt=""  class="seta"/>Cadastre seu curso</h2>

            <label for="nome_curso">Nome do Curso</label>
            <input type="text" id="nome_curso" name="nome_curso" value="" size="210" />
            <label for="valor_curso">Valor do curso</label>
            <input type="text" id="valor_curso" name="valor_curso" value="" size="210" />
            <h2><img src="css/i/link_menu.jpg" width="4" height="8" alt="" class="seta"/>Capa do Curso:</h2>
            <div class="inputFile">
                <span>Arquivo</span>
                <input type="file" name="imagem_capa" id="arquivo" value="Selecionar arquivo" />
            </div>

            <div class="clear"></div>
        </div>
        <div class="paginas">
            <div class="aula_curso">
                <?php
                $CKEditor = new CKEditor();
                $CKEditor->basePath = './ckeditor/';
                $config = array();
                $config['toolbar'] = array(
                    array('Source', '-', 'Bold', 'Italic', 'Underline', 'Strike', '-', 'Table', '-'),
                    array('Image', 'Link', 'Unlink', 'Anchor', 'file', 'fileButton', '-', 'NumberedList', 'BulletedList', '-', 'PasteText', '-', 'TextColor', 'BGColor', '-', '-', 'Maximize', 'ShowBlocks', '-', 'Flash', '-', 'RemoveFormat', '-', 'PageBreak')
                );
                $ckfinder = new CKFinder();
                $ckfinder->BasePath = './ckeditor/ckfinder/'; // Note: the BasePath property in the CKFinder class starts with a capital letter.
                $ckfinder->SetupCKEditorObject($CKEditor);
                $CKEditor->editor('materia_noticia', 'insira o conteudo da materia', $config);
                ?>
            </div>
            <div style="float:right">
                <input type="submit" id="submit" name="enviar" value="salvar e continuar"/>
            </div>
        </div>
    </form>
    <div class="sidebar">
        <?php include('includes/inc_publicidade.php'); ?>
    </div>
</div>
<!--include cursos e rodape-->
<?php include('includes/inc_footer.php'); ?>