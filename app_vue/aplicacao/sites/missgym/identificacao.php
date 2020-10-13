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
         <h1>IDENTIFICAÇÃO</h1>
      </div>
      <p> <br />Informe os dados abaixo para continuar. <br /> <br /></p>
      <div class="clear"></div>
      <div class="grid_12 logar redondo">
         <h2>JÀ SOU CADASTRADO</h2>
         <form action="action" method="post">
            <span>Email:</span>
            <span>
               <input type="text" id="email" name="email" value="" />
            </span>
            <div class="clear"></div>
            <span>Senha:</span>
            <span>
               <input type="text" id="email" name="email" value="" />
               <br />
               <small><a href="#">Não sabe a senha? Clique aqui.</a></small>
            </span>
            <div class="clear"></div>
            <input type="submit" class="right" id="name" name="continuar" value="CONTINUAR" />
         </form>
      </div>
      <div class="grid_10 right cadastrar redondo">
         <h2>QUERO ME CADASTRAR</h2>
         <form action="action" method="method">
            <span>Email:</span>
            <span> 
               <input type="text" id="email" name="email" value="" />
            </span>
            <div class="clear"></div>
            <span>CEP:</span>
            <span>
               <input type="text" id="email" name="email" value="" />
               <div class="info">
                  <small>Você escolherá sua senha no próximo passo</small>
               </div>
            </span>
            <div class="clear"></div>
            <input type="submit" class="right" id="name" name="continuar" value="CONTINUAR" />
         </form>
      </div>
      <div class="clear"></div>
   </div>
</div>
<?php
//incluindo o rodape
include('includes/inc.rodape.php');
?>