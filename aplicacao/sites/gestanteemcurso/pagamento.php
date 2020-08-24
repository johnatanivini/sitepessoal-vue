<!--header-->
<?php
$titulo = "Gestate em Curso - Pagamentos";
include('includes/inc_header.php');
?>
<div class="conteudo" style="line-height:25px">
    <div class="paginas" style="width:990px;">
        <div style="color:#FF884E; font-weight: bold; margin-bottom: 10px">
            <h1>&raquo; Parabéns</h1>
            <p>Você escolheu o Curso {nome do curso}.</p>
            <p>Para iniciar as aulas escolha a forma de pagamento abaixo e aguarde a confirmação no seu email.</p>
        </div>
        <div class="pagseguro">
            <a href="http://www.pagseguro.com.br"><img src="images/pagseguro.jpg" alt="pag seguro" /></a>
        </div>
        <div class="santander">
            <img src="images/santander.jpg" alt="Santander" />
            <p>Banco Santander</p>
            <p>Ag: 0477</p>
            <p>Conta corrente:9070386</p>
            <p>Alexandre P. da Silva
                <span style="text-align:right; float: right">Após transferência enviar email:<br/>
                    <a href="mailto:financeiro@gestanteemcurso.com.br">financeiro@gestanteemcurso.com.br</a></span>
            </p>
            <p>064.364.186-60 </p>

        </div>
    </div>
</div>
<!--include cursos e rodape-->
<?php include('includes/inc_footer.php'); ?>