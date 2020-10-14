<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="pt-Br"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9,chrome=1">
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width">

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
    <!--[if lt IE 7]>
    <div class="alert-box">
       
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
       
    </div>
     <![endif]-->
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
    		<section id="conteudo">
    		    <div class="row">
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
			  <section id="destaque" class="nine columns pagina">
			      <h1 class="titulo">Novidades</h1>
			      <?php $i=0;
                  while($i<3):?>
			      <article class="left destaque-produto">
			          <figure>
			              <a href="img/produto.jpg" class="lightbox" titulo="Bebedouro Ind. Salens BIS-100Lts Modelo 01" rel="group"><img src="img/produto.jpg" alt="" /></a>
			          </figure>
			          <h2 class="titulo">Bebedouro Ind. Salens BIS-100Lts Modelo 01</h2>
			          <small>categoria do produto</small>
			          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
			          <a href="#" class="btn-catalogo right"></a>
			      </article>
			      <?php $i++; endwhile?>
			  </section>
			  </div>
			  <div class="row">
				 <section id="cliente" class="twelve columns">
                  <h2 class="titulo">Cliente</h2>
                  <div class="cliente">
                      <div class="carroucel">
                        <ul>
                       <?php $i=0;
                  while($i<12):?>
                      <li>
                          <a href="#" title="cliente">
                              <img src="img/imagem.png" alt="cliente" width="125" />
                          </a>
                      </li>
                     <?php $i++; endwhile?>
                  </ul>
                      </div>
                      <button class="prev"></button>
                      <button class="next"></button>
                  </div>
              </section>
			  </div>
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
  <script src="js/jcarroucellite.js"></script>
  
 
  <!-- Initialize JS Plugins -->
  <script src="js/app.js"></script>
  <script src="js/main.js"></script>
   <script type="text/javascript">
   $(window).load(function() {
       $("#featured").orbit({
           fluid:true,
           directionalNav:false,
           animation: 'horizontal-push'//['fade','horizontal-slide','vertical-slide','horizontal-push']
       });
   });
</script>
  
</body>
</html>
