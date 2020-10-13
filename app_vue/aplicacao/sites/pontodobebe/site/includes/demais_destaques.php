<section id="demais-destaques">
				<section id="nome-bebe">
					<header>
						<h1 class="titulo">Nome de Bebês</h1>
					</header>
					<div class="letras">
						<?php 
						$pagina = 'example';
						$letras->alphabect($pagina);
						?>
					</div>
					<article>
						<a href="#">Como escolher?</a>
						<a href="#">Nomes da Moda?</a>
						<a href="#">Dê um palpite?</a>
					</article>
				</section>
				<section id="com-problemas">
					<header>
						<hgroup>
							<h1>Com problemas?</h1>
							<h2>O Ponto do Bebê te ajuda!</h2>
						</hgroup>
					</header>
							<p>
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci 
							</p>
						<fieldset>
							<form action="#" method="post" name="comproblemas">
								<select name="problema" id="">
									<option value="0">Solução para gestantes ou filhos:</option>
									<option value="1">Gravidez</option>
									<option value="2">Filhos:</option>
								</select>
								<br>
								<select name="solucao" id="">
									<option value="0">Solução para:</option>
								</select><br>
								<input type="submit" name="ok" value="OK" />
							</form>
						</fieldset>
						<span class="balao"></span>
				</section>
				<section id="blogs">
					<header>
						<h1>Blogs Parceiros</h1>
					</header>
					<?php for($blog = 0;$blog<=2;$blog++){?>
					<article>
						<figure>
							<img src="images/barriga.jpg" alt="gravides" width="50"/>
						</figure>
						<h2>Nome do Blog</h2>
						<p><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit ?</a></p>
					</article>
					<?php }?>
					<a href="#mais-parceiros" class="leia-mais">mais parceiros +</a>
				</section>
				<div class="clear"></div>
			</section>