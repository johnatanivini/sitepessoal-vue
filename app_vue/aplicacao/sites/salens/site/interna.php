<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="pt-Br"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Salens</title>
  
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="css/foundation.min.css">
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css">
  <link rel="stylesheet" type="text/css" href="css/main.css" media="all" />
  <script src="js/jquery.js"></script>
  <script src="js/modernizr.foundation.js"></script>
  
</head>
<body>
    <div class="bg_conteudo">
    	<div class="bg_sobre_conteudo">
    	    <!-- header-->
    		<header id="header" class="row">
    			<figure class="logo">
    			    <a href="/" title="Página Principal"></a>
    			</figure>
    			<article class="banner right">
    				<ul id="featured">
    					<li><img src="img/banner.jpg" alt="" /></li>
    					<li><img src="img/banner.jpg" alt="" /></li>
    					<li><img src="img/banner.jpg" alt="" /></li>
    				</ul>
    			</article>
    			<div class="elemento_banner"></div>
    			<form action="#" name="" method="post">
    			    <input type="text" name="busca" value="" id="busca" placeholder="Faça aqui sua busca"/>
    			    <input type="submit" value="" class="btn-enviar"/>
    			</form>
    			<div class="cartoes">
				  <p class="text-left">
				      Compre com <br />
				      cartões BNDS
				  </p>
				</div>
    		</header>
    		<!-- seção principal-->
    		<section id="conteudo" class="row">
			  <nav class="three columns">
			      <ul>
			          <li><a href="/">Home</a></li>
			          <li><a href="/">Empresa</a></li>
			          <li><a href="#">Produtos <span class="sub"></span></a>
			              <ul>
			                  <li><a href="#">Produto 1</a></li>
			                  <li><a href="#">Produto 2</a></li>
			                  <li><a href="#">Produto 3</a></li>
			                  <li><a href="#">Produto 4</a></li>
			              </ul>
			          </li>
			          <li><a href="/">Formas de Pagamento</a></li>
			          <li><a href="/">Fale Conosco</a></li>
			      </ul>
			  </nav>
			  <section id="destaque" class="nine columns">
			      <h1 class="titulo">Titulo da página interna</h1>
			      
			      <h1 id="">Titulo Normal sem formatação</h1>
			      <h2>Subtitulo normal sem formatação</h2>
			      <h3>Subtitulo normal sem formatação</h3>
			      <h4>Subtitulo normal sem formatação</h4>
			      <h5>Subtitulo normal sem formatação</h5>
			      <p>Paragrafo</p>
			      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			     <p>Listas</p>
			     <ul class="disc">
			     	<li>listas não ordenadas 1
			     	</li>
			     	<li>listas não ordenadas 2
			     	</li>
			     	<li>listas não ordenadas 3
			     	</li>
			     	<li>listas não ordenadas 4
			     	</li>
			     </ul>
			      <ul class="circle">
                    <li>listas não ordenadas 1
                    </li>
                    <li>listas não ordenadas 2
                    </li>
                    <li>listas não ordenadas 3
                    </li>
                    <li>listas não ordenadas 4
                    </li>
                 </ul>
                 <ul class="square">
                    <li>listas não ordenadas 1
                    </li>
                    <li>listas não ordenadas 2
                    </li>
                    <li>listas não ordenadas 3
                    </li>
                    <li>listas não ordenadas 4
                    </li>
                 </ul>
			     <ol>
			     	<li>listas  ordenadas 1
			     	</li>
			     	<li>listas  ordenadas 2
			     	</li>
			     	<li>listas  ordenadas 3
			     	</li>
			     	<li>listas  ordenadas 4
			     	</li>
			     </ol>
			     <p>Lista de definicao</p>
			     <dl>
			         <dt>Titulo da lista</dt>
			         <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</dd>
			     </dl>
			     <p>Butoes</p>
			     
			     <a href="#" class="btn-enviar"></a>
			     <a href="#" class="btn-catalogo"></a>
			     <a href="#" class="btn-enviar-form"></a>
			     <a href="#" class="btn-voltar"></a>
			     <p>Bloquotes</p>
			     <br />
                <blockquote>
                    Boquotes
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    <cite>Renan Cunha</cite>
                </blockquote>
                <p>Alerts</p>
                <div class="alert-box success">
                  Alerta de sucesso
                  <a href="#" class="close">x</a>
                </div>
                <div class="alert-box alert">
                  Alerta de erro
                  <a href="#" class="close">x</a>
                </div>
                 <div class="alert-box ">
                  Alerta de informação
                  <a href="#" class="close">x</a>
                </div>
                 <div class="alert-box secondary">
                  Alerta secundario
                  <a href="#" class="close">x</a>
                </div>
                <p>Tootips</p>
                <span class="has-tip" data-width="210" title="Bottom and the default position.">"tip-bottom"</span>
<span class="has-tip tip-top noradius" data-width="210" title="Top and not rounded!">"tip-top"</span>
<span class="has-tip tip-left" data-width="90" title="left!">"tip-left"</span>
<span class="has-tip tip-right" data-width="90" title="right!">"tip-right"</span>
			  </section>
			</section>
			<div class="clear"></div>
    	</div><!-- fim bg_sobre_conteudo-->
    </div><!--fim bg_conteudo;-->
    <!--footer-->
            <div class="clear"></div>
            <footer id="footer">
               <article class="twelve columns">
                   <p class="text-left">Copyright © 2008 - 2012 - Salens Indústria e Comércio de Equipamentos Ltda.  <span class="text-right right">(85) 3045.2777 / 4101.2771 / sac@salens.com.br</span></p>
               </article>
            </footer>
  <!-- Included JS Files (Uncompressed) -->
  <!--
  <script src="javascripts/jquery.js"></script>
  <script src="javascripts/jquery.foundation.mediaQueryToggle.js"></script>
  <script src="javascripts/jquery.foundation.forms.js"></script>
  <script src="javascripts/jquery.event.move.js"></script>
  <script src="javascripts/jquery.event.swipe.js"></script>
  <script src="javascripts/jquery.foundation.clearing.js"></script>
  -->
  
  <!-- Included JS Files (Compressed) -->

  <script src="js/jquery-1.8.2.min.js"></script>
  <script src="js/foundation.min.js"></script>
  <script src="fancybox/source/jquery.fancybox.pack.js"></script>
  
 
  <!-- Initialize JS Plugins -->
  <script src="js/app.js"></script>
  <script src="js/main.js"></script>
   <script type="text/javascript">
   $(window).load(function() {
       $("#featured").orbit({
           fluid:true,
           directionalNav:false,
           animation: 'fade'//['fade','horizontal-slide','vertical-slide','horizontal-push']
       });
   });
</script>
  
</body>
</html>
