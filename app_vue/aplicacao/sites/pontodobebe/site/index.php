<?php 

//configuacoes globais
/*
 * define os diretórios gerais
*
* exemplo: <?=BASE_DIR?>/css/style.css
*
*/
define('BASE_URL','http://www.ivinidesigner.com.br/sites/pontodobebe/site');
define('BASE_DIR','/home/ivinidesigner/www/sites/pontodobebe/site');
define('DIR_PAGINAS','/home/ivinidesigner/www/sites/pontodobebe/site/paginas');


//pega páginas in um array
//transforma a variavel como global
global $config;

$config = array(
		"params" => array(), //parametros a serem utilizados nas paginas inclusas
		"pagina" => 'home'
);
/* pega o get da url tansforma em array
 * example: example.com.br/home/produtos/1
* home = página atual  // array retirado do array shift
* home/produtos/ = array ( 0 => produtos);
* home/produtos/1 = array ( 1 = 1);
*
*/
if(isset($_GET["params"]) && count($_GET["params"]) > 0){
	$_GET["params"] = trim($_GET["params"]);

	$params = explode("/", $_GET["params"]);
	$config["pagina"] = $params[0];

	//retira primeiro elemento do array
	array_shift($params);

	$config["params"] = $params;
}
$include = DIR_PAGINAS."/".$config["pagina"].".php";
// var_dump($include);

/*
 * Caso a página não existir ou diretorio
*/
if(is_file($include)){
	include $include;
}else if(is_file(DIR_PAGINAS."/"."404.php")){
	include DIR_PAGINAS."/"."404.php";
}else{
	echo "<h1 align='center'>Erro 404! Página inexistente!</h1>";
}

?>