<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Refrigeração Montese | Montese Gás</title>
<meta name="keyword" content="" />
<meta name="description" content="" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
</head>
<body>
<div id="header">
  <div class="menu">
    <ul>
      <li><a href="#" class="current" title="página pincipal"><span>HOME</span></a></li>
      <li><a href="#" title="refrigeração montese"><span>REFRIGERAÇÃO MONTESE</span></a></li>
      <li><a href="#" title="Montese gás"><span>MONTESE GÁS</span></a></li>
      <li><a href="#" title="fale conosoco"><span>FALE CONOSCO</span></a></li>
    </ul>
  </div>
  <div class="logo-rm"><img src="images/rm.png" width="108" height="60" alt="refrigeração montese" /></div>
  <div class="form-busca">
    <form action="#" name="" method="post" >
      <input type="text" name="search" value="" maxlength="30" />
      <input type="submit" name="envia" value="" />
    </form>
  </div>
  <div class="logo-montese-gas"><img src="images/mg.png" width="202" height="56" alt="montese gás" /></div>
  <span class="clear"></span>
</div>
<div id="conteudo">
  <div class="topo-conteudo"></div>
  <div class="meio-conteudo">
    <div id="menu-vertical">
      <span class="menu-topo">
      <p>Categorias</p>
      </span>
      <span class="menu-meio">
        <ul>
		  <?php for($i=0;$i<=20;$i++){?>
            <li><a href="#" title="categoria">categoria-<?=$i+1;?></a></li>
          <?php }?>
        </ul>
      </span>
      <span class="menu-bottom"></span>
    </div>
    <div id="pagina">
        <!--
          se o produto estiver esgtado adiciona a class "esgotado"
          ex: class="produtos esgotado"...
        -->
      <?php for($i=0;$i<=5;$i++){?>
      <div class="produtos" >
      	<div class="foto">
        	<img src="images/foto.jpg" alt="produto"/>
        </div>
        <p class="descricao">re eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent</p>
        <p><span class="laranja">DE: </span><span class="preco-real">R$ 98,00</span></p>
        <p><span class="laranja">POR: </span><span class="preco-desconto">R$ 59,00</span></p>
        <div class="botoes">
          <a href="" class="bt_comprar" title="comprar"><!--comprar--></a>
          <a href="" class="bt_detalhes" title="detalhes"><!--detalhes--></a>
        </div>
        <!-- [if esgotado]
        se a oferta estiver fora de estoque substitui-se  os botoes por este abaixo por esta abaixo        
        <div class="botoes">
        	 <a href="" class="avise-me" title="avisar-me"></a>  
        </div>
        <div class="esgotado"></div>
		[end if]-->
      </div>
      <?php }?>
    </div>
    <span class="clear"></span>
  </div>
  <div class="footer-conteudo"></div>
</div>
<div id="mais-vendidos">
      <div class="titulo">Mais Vendidos
        <div class="nav">
          <a href="" class="next" title="próximos"></a>
          <a href="" class="prev" title="anterior"></a>
        </div>
    </div>
<?php for($i=1;$i<=3;$i++){?>
	<div class="produtos " <?php if($i==3) echo 'style="background:none"';?>>
      	<div class="foto">
        	<img src="images/foto.jpg" alt="produto" width="50"/>
        </div>
        <p class="descricao">re eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent</p>
        <p><span class="laranja">DE: </span><span class="preco-real">R$ 98,00</span></p>
        <p><span class="laranja">POR: </span><span class="preco-desconto">R$ 59,00</span></p>
        <div class="botoes">
          <a href="" class="bt_comprar" title="comprar"><!--comprar--></a>
          <a href="" class="bt_detalhes" title="detalhes"><!--detalhes--></a>
        </div>
        <!-- [if esgotado]
        se a oferta estiver fora de estoque substitui-se  os botoes por este abaixo por esta abaixo      
        <div class="botoes">
        	 <a href="" class="avise-me" title="avisar-me"></a>  
        </div>
        <div class="esgotado"></div>
		[end if]-->
      </div>
<?php }?>
</div>
<div id="nossos-parceiros">
	<div class="titulo">
    Nossos Parceiros
    	<div class="nav">
          <a href="" class="next" title="próximos"></a>
          <a href="" class="prev" title="anterior"></a>
        </div>
    </div>
    <div class="logomarcas">
    	<?php for ($i=0;$i<=3;$i++){?>
          <div class="logo">
              <img src="images/parceiros.png" alt="logomarcas" />
          </div>
        <?php }?>
    </div>
</div>
<div id="institucional">
  <div class="forma-de-pagamento">
  	<h3>Forma de Pagamento</h3>
  <img src="images/forma-de-pagamento.png" width="227" height="104" alt="forma de pagamento" />
  </div>
  <div class="institucional">
  	<h3>Institucional</h3>
    <ul>
    	<li><a href="">» Institucional</a></li>
    	<li><a href="">» Nossa tragetória</a></li>
    	<li><a href="">» Nossas Marcas</a></li>
    	<li><a href="">» Envie seu Curriculo</a></li>
    </ul>
  </div>
  <div class="institucional">
  	<h3>Central de Atendimento</h3>
    <ul>
    	<li><a href="">»  Atendimento da Loja Virtual</a></li>
    	<li><a href="">»  Atendimento das Lojas Físicas</a></li>
    	<li><a href="">»  Imprensa</a></li>
    </ul>
  </div>
  <div class="institucional">
  	<h3>Certificados Digitais</h3>
    <img src="images/certificados.png" width="227" height="104" alt="forma de pagamento" />
  </div>
  <span class="clear"></span>
  <div class="botoes">
    <a href="" class="politica-vendas" title="Politica de vendas"><span>POLÍTICA DE VENDAS</span></a>
    <a href="" class="politica-privacidade" title="politica de privacidade"><span>POLÍTICA DE PRIVACIDADE</span></a>
    <a href="" class="politica-trocas" title="politica de trocas"><span>POLÍTICA DE TROCAS</span></a>
  </div>
</div>
<div id="endereco">
<p>Preços e condições de pagamento exclusivos para compras realizadas através do site e televendas. Os valores poderão sofrer alterações sem aviso prévio e os estoques são limitados. <br />
Em caso de divergência, o preço válido é o do Carrinho.<br />
www.site.com.br - CNPJ: 33.345.33/0001-00 - Endereço: Rua exemplo 234 - Fortaleza-CE
</p>
</div>
<span class="clear"></span>
<div id="user-fixo">
	<div class="user">
    	<div class="menu-user">
        	<ul>
        		<!--se não estiver logado-->
                <li><a href="" class="login" title="login">Login</a></li>
        		<li><a href="" class="cadastro" title="cadastro">Cadastro</a></li>
        		<li><a href="" class="pedido" title="pedidos">Pedidos</a></li>
                <!--if logado
                 <li><a href="" class="login" title="saudação">Olá, Usuário!</a></li>
                 <li><a href="" class="cadastro" title="minha conta">Minha Conta</a></li>
                 <li><a href="" class="pedido" title="pedidos">Pedidos</a></li>
                 <li><a href="" class="sair" title="sair">Sair</a></li>
                -->
        	</ul>        
        </div>
        <div class="carrinho">
        	<span class="item-carrinho laranja">0 itens </span>
            <span class="preco-total laranja">R$ 0,00</span>
        	<a href="" class="meu-carrinho" title="meu carrinho de compras"></a>
        </div>
    </div>
</div>
</body>
</html>