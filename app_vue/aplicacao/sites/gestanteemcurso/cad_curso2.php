<!--header-->
<?php
$titulo = "Gestate em Curso - Capitulos do Curso";
include('includes/inc_header.php');
include("ckeditor/ckeditor_php5.php");
include("ckeditor/ckfinder/ckfinder.php");
?>
<div class="conteudo">
    <form action="#" name="form_cad_curso" id="form_login" method="post" class="form">
        <div class="area_busca">
            <h2><img src="css/i/link_menu.jpg" width="4" height="8" alt=""  class="seta"/>Capítulos do Curso</h2>

            <label for="capitulo_curso">Nome do Capítulo</label>
            <input type="text" id="capitulo_curso" name="capitulo_curso" value="" size="210" />
            <br/>
            <br/>
            <p><img src="css/i/link_menu.jpg" width="4" height="8" alt=""  class="seta"/> Tutorial:</p>
            <br/>
            <p>1. Insira o nome do capítulo</p>
            <p>2. Escreva o curso e insira fotos;</p>
            <p>3. Revise seu texto;</p>
            <p>4. Clique em salvar e¨continuar;</p>
            <p>5.Quando terminar todos os capítulos, clique em cadastrar curso. </p>
            <br/>
            <p> <img src="css/i/link_menu.jpg" width="4" height="8" alt=""  class="seta"/> Lista de capitulos:</p>
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
        <button type="submit">Salvar Curso</button>
        <small class="red">Clique após cadastrar todos os capítulos</small>
    </div>
</div>
<!--include cursos e rodape-->
<?php include('includes/inc_footer.php'); ?>