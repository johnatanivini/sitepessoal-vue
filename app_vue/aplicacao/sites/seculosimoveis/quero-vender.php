<?php include('includes/inc_header.php'); ?>
<?php include('includes/inc_busca.php'); ?>
<div class="paginas">
    <div class="breadcumb">
        <p>Voce está em: <a href="#">Quero Vender</a></p>
    </div>
    <h1>QURO VENDER <span class="right" style="width:60px"><a href="#" id="diminui">A- </a><a id="aumenta" href="#">A+ </a></span></h1>
    <h2>Solicite-nos uma avaliação do seu imóvel. Teremos o maior prazer em atendê-lo.</h2>

    <p>Através de mecanismos de vendas efificientes, concretizaremos  a comercialização de seu imóvel !</p>

    <p>Aguardamos seu contato através dos e-mail´s</p>
    <ul class="ul">
        <li>andradediretor@seculosimoveis.com.br</li>

        <li>carlos.alessandro@seculosimoveis.com.br </li>

        <li>seculosimoveis@seculosimoveis.com.br</li>
</ul>
        <p>Ou ligue-nos: (31) 3378-1410 / 4101-8336 / 7818-7005</p>
        <!--formulario-->
        <h1></h1>
        <form name="form1" method="post" action="#">
      <input name="campos_obrigatorios" type="hidden" id="campos_obrigatorios" value="nome,email,telefone">
      <input name="mensagem_preenchidos" type="hidden" id="mensagem_preenchidos" value="Favor informar o Nome!,Favor informar o E-mail!,Favor informar o Telefone!">
      <input name="dest" type="hidden" id="dest" value="seculosimoveis@seculosimoveis.com.br">
      <input name="campos" type="hidden" id="campos" value="nome,email,telefone,endereco,bairro,cep,cidade,uf,avaliacao,situacao,endereco_imovel,observacao">
      <input name="campos_descricao" type="hidden" id="campos_descricao" value="Nome: ,E-mail: ,Telefones: ,Endere&ccedil;o: ,Bairro: ,CEP: ,Cidade: ,UF: ,Gostaria de avalia&ccedil;ao?: ,Tenho um im&oacute;vel para: ,Endere&ccedil;o do im&oacute;vel: ,Observa&ccedil;ao: ">
      <input name="titulo_formulario" type="hidden" id="titulo_formulario" value="Cadastro de im&oacute;vel para venda pelo site">
      <input name="assunto" type="hidden" id="assunto" value="Cadastro de im&oacute;vel para venda pelo site">
      <input name="retorno" type="hidden" id="retorno" value="conf.php">
      <input name="situacao" type="hidden" id="situacao" value="Venda">
      <table border="0"  cellpadding="5" cellspacing="3">
        <tr>
          <td align="right"><strong>Nome:</strong></td>
          <td><input name="nome" type="text" class="Formulario" id="nome" style="width: 300px;"></td>
        </tr>
        <tr>
          <td align="right"><strong>E-mail:</strong></td>
          <td><input name="email" type="text" class="Formulario" id="email" style="width: 300px;"></td>
        </tr>
        <tr>
          <td align="right"><strong>Telefones:</strong></td>
          <td><input name="telefone" type="text" class="Formulario" id="telefone" style="width: 300px;"></td>
        </tr>
        <tr>
          <td align="right"><strong>Endere&ccedil;o:</strong></td>
          <td><input name="endereco" type="text" class="Formulario" id="endereco" style="width: 300px;"></td>
        </tr>
        <tr>
          <td align="right"><strong>Bairro:</strong></td>
          <td><input name="bairro" type="text" class="Formulario" id="bairros"style="width: 300px;"></td>
        </tr>
        <tr>
          <td align="right"><strong>CEP:</strong></td>
          <td><input name="cep" type="text" class="Formulario" id="cep"style="width: 300px;"></td>
        </tr>
        <tr>
          <td align="right"><strong>Cidade:</strong></td>
          <td><table width="300" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><input name="cidade" type="text" class="Formulario" id="cidades" style="width: 190px;"></td>
              <td width="1" style="padding: 0 10px;"><strong>UF:</strong></td>
              <td width="1"><input name="uf" type="text" class="Formulario" id="uf" size="2"></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td align="right"><strong>Gostaria de avalia&ccedil;&atilde;o?</strong></td>
          <td class="semborda"><label>
              <input name="avaliacao" type="radio" id="radio" value="Sim">
                Sim</label>
              <label>
              <input name="avaliacao" type="radio" id="radio2" value="Nao">
            Nao</label></td>
        </tr>
        <tr>
          <td align="right" valign="top"><strong>Endere&ccedil;o do im&oacute;vel:</strong></td>
          <td><textarea name="endereco_imovel" rows="2" class="Formulario" id="endereco_imovel" style="width: 300px; overflow: auto;"></textarea></td>
        </tr>
        <tr>
          <td align="right" valign="top"><strong>Observa&ccedil;&atilde;o:</strong></td>
          <td><textarea name="observacao" rows="5" class="Formulario" id="observacao" style="width: 300px; overflow: auto;"></textarea></td>
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
          <td><strong>seculosimoveis@seculosimoveis.com.br          </strong></td>
        </tr>
      </table>
 </form>
    
    <?php include('includes/inc_atendimento.php'); ?>
</div> 
<?php include('includes/inc_footer.php') ?>
 