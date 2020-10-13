<?php 

$meses = array(
			'Janeiro',
			'Fevereiro',
		'Março',
		'Abril',
		'Maio',
		'Junho',
		'Julho',
		'Agosto',
		'Setembro',
		'Outubro',
		'Novembro',
		'Dezembro'
		)

?>
<aside class="sidebar">
	
		<a href="#acompanhe-gestacao" title="acompanhe sua gestação">
			<img src="images/acompanhe-gestacao.jpg" alt="Acompanhe sua gestação" />
		</a>

	<form action="" class="calculadoraOvulacao">
		<fieldset>
			<legend>Calculadora da Ovulação</legend>
			<span>Qual foi o primeiro dia da sua última menstruação?</span>
			<div class="clear"></div>
			<select name="dia-ovulacao" id="dia-ovulacao" class="selFirst">
				<?php for($c=1;$c<=31;$c++){?>
				<option value="<?=$c?>"><?=$c?></option>
				<?php }?>
			</select>
				<select name="mes-ovulacao" id="mes-ovulacao">
					<?php foreach($meses as $meses){?>
						<option value="<?=$meses?>"><?=$meses?></option>
					<?php }?>
				</select>
			<select name="ano-ovulacao" id="ano-ovulacao">
				<?php for($d=2012;$d<=2017;$d++){?>
				<option value="<?=$d?>"><?=$d?></option>
				<?php }?>
			</select>
			<div class="clear"></div>
			<span>Quantos dias  de ciclo menstrual em media?
			<select name="ciclo" id="ciclo">
				<?php for($c=1;$c<=31;$c++){?>
				<option value="<?=$c?>"><?=$c?></option>
				<?php }?>
			</select>
			</span>
			<a href="#calcula-periodo-fertil" class="btn azul">CALCULE SEU PERIODO FÉRTIL</a>
			<span class="icon"></span>
		</fieldset>
		
	</form>
	<article class="chatonline">
		<header>
		<h1>CHAT ONLINE</h1>
		</header>
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing</p>
		<a href="#acessar-bate-papo" class="btn amarelo">ACESSAR O BATE PAPO</a>
	</article>
	<article class="dicabebe">
		<header>
		<h1>CHAT ONLINE</h1>
		</header>
		<p>Lorem ipsum dolor sit amet, <br> consectetuer adipiscing</p>
		<a href="#acessar-bate-papo" class="btn">Clique aqui</a>
	</article>
	<article class="publicidade">
			<p>Publicidade:</p>
			<div class="codeadsense">
				<img src="images/publicidade.jpg" alt="Publicidade" />
			</div>
	</article>
</aside>