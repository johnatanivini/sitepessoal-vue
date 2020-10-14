<?php
//incluindo o header
include('includes/inc.header.php');
//incluindo a lateral
//include('includes/inc.lateral.php');
?>
<div class="grid_24 pagina alpha omega right" style="margin-left: 0 !important">
   <!-- conteudo -->
   <div class="minhaconta" >
      <!-- detalhe do produto-->
      <div class="redondo titulo_pagina" ">
         <a href="javascript:history.back(-1)" class="right redondo">&laquo; Voltar</a>
         <h1>Fale Conosco</h1>
      </div>
      <p> <br />Entre em contato para dúvidas, sugestões e elogios.<br /> <br /></p>

      <!-- forma de pagmento -->
      <div class="contato">

         <div class="form-contato grid_11">
            <form>
               <h2 class="titulo_pagina redondo">Por email:</h2>
               <span>
                  Nome: <br />
                  <input type="text" name="nome" />
               </span>
               <div class="clear"></div>
               <span>
                  Email: <br />
                  <input type="text" name="email"  />
               </span>
               <div class="clear"></div>
               <span>
                  Telefone:; <br />
                  <input type="text" name="Telefone"  />
               </span>
               <div class="clear"></div>
               <span>Mensagem: <br />
                  <textarea name="mensagem" cols="30" rows="10"></textarea>
               </span>

               <div class="clear"></div>
               <div class="finalizar">
                  <input type="submit" name="enviar" class="right redondo" value="ENVIAR " />
               </div>
            </form>
         </div>
         <div class="localizacao right grid_11">
            <h2 class="titulo_pagina redondo">Visite-nos:</h2>
            <p class="textRight"><b>Endereço</b></p>
            <p class="textRight">Av. Da Abolição , 323 -Fortaleza, CE 
CEP - 606606060</p>
            <p class="textRight">Tel: (+55) (85) 3566.7890</p>
            <p class="textRight">atendimento@missgyn.com.br</p>
            <br />
            <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=Av.+Da+Aboli%C3%A7%C3%A3o+,+323+-&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Av.+da+Aboli%C3%A7%C3%A3o,+323+-+Meireles,+Fortaleza+-+Cear%C3%A1,+60165-080&amp;z=14&amp;ll=-3.724828,-38.503155&amp;output=embed"></iframe><br /><small><a class="map fancybox.iframe" href="https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=Av.+Da+Aboli%C3%A7%C3%A3o+,+323+-&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Av.+da+Aboli%C3%A7%C3%A3o,+323+-+Meireles,+Fortaleza+-+Cear%C3%A1,+60165-080&amp;z=14&amp;ll=-3.724828,-38.503155&amp;output=embed" style="color:#0000FF;text-align:left" title="Av. Da Abolição , 323 -Fortaleza, CE 
CEP - 606606060">Exibir mapa ampliado</a></small>
         </div>
      </div><!-- fim conta-->

      <div class="clear"></div>
   </div>
</div>
<?php
//incluindo o rodape
include('includes/inc.rodape.php');
?>