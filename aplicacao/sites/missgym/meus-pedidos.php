<?php
//incluindo o header
include('includes/inc.header.php');
//incluindo a lateral
//include('includes/inc.lateral.php');
?>
<div class="grid_24 pagina alpha omega right">
   <!-- conteudo -->
   <div class="identificacao">
      <!-- detalhe do produto-->
      <div class="redondo titulo_pagina">
         <a href="javascript:history.back(-1)" class="right redondo">&laquo; Voltar</a>
         <h1>MEUS PEDIDOS</h1>
      </div>
      <p> <br />Segue abaixo seu histórico de pedidos <br /> <br /></p>
      <div class="clear"></div>
      <div class="historico-pedidos redondo">
         <ul class="info-titulo grid_24">
            <li class="">PRODUTO</li>
            <li class="">CÓDIGO</li>
            <li class="">DATA</li>
            <li class="">TOTAL</li>
            <li class=""></li>

         </ul>
         <div class="clear"></div>
         <?php $i = 0;
         while ($i < 6): ?>
            <ul class="grid_24 lista-pedido redondo">
               <li class=""><input  type="text" readonly="readonly" name="produto" value="Blusa" /></li>
               <li class=""><input  type="text" readonly="readonly" name="codigo" value="MISS00001" /></li>
               <li class=""><input  type="text" readonly="readonly" name="data" value="03/08/2012" /></li>
               <li class=""><input type="text" readonly="readonly"  name="catalogo" value="R$ 300,00" /></li>
               <li class="pedido-button"><a href="#" class="button grid_3 right">DETALHE</a></li>
            </ul>
            <?php $i++;
         endwhile; ?>
      </div>
      <div class="clear"></div>
   </div>
</div>
<?php
//incluindo o rodape
include('includes/inc.rodape.php');
?>