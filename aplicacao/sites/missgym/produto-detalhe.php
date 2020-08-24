<?php
//incluindo o header
include('includes/inc.header.php');
//incluindo a lateral
include('includes/inc.lateral.php');
?>
<div class="grid_18 pagina alpha omega right">
   <!-- conteudo -->
   <div class="conteudo">
      <!-- detalhe do produto-->
      <div class="redondo titulo_pagina">
         <h1>HOME &raquo; CATEGORIA &raquo; NOME DO PRODUTO</h1>
      </div>
      <div class="detalhe">
         <!-- galeria -->
         <div class="galeria">
            <div class="img-grande">
               <!-- carrega com javascript-->
            </div>
            <div class="thumbnails-galeria">

               <div class="img">
                  <img src="images/blusa.jpg" alt="blusa" height="80" alt="Blusa 1"/>
               </div>

               <div class="img">
                  <img src="images/blusa2.jpg" alt="blusa" height="80" alt="Blusa 2"/>
               </div>

               <div class="img">
                  <img src="images/blusa.jpg" alt="blusa" height="80" alt="Blusa 3"/>
               </div>

            </div>
         </div>
         <div class="titulo">
            <h2>LOREM IPSUM DOLOR SIT AMET...</h2>
         </div>
         <div class="descricao">
            <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
         </div>
         <div class="preco">
            <p><span>PREÇO:</span>R$ 55,00</p>
         </div>
         <div class="detalhe-add-carrinho redondo right">
            <div class="left">Qnt.</div>
            <input type="text" id="" name="qnt" value="3" size="1" />
            <input type="submit" id="" name="btn" value="ADD AO CARRINHO" />
         </div>
         <!-- share ---->
         <div class="share-detalhe">
            <!-- AddThis Button BEGIN -->
            <a class="addthis_button" href="http://www.addthis.com/bookmark.php?v=250&amp;pubid=ra-4f5fae09404c665e"><img src="http://s7.addthis.com/static/btn/v2/lg-share-en.gif" width="125" height="16" alt="Bookmark and Share" style="border:0"/></a>
            <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
            <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f5fae09404c665e"></script>
            <!-- AddThis Button END -->
         </div>
      </div>
      <div class="clear"></div>
      <!-- tabs -->
      <div id="tabswitch">

         <ul>

            <li class="tab1">DESCRIÇÃO</li>

            <li class="tab2">DADOS TÉCNICOS</li>


         </ul>

         <div class="tab-container tab1">

            <p>Vestibulum in mi lorem. Ut at erat sagittis mi rutrum gravida. Donec et nisi ac est viverra feugiat. Nulla sodales scelerisque fringilla. Suspendisse potenti. Proin lorem turpis, dapibus eu malesuada a, vestibulum laoreet ante. Proin ut nibh eros. In auctor, erat porttitor faucibus feugiat, nibh magna malesuada nibh, eget blandit erat dolor sit amet nisi. Mauris quis nibh mi. Etiam eget felis quis lorem varius convallis. Integer sodales lectus eu diam pulvinar molestie. Proin eros risus, laoreet vitae volutpat in, pharetra non velit. Curabitur ut nisi ante. Duis commodo tortor ut tortor porttitor ac faucibus nisl adipiscing. Integer non arcu sapien. Integer eget est odio. Morbi quis malesuada erat. Cras commodo venenatis dolor nec feugiat. Nam id tincidunt augue. Nam eleifend scelerisque bibendum. </p>
            <ul>
               <li>Text</li>
               <li>Text</li>
               <li>Text</li>
               <li>Text</li>
            </ul>
         </div>

         <div class="tab-container tab2">
            <div class="img thumbnail left">
               <img src="images/blusa.jpg" alt="blusa" height="80" alt="Blusa 3"/>
            </div>
            <p>Vestibulum in mi lorem. Ut at erat sagittis mi rutrum gravida. Donec et nisi ac est viverra feugiat. Nulla sodales scelerisque fringilla. Suspendisse potenti. Proin lorem turpis, dapibus eu malesuada a, vestibulum laoreet ante. Proin ut nibh eros. In auctor, erat porttitor faucibus feugiat, nibh magna malesuada nibh, eget blandit erat dolor sit amet nisi. Mauris quis nibh mi. Etiam eget felis quis lorem varius convallis. Integer sodales lectus eu diam pulvinar molestie. Proin eros risus, laoreet vitae volutpat in, pharetra non velit. Curabitur ut nisi ante. Duis commodo tortor ut tortor porttitor ac faucibus nisl adipiscing. Integer non arcu sapien. Integer eget est odio. Morbi quis malesuada erat. Cras commodo venenatis dolor nec feugiat. Nam id tincidunt augue. Nam eleifend scelerisque bibendum. </p>

         </div>



      </div>
      <div class="clear"></div>
      <!-- produtos relacionados-->
      <div class="redondo titulo_pagina">
         <h1>PRODUTOS RELACIONADOS</h1>
      </div>
      <?php
      $p = 0;
      while ($p < 3):
         ?>
         <div class="produtos">
            <div class="content">
               <p class="titulo">LOREM IPSUM DOLOR SIT AMET...</p>
               <div class="img">
                  <img src="images/blusa.jpg" alt="blusa"/>
               </div>
               <div class="clear"></div>
               <div class="descricao">
                  <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                  <span class="preco">R$ 24,00</span>
               </div>
               <div class="clear"></div>
               <div class="botoes">
                  <a href="carrinho.php" class="add-carrinho">ADD AO CARRINHO</a>
                  <a href="#" class="visualizar right">VISUALIZAR</a>
                  <div class="clear"></div>
               </div>
            </div>
         </div>
         <?php $p++;
      endwhile; ?>
   </div>
</div>
<?php
//incluindo o rodape
include('includes/inc.rodape.php');
?>