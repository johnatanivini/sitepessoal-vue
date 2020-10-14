<!--header-->
<?php
$titulo = "Gestate em Curso - Sobre o Curso";
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

    <div class="area_busca detalhe_curso">
        <div class="foto_curso">
            <img src="images/sem-imagem.png" alt="nome curso"/>
        </div>            
        <p class="titulo">Atividades Físicas para gestante</p>

        <p class="valor">Valor: R$ 30,00</p>
        <div class="clear"></div>
            <a href="#" class="leiamais"> matricular &raquo;</a>
            <div class="clear"></div>    
            <br />
            <h2><img src="css/i/link_menu.jpg" /> Capítulos do curso</h2>
            <br />
            <ul>
                <?php for($i=0;$i<8;$i++){?>
                <li>Capítulo <?=$i+1;?></li>
                <?php } ?>
            </ul>
    </div>
    <div class="paginas sobre_curso">
        <h1 class="titulo">Sobre o curso</h1>

        <p>texto sobre o curso referente</p>
    </div>
</div>
<!--include cursos e rodape-->
<?php include('includes/inc_footer.php'); ?>