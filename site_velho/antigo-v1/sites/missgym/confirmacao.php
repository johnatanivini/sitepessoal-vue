<?php
//incluindo o header
include('includes/inc.header.php');
//incluindo a lateral
//include('includes/inc.lateral.php');
?>
<div class="grid_24 pagina alpha omega right">
   <!-- conteudo -->
   <div class="confirmacao">
      <!-- detalhe do produto-->
      <div class="redondo titulo_pagina">
         <a href="javascript:history.back(-1)" class="right redondo">&laquo; Voltar</a>
         <h1>CONFIRMAÇAO</h1>
      </div>
      <p> <br />Complete a sua compra!<br /> <br /></p>

      <!-- forma de pagmento -->
      <div class="dados">
         <div class="formadepagamento redondo">
            <h2>Escolha Sua Forma de pagamento</h2>
            <ul class="redondo">
               <li>
                  <span><input type="radio"  name="formadepagamento" value="1" /></span>
                  <span><img src="images/pagseguro.jpg" alt="Pag seguro"/></span>
               </li>
               <li>
                  <span><input type="radio"  name="formadepagamento" value="2" /></span>
                  <span><img src="images/boleto.jpg" alt="Pag seguro"/></span>
               </li>
               <li>
                  <span><input type="radio"  name="formadepagamento" value="3" /></span>
                  <span><img src="images/transferencia.jpg" alt="Pag seguro"/></span>
               </li>
               <div class="clear"></div>
            </ul>
            <div class="clear"></div>
         </div><!-- fim formadepagamento-->

         <div class="clear"></div
         <!-- dados de entrega-->
         <div class="enderecoentrega redondo">
            <h2>Endereço de Entrega</h2>
            <div class="clear"></div>
            <div class="bg_endereco redondo">
               <div class="dadosentrega redondo">
                  <p>Nome</p>
                  <input type="text" id="name" name="nome" value="" size="53">
                  <div class="clear"></div>
                  <span>
                     Tipo: <br>
                     <input type="text" name="tipo" value="" size="2">
                  </span>
                  <span>
                     Endereço: <br>
                     <input type="text" name="endereco" value="" size="31">
                  </span>
                  <span>
                     Número: <br>
                     <input type="text" name="numero" value="" size="2">
                  </span>
                  <div class="clear"></div>
                  <span>
                     Complemento: <br>
                     <input type="text" name="complemento" value="" size="25">
                  </span>
                  <span>
                     Cep: <br>
                     <input type="text" name="cep" value="" size="19">
                  </span>
                  <div class="clear"></div>
                  <span>
                     Cidade: <br>
                     <input type="text" name="cidade" value="" size="12">
                  </span>
                  <span>
                     Bairro: <br>
                     <input type="text" name="bairro" value="" size="12">
                  </span>
                  <span>
                     Estado: <br>
                     <input type="text" name="estado" value="" size="11">
                  </span>
               </div><!-- fim dados entrega-->
               <!-- selecione um frete -->
               <div class="frete redondo">
                  <h3>SELECIONE O TIPO DE FRETE</h3>
                  <div class="selecionar redondo">
                     <div class="frete_economico">
                        <input type="radio" name="tipo_frete" value="frete_economico" />
                        Frete Economico
                        <p>
                           <br />
                           A vantagem deste frete é o custo menor.
                           Prazo médio do frete: 8 a 16 dias úteis após a confirmação de pagamento e disponibilidade do produto em estoque.
                           <br />
                           <br />
                        </p>
                        <div class="preco">R$ 8.00</div>
                     </div>
                     <div class="frete_expresso">
                        <input type="radio" name="tipo_frete" value="frete_economico" />
                        Frete Expresso
                        <p><br />
                           A vantagem deste frete é a entrega mais rápida.
                           Prazo médio do frete: 2 dias após a 
                           confirmação de pagamento e disponibilidade do 
                           produto em estoque.
                           <br />
                           <br />
                        </p>
                        <div class="preco">R$ 26.00</div>
                     </div>
                     <div class="clear"></div>
                  </div>
               </div><!-- fim frete-->
               <div class="clear"></div>
            </div><!-- fim bg_endereco-->
            <div class="clear"></div>
         </div> <!-- fim endereco entrega-->
         <div class="clear"></div>
         <div class="total-pagar redondo">
            <div class="total redondo">
               <p class="left">TOTAL À PAGAR</p>
               <div class="preco redondo">
                  <p>R$ 300,00</p>
               </div>
               <div class="clear"></div>
            </div>
         </div><!-- total-pagar -->
      </div><!-- fim dados -->
      <div class="finalizar">
         <input type="submit" name="Finalizar" class="right redondo" value="FECHAR PEDIDO" onclick="javascript:location.href='identificacao.php'" />
      </div>
      <br />
      <br />
   </div><!-- fim conteudo confirmacao-->
   <div class="clear"></div>
</div>
<?php
//incluindo o rodape
include('includes/inc.rodape.php');
?>