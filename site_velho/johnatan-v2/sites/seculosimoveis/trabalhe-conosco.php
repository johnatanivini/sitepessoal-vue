<?php include('includes/inc_header.php'); ?>
<?php include('includes/inc_busca.php'); ?>
<div class="paginas">
    <div class="breadcumb">
        <p>Voce está em: <a href="#">Trabalhe Conosco</a></p>
    </div>
    <h1>TRABALHE CONOSCO<span class="right" style="width:60px"><a href="#" id="diminui">A- </a><a id="aumenta" href="#">A+ </a></span></h1>
    <h2>Solicite-nos uma avaliação do seu imóvel. Teremos o maior prazer em atendê-lo.</h2>
    <p>Na Séculos imóveis você encontrará a oportunidade de crescimento que procura. Se você é um profissional dinâmico, aberto ao novo, disposto e com potencial, seu lugar é aqui!</p>
    <p>Envie-nos seu "curriculum vitae" através dos e-mail´s</p>

    <p>Aguardamos seu contato através dos e-mail´s</p>
    <ul class="ul">
        <li>andradediretor@seculosimoveis.com.br</li>

        <li>carlos.alessandro@seculosimoveis.com.br </li>

        <li>seculosimoveis@seculosimoveis.com.br</li>
</ul>
        <p>Ou ligue-nos: (31) 3378-1410 / 4101-8336 / 7818-7005</p>
        <!--formulario-->
        <h1></h1>
       <form action="#" method="post" enctype="multipart/form-data" name="form1">
        <input name="campos_obrigatorios" type="hidden" id="campos_obrigatorios" value="nome,email,telefone">
        <input name="mensagem_preenchidos" type="hidden" id="mensagem_preenchidos" value="Favor informar o Nome!,Favor informar o E-mail!,Favor informar o Telefone!">
        <input name="dest" type="hidden" id="dest" value="seculosimoveis@seculosimoveis.com.br">
        <input name="campos" type="hidden" id="campos" value="nome,email,telefone,mensagem">
        <input name="campos_descricao" type="hidden" id="campos_descricao" value="Nome: ,E-mail: ,Telefone: ,Mensagem: ">
        <input name="titulo_formulario" type="hidden" id="titulo_formulario" value="Formul&aacute;rio de Trabalhe Conosco pelo site">
        <input name="assunto" type="hidden" id="assunto" value="Formul&aacute;rio de Trabalhe Conosco pelo site">
        <input name="retorno" type="hidden" id="retorno" value="conf.php">
        <table border="0" cellpadding="5" cellspacing="3">
          <tr>
            <td align="right"><strong>Nome:</strong></td>
            <td><input name="nome" type="text" class="Formulario" id="nome"  style="width: 300px;"></td>
          </tr>
          <tr>
            <td align="right"><strong>E-mail:</strong></td>
            <td><input name="email" type="text" class="Formulario" id="email" style="width: 300px;"></td>
          </tr>
          <tr>
            <td align="right"><strong>Telefone:</strong></td>
            <td><input name="telefone" type="text" class="Formulario" id="telefone" style="width: 300px;"></td>
          </tr>
          <tr>
            <td align="right"><strong>Curr&iacute;culo:</strong></td>
            <td><input name="arquivo" type="file" class="Formulario" id="arquivo" style="width: 300px;"></td>
          </tr>
          <tr>
            <td align="right" valign="top"><strong>Mensagem:</strong></td>
            <td><textarea name="mensagem" rows="7" class="Formulario" id="mensagem" style="width: 300px; overflow: auto;"></textarea></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><label for="Submit"></label>
              <input name="Enviar" type="submit" class="Formulario" id="Enviar" value="Enviar" style="background: #666; border: 1px solid #000; color: #fff;">
              <label for="label"></label>
              <input name="Limpar" type="reset" class="Formulario" id="label" value="Limpar" style="background: #666; border: 1px solid #000; color: #fff;"></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><strong>seculosimoveis@seculosimoveis.com.br</strong></td>
          </tr>
        </table>
      </form>
    
    <?php include('includes/inc_atendimento.php'); ?>
</div> 
<?php include('includes/inc_footer.php') ?>
 