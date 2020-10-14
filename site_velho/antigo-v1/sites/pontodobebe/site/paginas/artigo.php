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
				include('includes/sidebar.php')
				?>
	
		<section id="artigos">
			
			<header>
				<h1 class="titulo">Artigos</h1>
			</header>
			
			<article class="formcategoria">
			<fieldset>
				<form action="" method="post" name="formcategoria" id="formcategoria">
				<label>NAVEGAÇÃO POR CATEGORIAS</label>
					<div>
						<select name="categoria" id="" class="categoria select" title="selecione uma categoria">
							<option value="">Selecione uma categoria</option>
							<option value="">Categoria 1</option>
						</select>	
					</div>
					<div class="clear"></div>
				</form>
			</fieldset>
			</article>
			
			<section class="categoria-artigos">

				<?php for($e=0; $e<=8;$e++){?>
					<article>
						<figure>
							<img src="images/barriga.jpg" alt="barriga" height="90" />
						</figure>
						<hgroup>
							<h2>Notícia</h2>
						</hgroup>						
						<p><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,Lorem ipsum dolor sit amet, consectetu</a></p>
						<div class="leiamais-artigo">
							<a href="/artigo-detalhe ">Veja Agora</a>
						</div>
						<div class="comentario-artigo">
							<a href="#comentario">3</a>
						</div>
					</article>
					<?php }?>
					
			</section>
			
		</section>
	
		<?php include('includes/meu_bebe.php')?>
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