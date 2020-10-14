<?php 
include('includes/header.php');
?>
<div class="bg_conteudo_top">
	<div class="bg_conteudo_bottom">
		<?php 
			//menu
			include('includes/menu.php');
		?>
		<section id="conteudo">
				<?php
				/// lateral				
				include('includes/sidebar.php')?>
			<section id="noticias-destaques">
				<h1 class="titulo">Notícias em Destaque</h1>
				<section id="artigos">
					<figure class="imagem-noticia-destaque">
						<span></span>
						<!--imagem gerada por javascript -->
					</figure>
						<section class="tabs">
						<?php for($i=0;$i<3;$i++){?>
							<article>
								<figure>
									<img src="images/barriga.jpg" alt="barriga" height="70" />
								</figure>
								<hgroup>
									<h2>titulo notícia</h2>
								</hgroup>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, </p>
								<a href="artigo-detalhe" class="leia-mais">MAIS +</a>
							</article>
							<?php }?>
					</section>
					<div class="clear"></div>
			</section>
		</section><!-- /#noticias-destaques -->
		<?php include('includes/meu_bebe.php')?>
		<section id="artigos-categoria">
			
			<section class="categoria">
					<header>
						<h1 class="titulo">Categoria</h1>
					</header>
					<?php for($e=0; $e<=1;$e++){?>
					<article>
						<figure>
							<img src="images/barriga.jpg" alt="barriga" height="90" />
						</figure>
						<hgroup>
							<h2>Notícia</h2>
						</hgroup>						
						<p><a href="artigo-detalhe">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,Lorem ipsum dolor sit amet, consectetu</a></p>
					</article>
					<?php }?>
					<a href="categoria" class="leia-mais">Todos os artigos +</a>
			</section>
			
			<section class="categoria brn">
					<header>
						<h1 class="titulo">Categoria</h1>
					</header>
					<?php for($e=0; $e<=1;$e++){?>
					<article>
						<figure>
							<img src="images/barriga.jpg" alt="barriga" height="90" />
						</figure>
						<hgroup>
							<h2>Notícia</h2>
						</hgroup>						
						<p><a href="artigo-detalhe">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,Lorem ipsum dolor sit amet, consectetu</a></p>
					</article>
					<?php }?>
					<a href="categoria" class="leia-mais">Todos os artigos +</a>
			</section>
			
			<section class="categoria bbn">
					<header>
						<h1 class="titulo">Categoria</h1>
					</header>
					<?php for($e=0; $e<=1;$e++){?>
					<article>
						<figure>
							<img src="images/barriga.jpg" alt="barriga" height="90" />
						</figure>
						<hgroup>
							<h2>Notícia</h2>
						</hgroup>						
						<p><a href="artigo-detalhe">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,Lorem ipsum dolor sit amet, consectetu</a></p>
					</article>
					<?php }?>
					<a href="categoria" class="leia-mais">Todos os artigos +</a>
			</section>
			
			<section class="categoria brn bbn">
					<header>
						<h1 class="titulo">Categoria</h1>
					</header>
					<?php for($e=0; $e<=1;$e++){?>
					<article>
						<figure>
							<img src="images/barriga.jpg" alt="barriga" height="90" />
						</figure>
						<hgroup>
							<h2>Notícia</h2>
						</hgroup>						
						<p><a href="artigo-detalhe">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,Lorem ipsum dolor sit amet, consectetu</a></p>
					</article>
					<?php }?>
					<a href="categoria" class="leia-mais">Todos os artigos +</a>
			</section>
		</section>
		<div class="clear"></div>
			<?php 
			//palavra do doutor
			include('includes/palavra_doutor.php')?>
			<?php
			//banner publicidade
			include('includes/banner_maior.php')?>
			<?php
			///scroll loja do bebe
			include('includes/loja_bebe.php')?>
			<?php
			//blogs, nomes de bebes, qual o seu problema
			include('includes/demais_destaques.php')?>
		<div class="clear"></div>
	</section>

	</div>
</div>
<?php
// footer 
include ('includes/footer.php')?>