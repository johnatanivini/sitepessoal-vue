<!--header-->
<?php 
$titulo = "Gestate em Curso - Painel";
include('includes/inc_header.php'); ?>
<div class="conteudo painel_controle">

    <h1>Painel de Controle <a href="#" class="sair">sair <img src="css/i/Close.png" alt="sair" height="12" style="vertical-align: middle"/></a></h1>
    <br/>
    <h2 style="color:#FF884E; font-weight: bold">Olá, {nome_professor}, acompanhe abaixo o relatório completo  do desempenho do seu curso </h2>
    <br />
    <ul class="painel">
        <li>Lista de Cursos</li>
        <li>Número de visitas</li>
        <li style="margin-right: 0">Número de Vendas</li>
    </ul>
    <ul class="painel_lista">
        <?php for ($i = 0; $i <= 8; $i++) { ?>
            <li class="ok_curso">Curso 01 </li>
            <li class="users">120 visitas</li>
            <li class="vendas">86 vendidos</li>
        <?php } ?>
        <!--loop-->
    </ul>

    <div style="color: #666; padding:5px;clear: both">
        <p>
            Coloque seu curso na página inicial contratando nosso plano master, maiores informações: <a href="mailto:admin@gestanteecurso.com.br">admin@gestanteemcurso.com.br</a> </p>
    </div>
    <!--include cursos e rodape-->
    <?php include('includes/inc_footer.php'); ?>