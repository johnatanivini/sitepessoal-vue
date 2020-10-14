<?php
//incluindo o header
include('includes/inc.header.php');
//incluindo a lateral
//include('includes/inc.lateral.php');
?>
<div class="grid_24 pagina alpha omega right">
   <!-- conteudo -->
   <div class="conteudo minhaconta">
      <!-- detalhe do produto-->
      <div class="redondo titulo_pagina">
         <a href="javascript:history.back(-1)" class="right redondo">&laquo; Voltar</a>
         <h1>Minha Conta</h1>
      </div>
      <p> <br />Atualize seus dados<br /> <br /></p>

      <!-- forma de pagmento -->
      <div class="conta">



         <form>
            <div class="minha-conta">
               <h2 class="titulo_pagina redondo">Dados Pessoais</h2>
               <span>
                  Nome: <br />
                  <input type="text" name="nome" id="" />
               </span>
               <div class="clear"></div>
               <span>
                  Email: <br />
                  <input type="text" name="email" id="" />
               </span>
               <div class="clear"></div>
               <span>
                  Telefone:; <br />
                  <input type="text" name="Telefone" id="" />
               </span>
               <span>
                  Cel: <br />
                  <input type="text" name="Celular" id="" />
               </span>
               <div class="clear"></div>
               <span>
                  CPF: <br />
                  <input type="text" name="CPF" id="" />
               </span>

               <div class="clear"></div>
               <h2 class="titulo_pagina redondo">Dados de entrega</h2>
               <p>Local:</p>
               <span>
                  Tipo: <br>
                  <input type="text" name="tipo" value="" size="2">
               </span>
               <span>
                  Endereço: <br>
                  <input type="text" name="endereco" value="" >
               </span>
               <span>
                  Número: <br>
                  <input type="text" name="numero" value="" >
               </span>
               <div class="clear"></div>
               <span>
                  Complemento: <br>
                  <input type="text" name="complemento" value="">
               </span>
               <span>
                  Cep: <br>
                  <input type="text" name="cep" value="" >
               </span>
               <div class="clear"></div>
               <span>
                  Cidade: <br>
                  <input type="text" name="cidade" value="" >
               </span>
               <span>
                  Bairro: <br>
                  <input type="text" name="bairro" value="" >
               </span>
               <span>
                  Estado: <br>
                  <input type="text" name="estado" value="" >
               </span>
               <div class="clear"></div>
               <h2 class="titulo_pagina redondo">Alterar Senha</h2>
               <span>Senha <br />
                  <input type="password" name="senha" value="" />
               </span>
               <div class="clear"></div>
               <span>Confirmar senha <br />
                  <input type="password2" name="senha" value="" />
               </span>
            </div><!-- fim dados entrega-->
            <div class="clear"></div>
            <br />
            <div class="finalizar">
               <input type="submit" name="Finalizar" class="left redondo" value="SALVAR" />
            </div>
            <br />
            <br />
            <br />
         </form>
      </div><!-- fim conta-->

      <div class="clear"></div>
   </div>
</div>
<?php
//incluindo o rodape
include('includes/inc.rodape.php');
?>