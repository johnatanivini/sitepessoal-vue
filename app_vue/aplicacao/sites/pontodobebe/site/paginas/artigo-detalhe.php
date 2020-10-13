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
						<form action="" method="post" name="formcategoria"
							id="formcategoria">
							<label>Outras categorias</label>
							<div>
								<select name="categoria" id="" class="categoria select"
									title="selecione uma categoria">
									<option value="">Selecione uma categoria</option>
									<option value="">Categoria 1</option>
								</select>
							</div>
							<div class="clear"></div>
						</form>
					</fieldset>
				</article>
				<section class="artigos-detalhe">
					<header>
						<h1 class="titulo">Título do artigo</h1>
					</header>
					<article>
						<figure>
							<img src="images/img.jpg" alt="" />
						</figure>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
							diam nonummy nibh euismod tincidunt ut laoreet dolore magna
							aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
							exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
							commodo consequat. Duis autem vel eum iriure dolor in hendrerit
							in vulputate velit esse molestie consequat, vel illum dolore eu
							feugiat nulla facilisis at vero eros et accumsan et iusto odio
							dignissim qui blandit praesent luptatum zzril delenit augue duis
							dolore te feugait nulla facilisi.</p>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
							diam nonummy nibh euismod tincidunt ut laoreet dolore magna
							aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
							exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
							commodo consequat. Duis autem vel eum iriure dolor in hendrerit
							in vulputate velit esse molestie consequat, vel illum dolore eu
							feugiat nulla facilisis at vero eros et accumsan et iusto odio
							dignissim qui blandit praesent luptatum zzril delenit augue duis
							dolore te feugait nulla facilisi.</p>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
							diam nonummy nibh euismod tincidunt ut laoreet dolore magna
							aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
							exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
							commodo consequat. Duis autem vel eum iriure dolor in hendrerit
							in vulputate velit esse molestie consequat, vel illum dolore eu
							feugiat nulla facilisis at vero eros et accumsan et iusto odio
							dignissim qui blandit praesent luptatum zzril delenit augue duis
							dolore te feugait nulla facilisi.</p>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
							diam nonummy nibh euismod tincidunt ut laoreet dolore magna
							aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
							exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
							commodo consequat. Duis autem vel eum iriure dolor in hendrerit
							in vulputate velit esse molestie consequat, vel illum dolore eu
							feugiat nulla facilisis at vero eros et accumsan et iusto odio
							dignissim qui blandit praesent luptatum zzril delenit augue duis
							dolore te feugait nulla facilisi.</p>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
							diam nonummy nibh euismod tincidunt ut laoreet dolore magna
							aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
							exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
							commodo consequat. Duis autem vel eum iriure dolor in hendrerit
							in vulputate velit esse molestie consequat, vel illum dolore eu
							feugiat nulla facilisis at vero eros et accumsan et iusto odio
							dignissim qui blandit praesent luptatum zzril delenit augue duis
							dolore te feugait nulla facilisi.</p>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
							diam nonummy nibh euismod tincidunt ut laoreet dolore magna
							aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
							exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
							commodo consequat. Duis autem vel eum iriure dolor in hendrerit
							in vulputate velit esse molestie consequat, vel illum dolore eu
							feugiat nulla facilisis at vero eros et accumsan et iusto odio
							dignissim qui blandit praesent luptatum zzril delenit augue duis
							dolore te feugait nulla facilisi.</p>
					</article>
					<div class="tags">
						<span> <img src="images/icon_tag.jpg" alt="" />
						</span> <a href="#">Bebê</a>, <a href="#">Gravidez</a>
					</div>
					<div class="compartilhe">
						<div>
							<p class="titulo">COMPARTILHE</p>
						</div>
						<div class="icones">
							<!-- AddThis Button BEGIN -->
							<div
								class="addthis_toolbox addthis_default_style addthis_32x32_style">
								<a class="addthis_button_preferred_1"></a> <a
									class="addthis_button_preferred_2"></a> <a
									class="addthis_button_preferred_3"></a> <a
									class="addthis_button_preferred_4"></a> <a
									class="addthis_button_preferred_5"></a> <a
									class="addthis_button_preferred_5"></a> <a
									class="addthis_button_compact"></a> <a
									class="addthis_counter addthis_bubble_style"></a>
							</div>
							<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
							<script type="text/javascript"
								src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4f5fae09404c665e"></script>
							<!-- AddThis Button END -->
						</div>
					</div>
				</section>
				<section id="artigos-relacionados">
					<header>
						
						<h1 class="titulo">
							Artigos relacionados
						</h1>
					</header>
					<?php for($ar = 0;$ar<=3;$ar++){?>
					<article>
						<figure>
							<img src="images/img.jpg" alt="" />
						</figure>
						<h2>Título do Artigo</h2>
						<p>Lorem ipsum dolor sit amet.</p>
						<a href="#leiamais" class="leiamais">Leia mais +</a>
					</article>
					<?php }?>
					<div class="clear"></div>
				</section>
				
				<sectio id="artigos-comentario">
					<header>
						<div class="comentario-artigo">
							<a href="#">
								3
							</a>
						</div>
						<h1 class="titulo">
							Comentários
						</h1>
						<article>
							<figure>
								<img src="images/user.jpg" alt=""  />
							</figure>
							<span class="user-data">
								Hugo jan 15, 2012 05:42 AM
							</span>
							<div class="comentario">
								<div class="line">
								</div>
								<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum.</p>
							</div>							
						</article>
						<div class="form-comentario">
							<h2 class="titulo">Faça um comentário</h2>
							<form action="#" method="post" class="validacoes">
								<input type="text" placeholder="Nome" name="nome" id="nome" class="validate[required]"/>
								<input type="text" placeholder="Email" name="email" id="email" class="validate[required,custom[email]]"/>
								<input type="text" placeholder="Website" name="website" class="validate[custom[url]]" />
								<textarea name="comentario" id="" cols="30" id="comentario" class="validate[required]" rows="10" placeholder="Comentário"></textarea>
								<input type="submit" value="Comentar" />
							</form>
						</div>
					</header>
				</sectio>
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