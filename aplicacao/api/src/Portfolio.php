<?php

namespace Api;

use Psr\Http\Message\ServerRequestInterface as Request;

class Portfolio {

    private $sites;
    private $logotipos;
    private $skills;
    private $url;
    public function __construct(Request $request)
    {
        $this->url = $request->getServerParams()['HTTP_HOST'];
    }

public function getSites(){

   $this->sites = array(

    array(
        'url'=>'http://web.archive.org/web/20150320042817/http://www.pqtdobrasil.com.br/',
        'title'=>'Site PQT do Brasil',
        'descricao'=>"Projeto para site de indústria quimica, página cacheada, pois a empresa, desenvolvido em Codeigniter",
        'imagem'=>$this->url.'/images/portfolio/modals/pqtdobrasil.jpg',
        'tags'=>'Codeigniter, MySQL',
    ),

    array(
        'url'=>'http://encelautomatico.com.br',
        'title'=>'Site Encel Automático (2013)',
        'descricao'=>"Projeto para comércio de automação de portões, desenvolvido em WordPress",
        'imagem'=>$this->url.'/images/portfolio/modals/encelautomatico.jpg',
        'tags'=>'WordPress, PHP, MySQL'
    ),

    array(
        'url'=>'http://segundaopiniao.jor.br',
        'title'=>'Site Segunda Opinião ',
        'descricao'=>"
Portal Jornalistico com opniões de figuras públicas e interessados em por sua opinião sobre Política, Artes, Cultura, e entre outros assuntos, prtal implementado em WordPress",
        'imagem'=>$this->url.'/images/portfolio/modals/segundaopiniao.jpg',
        'tags'=>'WordPress, PHP, MySQL'
    ),

    array(
        'url'=>'',
        'title'=>'Site Vip Na Midia',
        'descricao'=>"Portal sobre festas, implementado em WordPress",
        'imagem'=>$this->url.'/images/portfolio/modals/vipnamidia.jpg',
        'tags'=>'WordPress, Fireworks, MySQL'
    ),

    array(
        'url'=>'sites/seculosimoveis',
        'title'=>'Site Seculos Imóveis',
        'descricao'=>"Portal de Ímoveis, implementado posteriormente em PHP e MySql",
        'imagem'=>$this->url.'/images/portfolio/modals/seculosimoveis.jpg',
        'tags'=>'Adobe Fireworks, Webdesign'
    ),

    array(
        'url'=>'sites/saleimoveis',
        'title'=>'Site Portal de Ímoveis',
        'descricao'=>"Layout para um portal de venda de imóveis",
        'imagem'=>$this->url.'/images/portfolio/modals/saleimoveis.jpg',
        'tags'=>'Webdesign, Adobe Fireworks'
    ),

    array(
        'url'=>'sites/papika/papika-home2.html',
        'title'=>'Site Papika',
        'descricao'=>"Sistema de assinaturas para bebês, integrado com o sistema de assinaturas do pagamento online PagSeguro",
        'imagem'=>$this->url.'/images/portfolio/modals/papika.jpg',
        'tags'=>'Codeigniter, Webdesign, PagSeguro'
    ),


    array(
        'url'=>'sites/missgym/',
        'title'=>'Miss Gym',
        'descricao'=>"Layout para loja de fitness,acessorios e roupas.",
        'imagem'=>$this->url.'/images/portfolio/modals/missgym.jpg',
        'tags'=>'Codeigniter, WebDesign'
    ),

    array(
        'url'=>'sites/pontodobebe/',
        'title'=>'Ponto do Bebê',
        'descricao'=>"Layout para portal para gestantes",
        'imagem'=>$this->url.'/images/portfolio/modals/pontodobebe.jpg',
        'tags'=>'Webdesign, Adobe Fireworks'
    ),

    array(
        'url'=>'sites/refrigeracaogas/',
        'title'=>'Refrigeração Gás',
        'descricao'=>"Layout para loja e-commerce de peças de refrigeração e serviços",
        'imagem'=>$this->url.'/images/portfolio/modals/refrigeracaogas.jpg',
        'tags'=>'Adobe FireWorks, Codeigniter'
    ),

    array(
        'url'=>'sites/gestanteemcurso/',
        'title'=>'AVA Gestante em Curso',
        'descricao'=>"Layout para sistema EAD para gestantes",
        'imagem'=>'images/portfolio/modals/gestanteemcurso.jpg',
        'tags'=>'Fireworks, Codeigniter'
    )

);

   return $this->sites;

}


public function getLogotipos(){

    return $this->logotipos = array(

    array(
        "title"=>"PQVirkle",
        "imagem"=>$this->url.'/images/portfolio/logos/pqvirkle.png',
        "descricao"=>"Logotipo para site de empresa química.",
        'tags'=>'Ilustração'
    ),
    array(
        "title"=>"Papika",
        "imagem"=>$this->url."/images/portfolio/logos/papika.png",
        "alt"=>"Logotipo para site de empresas de assinatura",
        'tags'=>'Ilustração'
    ),

    array(
        "title"=>"SaleImoveis",
        "imagem"=>$this->url."/images/portfolio/logos/saleimoveis.png",
        "descricao"=>"Logotipo para site de portal de imóveis",
        'tags'=>'Ilustração'
    ),

    array(
        "title"=>"Opções Lanche",
        "imagem"=>$this->url."/images/portfolio/logos/opcoeslanche.png",
        "descricao"=>"Logotipo para site de empresa de lanches",
        'tags'=>'Ilustração'
    ),
    array(
        "title"=>"Montese Gás",
        "imagem"=>$this->url."/images/portfolio/logos/montesegas.png",
        "descricao"=>"Logotipo para site de empresa de venda de gás",
        'tags'=>'Ilustração'
    ),

    array(
        "title"=>"RM",
        "imagem"=>$this->url."/images/portfolio/logos/rm.png",
        "descricao"=>"Logotipo para site de empresa de autopeças",
        'tags'=>'Ilustração'
    ),

    array(
        "title"=>"Renata Lousada",
        "imagem"=>$this->url."/images/portfolio/logos/renatalousada.png",
        "descricao"=>"Logotipo para site de de arquitetura",
        'tags'=>'Ilustração'
    ),

    array(
        "title"=>"Herbet Salens",
        "imagem"=>$this->url."/images/portfolio/logos/herbert-salens.png",
        "descricao"=>"Logo para site de bebedouros",
        'tags'=>'Ilustração'
    ),

    array(
        "title"=>"Exposec",
        "imagem"=>$this->url."/images/portfolio/logos/exposec.png",
        "descricao"=>"Logotipo para site de trabalho de Faculdade",
        'tags'=>'Ilustração'

    ),

    array(
        "title"=>"WebMarkers",
        "imagem"=>$this->url."/images/portfolio/logos/webmarkers.png",
        "descricao"=>"Logotipo para site  de gestão de domínios",
        'tag'=>'Ilustração'
    ),
    array(
        "title"=>"Le Petite Café",
        "imagem"=>$this->url."/images/portfolio/logos/lepetitecafe.png",
        "descricao"=>"Logotipo para site de empresas de lanches",
        'tags'=>'Ilustração'
    ),
);
}


public function getSkills(){

return $this->skills = array(
    array(
        'title'=>'HTML5',
        'imagem'=>$this->url."/images/skills/html5.png",
        "descricao"=>"Criação de sites em html5"
    ),
    array(
        'title'=>'CSS3',
        'imagem'=>$this->url."/images/skills/css3.png",
        "descricao"=>"Criação de sites em css3"
    ),
    array(
        'title'=>'Javascript',
        'imagem'=>$this->url."/images/skills/javascript.png",
        "descricao"=>"Criação de sites em javascript"
    ),
    array(
        'title'=>'WordPress',
        'imagem'=>$this->url."/images/skills/wordpress.png",
        "descricao"=>"Criação de sites em WordPress"
    ),
    array(
        'title'=>'PHP7+',
        'imagem'=>$this->url."/images/skills/php.png",
        "descricao"=>"Criação de sites em php"
    ),

    array(
        'title'=>'jQuery',
        'imagem'=>$this->url."/images/skills/jquery.png",
        "descricao"=>"Criação de sites em jquery"
    ),
    array(
        'title'=>'Codeigniter',
        'imagem'=>$this->url."/images/skills/codeigniter.png",
        "descricao"=>"Criação de sites em codeigniter"
    ),

    array(
        'title'=>'MySQL',
        'imagem'=>$this->url."/images/skills/mysql.png",
        "descricao"=>"Criação de sites com Vue"
    ),
    array(
        'title'=>'Laravel',
        'imagem'=>$this->url."/images/skills/laravel.png",
        "descricao"=>"Criação de sistemas web com Laravel"
    ),
    array(
        'title'=>'Vue',
        'imagem'=>$this->url."/images/skills/vue.png",
        "descricao"=>"Criação de aplicações frontedn Vue"
    ),
    array(
        'title'=>'PostgreSQL',
        'imagem'=>$this->url."/images/skills/postgresql.png",
        "descricao"=>"Criação de sistemas e sites com PostgreSQL"
    ),
);
}
}