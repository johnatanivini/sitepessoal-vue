<?php

namespace Classes;

class Portfolio {

    private $sites;
    private $logotipos;
    private $skills;


public function getSites(){

    return $this->sites = array(

    array(
        'url'=>'http://web.archive.org/web/20150320042817/http://www.pqtdobrasil.com.br/',
        'title'=>'Site PQT do Brasil',
        'descricao'=>"Projeto para site de indústria quimica, página cacheada, pois a empresa",
        'imagem'=>'img/portfolio/otimizadas/pqtdobrasil.jpg',
        'tags'=>'criação do site com codeigniter,php, mysql'
    ),

    array(
        'url'=>'http://encelautomatico.com.br',
        'title'=>'Site Encel Automático (2013)',
        'descricao'=>"Projeto para comércio de automação de portões.",
        'imagem'=>'img/portfolio/otimizadas/encelautomatico.jpg',
        'tags'=>'criação de site,WordPress,html5, jquery,css3'
    ),

    array(
        'url'=>'http://segundaopiniao.jor.br',
        'title'=>'Site Segunda Opinião ',
        'descricao'=>"
Portal Jornalistico com opniões de figuras públicas e interessados em por sua opinião sobre Política, Artes, Cultura, e entre outros assuntos",
        'imagem'=>'img/portfolio/otimizadas/segundaopiniao.jpg',
        'tags'=>'criação de site,wordpress,html5, jquery,css3'
    ),

    array(
        'url'=>'',
        'title'=>'Site Vip Na Midia',
        'descricao'=>"Portal sobre festas ",
        'imagem'=>'img/portfolio/otimizadas/vipnamidia.jpg',
        'tags'=>'criação de site,wordpress,html5, css3,jquery'
    ),

    array(
        'url'=>'sites/seculosimoveis',
        'title'=>'Site Seculos Imóveis',
        'descricao'=>"Portal de Ímoveis",
        'imagem'=>'img/portfolio/otimizadas/seculosimoveis.jpg',
        'tags'=>'Adobe Fireworks, Html, Css, PHP'
    ),

    array(
        'url'=>'sites/saleimoveis',
        'title'=>'Site Portal de Ímoveis',
        'descricao'=>"Layout para um portal de venda de imóveis",
        'imagem'=>'img/portfolio/otimizadas/saleimoveis.jpg',
        'tags'=>'criação de site,Codeigniter,Mysql,PHP,Jquery,HTML,CSS'
    ),

    array(
        'url'=>'sites/papika/papika-home2.html',
        'title'=>'Site Papika',
        'descricao'=>"Sistema de assinaturas para bebês",
        'imagem'=>'img/portfolio/otimizadas/papika.jpg',
        'tags'=>'criação de site,codeigniter, pagseguro, php, mysql'
    ),


    array(
        'url'=>'sites/missgym/',
        'title'=>'Miss Gym',
        'descricao'=>"Layout para loja de fitness,acessorios e roupas.",
        'imagem'=>'img/portfolio/otimizadas/missgym.jpg',
        'tags'=>'site,html,css,jquery,php'
    ),

    array(
        'url'=>'sites/pontodobebe/',
        'title'=>'Ponto do Bebê',
        'descricao'=>"Layout para portal para gestantes",
        'imagem'=>'img/portfolio/otimizadas/pontodobebe.jpg',
        'tags'=>'site,Fireworks, Layout, Webdesign'
    ),

    array(
        'url'=>'sites/refrigeracaogas/',
        'title'=>'Refrigeração Gás',
        'descricao'=>"Layout para loja e-commerce de peças de refrigeração e serviços",
        'imagem'=>'img/portfolio/otimizadas/refrigeracaogas.jpg',
        'tags'=>'site,html,css,jquery,php'
    ),

    array(
        'url'=>'sites/gestanteemcurso/',
        'title'=>'AVA Gestante em Curso',
        'descricao'=>"Layout para sistema EAD para gestantes",
        'imagem'=>'img/portfolio/otimizadas/gestanteemcurso.jpg',
        'tags'=>'Fireworks, Html, Css, PHP, criação de site'
    )

);

}


public function getLogotipos(){

    return $this->logotipos = array(

    array(
        "url"=>"img/portfolio/logos/pqvirkle.png",
        "alt"=>"Logotipo para site de empresa química."
    ),
    array(
        "url"=>"img/portfolio/logos/papika.png",
        "alt"=>"Logotipo para site de empresas de assinatura"
    ),

    array(
        "url"=>"img/portfolio/logos/saleimoveis.png",
        "alt"=>"Logotipo para site de portal de imóveis"
    ),

    array(
        "url"=>"img/portfolio/logos/opcoeslanche.png",
        "alt"=>"Logotipo para site de empresa de lanches"
    ),
    array(
        "url"=>"img/portfolio/logos/montesegas.png",
        "alt"=>"Logotipo para site de empresa de venda de gás"
    ),

    array(
        "url"=>"img/portfolio/logos/rm.png",
        "alt"=>"Logotipo para site de empresa de autopeças"
    ),

    array(
        "url"=>"img/portfolio/logos/renatalousada.png",
        "alt"=>"Logotipo para site de de arquitetura"
    ),

    array(
        "url"=>"img/portfolio/logos/herbert-salens.png",
        "alt"=>"Logo para site de bebedouros"
    ),

    array(
        "url"=>"img/portfolio/logos/exposec.png",
        "alt"=>"Logotipo para site de trabalho de Faculdade"
    ),

    array(
        "url"=>"img/portfolio/logos/webmarkers.png",
        "alt"=>"Logotipo para site  de gestão de domínios"
    ),
    array(
        "url"=>"img/portfolio/logos/lepetitecafe.png",
        "alt"=>"Logotipo para site de empresas de lanches"
    ),
);
}


public function getSkills(){

return $this->skills = array(
    array(
        'url'=>"img/html5.png",
        "alt"=>"Criação de sites em html5"
    ),
    array(
        'url'=>"img/css3.png",
        "alt"=>"Criação de sites em css3"
    ),
    array(
        'url'=>"img/javascript.png",
        "alt"=>"Criação de sites em javascript"
    ),
    array(
        'url'=>"img/wordpress.png",
        "alt"=>"Criação de sites em wordpress"
    ),
    array(
        'url'=>"img/php.png",
        "alt"=>"Criação de sites em php"
    ),

    array(
        'url'=>"img/jquery.png",
        "alt"=>"Criação de sites em jquery"
    ),
    array(
        'url'=>"img/codeigniter.png",
        "alt"=>"Criação de sites em codeigniter"
    ),

    array(
        'url'=>"img/mysql.png",
        "alt"=>"Criação de sites em html5"
    ),
);
}
}