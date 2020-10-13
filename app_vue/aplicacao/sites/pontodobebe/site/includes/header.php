<?php 
include(BASE_DIR."/classes/Funcoes.class.php");
//letras
$letras = new Funcoes();
?>
<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Ponto do Bebê</title>
<link rel="shortcut icon" type="image/x-icon" href="<?=BASE_URL?>/favicon.ico" />
<base href="<?=BASE_URL?>/" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/validationEngine.jquery.css" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9" />

<!--[if IE]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- [if IE]>
<link rel="stylesheet" href="css/ie8.css" />
<[endif]-->
</head>
<body>
	<header id="header">
		<div class="header">
			<div class="cadastro">
				<div class="redes_sociais">
					<span>SIGA O PONTO DO BEBÊ <a href="#"> <img
							src="images/twitter.png" alt="Twitter" />
					</a> <a href="#"> <img src="images/facebook.png" alt="Facebook" />
					
					</span>
				</div>
				<div class="cadastro-link">
					<p>
						<a href="#"> AINDA NÃO È CADASTRADO? CADASTRE-SE AGORA! </a>
					</p>
				</div>
				<div class="login-link">
					<a href="#"> ACESSE </a>
				</div>
			</div>
			<div class="curtir">
				<img src="images/curtir.jpg" alt="curtir" />
			</div>
			<div class="logo">
				<a href="<?=BASE_URL?>"> <img src="images/logo.jpg"	alt="Página Principal" />
				</a>
			</div>
			<div class="banner">
				<img src="images/banner_top.jpg" alt="banner top" />
			</div>
			<div class="busca">
				<form action="#" name="busca" id="busca" class="validacoes" method="post">
					<span>O que você procura?</span> <input type="text" name="buscar"
						value="" placeholder="Pesquisar" id="buscar" class="validate[required]" /> <input type="submit"
						name="enviar" value="OK" />
				</form>
			</div>
		</div>
	</header>