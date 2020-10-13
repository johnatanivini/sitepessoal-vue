<!--header-->
<?php $titulo="Gestante em Curso - Principal"; include('includes/inc_header.php'); ?>

<div class="conteudo">
    <div class="area_busca">
        <?php include("includes/inc_login.php");?>
    </div>
    <div class="paginas">
        <div class="banner">
            <div class="cicle">
                <a href="#">
                    <img src="banner/1.jpg" alt="banner"/>
                </a>
                <a href="#">
                    <img src="banner/2.jpg" alt="banner"/>
                </a>
                <a href="#">
                    <img src="banner/3.jpg" alt="banner"/>
                </a>
            </div>
            <div id="nav">
            </div>
        </div>

    </div>
    <div class="sidebar">
        <?php include('includes/inc_publicidade.php');?>
    </div>
    
</div>
<script type="text/javascript">
  $(function(){
     //banner area principal
    $('.cicle').before('<div id="nav">').cycle({
        pager:'#nav'
    });
  })
</script>
<!--include cursos e rodape-->
<?php include('includes/inc_footer.php'); ?>