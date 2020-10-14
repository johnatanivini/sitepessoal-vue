<?php
    include "autoload.php";

    use Classes\Portfolio;

    $portfolio = new Portfolio();
?>
<!DOCTYPE html>
<!--[if lt IE 8 ]>
<html class="no-js ie ie7" lang="pt-br"> <![endif]-->
<!--[if IE 8 ]>
<html class="no-js ie ie8" lang="pt-br"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!-->
<html class="no-js" lang="pt-br"> <!--<![endif]-->
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Person",
  "name": "Johnatan Ívini Vieira",
  "jobTitle": "Tecnólogo em Gestão de Tecnologia da Informação / Especialista em Análise, Projeto e Gerência de Sistemas.",
  "affiliation": "FATENE / ESTACIO-FIC",
  "additionalName": "Vieira",
  "url": "http://johnatanivini.eti.br"
}
</script>
<head>
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Johnatan &iacute;vini - Desenvolvedor Web</title>


    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />


    <meta name="description"
          content="Aumente sua prese&ccedil;a na web, crie um site em WordPress, ou desenvolva seu sistemas web em PHP, Codeigniter ou Laravel! Pe&ccedil;a um or&ccedil;amento!">
    <meta name="author" content="Johnatan &Iacute;vini">
    <meta name="keywords" content="cria&ccedil;&atilde;o de sites, wordpress, site, illustracao, laravel, codiginter "/>
    <meta name="p:domain_verify" content="12bab10162856d4e49646b68b09fb347"/>
    <meta name="msapplication-TileColor" content="#2C3E50">
    <meta name="msapplication-TileImage" content="ms-icon-144x144.png">
    <meta name="theme-color" content="#2C3E50">
    <link rel="canonical" href="http://johnatanivini.eti.br">
    <meta property="og:title" content="Johnatan Ívini | Desenvolvedor Web"/>
    <meta property="og:description"
          content="Cria&ccedil;&atilde;o de sites, sistemas web e aplicativos para IOS e Android!"/>
    <meta name="og:author" content="Johnatan &Iacute;vini"/>
    <meta property="og:locale" content="pt_BR">
    <meta property="og:url" content="http://www.johnatanivini.eti.br/#about">
    <meta property="og:site_name" content="Johnatan &Iacute;vini">
    <meta property="og:image" content="https://avatars0.githubusercontent.com/u/2191326?v=3&s=460">
    <meta property="og:image:type" content="image/png">
    <meta property="og:type" content="website">
    <meta property="article:tag" content="WordPress, Codeigniter, Laravel, layouts, webdesign, react, react native">
    <meta property="article:published_time" content="date_time">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content=" Johnatan Ívini - Desenvolvedor Web">
    <meta name="twitter:url" content="https://johnatanivini.eti.br">
    <meta name="twitter:description" content="Cria&ccedil;&atilde;o de sites, sistemas web e aplicativos para IOS e Android!">
    <meta name="twitter:image" content="https://avatars0.githubusercontent.com/u/2191326?v=3&s=460">

    <!-- CSS
    ================================================== -->
    <!--<link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/media-queries.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/alteracoes.css?<?=time();?>"> -->

    <link href="css/style.min.css" rel="stylesheet" />

    <!-- Script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <!-- Favicons
     ================================================== -->
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
</head>
<body>
<!-- Header
================================================== -->
<header id="home">
    <nav id="nav-wrap">
        <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
        <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>
        <ul id="nav" class="nav">
            <li class="current"><a class="smoothscroll" href="#home">Home</a></li>
            <li><a class="smoothscroll" href="#sobre-mim">Sobre</a></li>
            <li><a class="smoothscroll" href="#curriculo">Currículo</a></li>
            <li><a class="smoothscroll" href="#trabalhos">Trabalhos</a></li>
            <!--<li><a class="smoothscroll" href="#testimonials">Testimonials</a></li>-->
            <li><a class="smoothscroll" href="#contato">Contato</a></li>
        </ul> <!-- end #nav -->
    </nav> <!-- end #nav-wrap -->
    <div class="row banner">
        <div class="banner-text">
            <h1 class="responsive-headline">Johnatan Ívini </h1>
            <h2>Desenvolvedor Fullstack PHP</h2>
            <p>Tecnólogo em Gestão de Tecnologia da Informação - FATENE</p>
            <p>Especialista em Análise, Projeto e Gerência de Sistemas - ESTACIO</p>
            <hr/>
            <ul class="social">
                <li><a  href="https://www.facebook.com/johnatanivini" ><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/johnatanivini" ><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://plus.google.com/+JohnatanIvini" ><i class="fa fa-google-plus"></i></a></li>
                <li><a href="https://br.linkedin.com/in/johnatanivin" ><i class="fa fa-linkedin"></i></a></li>
                <li><a href="https://www.instagram.com/johnatanivini/" ><i class="fa fa-instagram"></i></a></li>
                <li><a href="skype:johnatanivini?chat" ><i class="fa fa-skype"></i></a></li>
            </ul>
        </div>
    </div>
    <p class="scrolldown">
        <a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>
    </p>
</header> <!-- Header End -->
<!-- About Section
================================================== -->
<section id="sobre-mim">
    <div id="about">
        <div class="row">
            <div class="three columns">
                <img class="profile-pic" src="https://avatars0.githubusercontent.com/u/2191326?v=3&s=460" alt="Johnatan &Iacute; - Cria&ccedil;&atilde;o de sites"/>
            </div>
            <div class="nine columns main-col">
                <h2>Sobre Mim  <span class="mfp-hide">Desenvolvimento de sites</span></h2>
                <p>Tecnólogo em Gestão em Tecnologia da Informação pela FATENE, Pós Graduado
                    em Análise, Projeto e Gerência de Sistema pela Faculdade Estácio, <br>
                    tenho grande experiência em desenvolvimento de sites com <b>WordPress</b>, e Framework <b>Codeigniter</b>,
                    a fim
                    de maior obter maior produtividade em novos projetos, estudando <b>Laravel</b>, <b>React</b>, <b>React Native</b>.
                    <div class="columns download text-right">
                <p>
                    <a href="https://docs.google.com/document/d/1lt85CQ1tD_bhAi-luZX-09gaRrQf22Y94kIqIFA9xL8/edit"  class="button" target="_blank"><i class="fa fa-download"></i>Download CV</a>
                </p>
            </div>
                </div> <!-- end row -->
            </div> <!-- end .main-col -->
        </div>
    </div>
</section> <!-- About Section End-->
<!-- Resume Section
================================================== -->
<section id="curriculo" style="position: relative">
    <div class="circle-section  cor-marron">
    </div>
    <div id="resume">
        <!-- Education        ----------------------------------------------- -->
        <div class="row education">
            <div class="three columns header-col">
                <h2><span>Educação </span><span class="mfp-hide"> e cursos em  WordPress</span></h2>
            </div>
            <div class="nine columns main-col">
                <div class="row item">
                    <div class="twelve columns">
                        <p class="title">Estácio-FIC</p>
                        <p class="info">Pós Graduação em Análise, Projeto e Gerência de Sistemas <span>&bull;</span> <em
                                    class="date">Abril
                                de 2017</em></p>
                    </div>
                </div> <!-- item end -->
                <div class="row item">
                    <div class="twelve columns">
                        <p class="title">Faculdade Terra Nordeste - FATENE</p>
                        <p class="info">Tecnólogo em Gestão da Informação <span>&bull;</span> <em class="date">Dezembro
                                de
                                2015</em>
                        </p>
                    </div>
                </div> <!-- item end -->
            </div> <!-- main-col end -->
        </div> <!-- End Education -->
        <!-- Work
        ----------------------------------------------- -->
        <div class="row work">
            <div class="three columns header-col">
                <h2><span>Experiência</span> <span class="mfp-hide"> em WordPress, Codeigntier e Laravel</span></h2>
            </div>
            <div class="nine columns main-col">
                <div class="row item">
                    <div class="twelve columns">
                        <p class="title">Fabrica Info - Soluções Inteligentes</p>
                        <p class="info">Programador <span>&bull;</span> <em class="date">Novembro 2015 - Presente</em>
                        </p>
                        <p>
                            Empresa localizada na cidade de Fortaleza no estado do Ceará, no ramo de gestão de
                            documentos,
                            organização e digitalização.<br>
                            Responsável pelas demandas relacionadas ao produto relacionado aos cartórios, uma central
                            que
                            faz
                            o relacionamento entre os clientes e os cartórios oferecendo suporte aos clientes quanto ao
                            processo de registros de documentos no meio digital, os sistemas são desenvolvidos em PHP, e
                            banco de dados PostgreSQL
                        </p>
                    </div>
                </div> <!-- item end -->
                <div class="row item">
                    <div class="twelve columns">
                        <p class="title">AG' Social Ideas - <span class="mfp-hide">Criação de Sites</span></p>
                        <p class="info">Desenvolvedor Web <span>&bull;</span> <em class="date">Agosto 2012 - Novembro
                                2015</em></p>
                        <p>Agência de Marketing Digital, localizada na cidade de Blumenau no estado de Santa Cartarina.
                            <br>
                            Trabalhando de forma remota, tinha responsabilidade pela codificação dos layouts entregues
                            em
                            formato PSD, para os temas em WordPress,
                            além da criação de plugins específicos para os temas, suporte a sites, sistemas legados em
                            PHP, portais, e sites institucionais desenvolvidos no CMS WordPress.
                        </p>
                    </div>
                </div> <!-- item end -->
                <div class="row item">
                    <div class="twelve columns">
                        <p class="title">Neo PrintSites <span class="mfp-hide">Desenvolvimento de Sites em WordPress</span></p>
                        <p class="info">Webdesigner <span>&bull;</span> <em class="date">Março 2009 - Agosto 2012</em>
                        </p>
                        <p> Agência de Marketing digital e material gráfico, localizada na cidade de Fortaleza no estado
                            do
                            Ceará.<br>Responsável pela criação, codificação e programação do layout conforme requisitos
                            repassados
                            pelo cliente. Os sitemas eram desenvolvidos em PHP e banco de dados MySql, além de executar
                            tarefas de
                            manutenção em sistemas já contruídos de terceiros.
                        </p>
                    </div>
                </div> <!-- item end -->
            </div> <!-- main-col end -->
        </div> <!-- End Work -->
        <!-- Skills
        ----------------------------------------------- -->
        <div class="row skill">
            <div class="three columns header-col">
                <h2><span>Habilidades</span> <span class="mfp-hide"> em WordPress, Laravel e Codeigniter</span> </h2>
            </div>
            <div class="nine columns main-col">
                <div class="habilidades">
                    <ul class="skills habilidades">
                        <li class="color" ><p><span class="php"></span><em>PHP 5+</em></p></li>
                        <li class="color" ><span class="laravel"></span><em>Laravel</em></li>
                        <li class="color" ><span class="wordpress"></span><em>WordPress</em></li>
                        <li class="color" ><span class="slim"></span><em>Slim Framework</em></li>
                        <li class="color" ><span class="codeigniter"></span><em>Codeigniter</em></li>
                        <li class="color" ><span class="jquery"></span><em>jQuery</em></li>
                        <li class="color" ><span class="javascript"></span><em>Javascript</em></li>
                        <li class="color symfony"><em>Symfony Components</em></li>
                        <li class="color"><em>Mysql</em></li>
                        <li class="color"><em>PostgreSQL</em></li>
                        <li class="color"><em>Mysql</em></li>
                    </ul>
                </div><!-- end skill-bars -->
            </div> <!-- main-col end -->
        </div> <!-- End skills -->
    </div>
</section> <!-- Resume Section End-->

<!-- servicos
================================================== -->
<section id="call-to-action" style="position: relative">
    <div class="circle-section">
    </div>
    <div class="row">
        <div class="two columns header-col">
            <h5><span>Serviços</span> <span class="mfp-hide"> Criação de sistemas em Codeiniter</span> </h5>
        </div>
        <div class="ten columns flex-container">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <p class="title">Webdesign</p>
                        <p>Criação de layouts em PSD, .AI, de sites institucionais, e-commerce, interfaces com base nas
                            tendências atuais.</p>
                    </li>
                    <li>
                        <p class="title">Criação de Sites</p>
                        <p>Desenvolvimento de sites institucionais,blogs, portais de notícias, vitrines virtuais, e
                            e-comerce em WordPress, Codeigniter ou Laravel</p>
                    </li>
                    <li>
                        <p class="title">Manutenção de Sistemas</p>
                        <p>Serviço de alteração, modificação no seu website em WordPress, Codeigniter, ou sites
                            estáticos. </p>
                    </li>
                    <li>
                        <p class="title">Sistemas Web</p>
                        <p>Análise e desenvolvimentos de sistemas especificos para empresas, agências, e demais tipos de
                            mercados.</p>
                    </li>
                    <li>
                        <p class="title">Aplicativos Web</p>
                        <p>Desenvolvimento de aplicações web híbridas, em html e css, compatível com IOS e Android.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section> <!-- Call-To-Action Section End-->

<!-- Portfolio Section
================================================== -->
<section id="trabalhos" style="position: relative">
    <div class="circle-section cor-marron-2">
    </div>
    <div id="portfolio">
        <div class="row">
            <div class="twelve columns collapsed">
                <h3>Confira alguns de meus trabalhos <span class="mfp-hide">em WordPress</span> </h3>
                <!-- portfolio-wrapper -->
                <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-thirds cf grid">
                    <?php
                        foreach ($portfolio->getSites() as $key => $dados) {
                            ?>
                            <div class="columns portfolio-item grid-item <?= $key == 0 ? 'grid-sizer' : ''; ?>">
                                <div class="item-wrap">
                                    <a href="#modal-<?= $key ?>" title="<?= $dados['title']; ?>">
                                        <img alt="<?= $dados['title']; ?> " src="<?= $dados['imagem']; ?>">
                                        <div class="overlay">
                                            <div class="portfolio-item-meta">
                                                <p class="title"><?= $dados['title']; ?></p>
                                                <p><?= $dados['tags']; ?></p>
                                            </div>
                                        </div>
                                        <div class="link-icon"><i class="icon-plus"></i></div>
                                    </a>
                                </div>
                                <!-- Modal Popup    --------------------------------------------------------------- -->
                                <div id="modal-<?= $key ?>" class="popup-modal mfp-hide">
                                    <img class="scale-with-grid" src="<?= $dados['imagem']; ?>"
                                         alt="<?= $dados['title']; ?>"/>
                                    <div class="description-box">
                                        <p class="title"><?= $dados['title']; ?></p>
                                        <p><?= $dados['descricao']; ?></p>
                                        <span class="categories"><i class="fa fa-tag"></i><?= $dados['tags']; ?></span>
                                    </div>
                                    <div class="link-box">
                                        <?php if (!empty($dados['url'])) { ?>
                                            <a href="<?= $dados['url']; ?>" target="_blank" >Detalhes</a>
                                        <?php } ?>
                                        <a class="popup-modal-dismiss">Close</a>
                                    </div>
                                </div><!-- modal-01 End -->
                            </div> <!-- item end -->
                        <?php } ?>
                </div> <!-- portfolio-wrapper end -->
            </div> <!-- twelve columns end -->
        </div> <!-- row End -->
    </div>
</section> <!-- Portfolio Section End-->

<!-- Contact Section
================================================== -->
<section id="contato">
    <div class="circle-section">
    </div>
    <div id="contact">
        <div class="row section-head">
            <div class="two columns header-col">
                <h6><span class="mfp-hide">Entre em contato ,peça o orçamento para seu site em WordPress</span></h6>
            </div>
            <div class="seven columns">
                <p class="lead">Use o formulário abaixo para entrar em contato, tirar dúvidas ou solicitar algum
                    serviço. Terei a maior satisfação em respondê-lo.
                </p>
            </div>
            <aside class="three columns footer-widgets">
                <div class="widget widget_contact text-right">
                    <p class="title">Informações</p>
                    <p class="address">
                        <i class="fa fa-user"></i> Johnatan Ívini<br>
                        <i class="fa fa-location-arrow"></i> Fortaleza, CE <br>
                        <i class="fa fa-phone"></i> (85) 9 8754.3565 <br>
                        <i class="fa fa-skype"></i> Skype: johnatanivini<br>
                    </p>
                </div>
            </aside>
        </div>
        <div class="row">
            <div class="twelve columns">
                <!-- form -->
                <form action="" method="post" id="contactForm" name="contactForm">
                    <fieldset>
                        <div>
                            <label for="contactName">Nome <span class="required">*</span></label>
                            <input value="" size="35" id="contactName" name="contactName" required>
                        </div>
                        <div>
                            <label for="contactEmail">Email <span class="required">*</span></label>
                            <input type="email" value="" size="35" id="contactEmail" name="contactEmail" required>
                        </div>
                        <div>
                            <label for="contactSubject">Assunto</label>
                            <input value="" size="35" id="contactSubject" name="contactSubject" required>
                        </div>
                        <div>
                            <label for="contactMessage">Mensagem <span class="required">*</span></label>
                            <textarea cols="50" rows="5" id="contactMessage" name="contactMessage" required></textarea>
                        </div>
                        <div>
                            <label for="contactSubject">Quanto é 80+9? <span class="required">*</span></label>
                            <input value="" size="35" id="contactCaptcha" name="contactCaptcha" required>
                        </div>
                        <div>
                            <button class="submit">Submit</button>
                            <span id="image-loader">
                        <img alt="loader" src="images/loader.gif">
                     </span>
                        </div>
                    </fieldset>
                </form> <!-- Form End -->
                <!-- contact-warning -->
                <div id="message-warning">
                    <i class="fa fa-exclamation-triangle"></i> Ops, alguma coisa aconteceu!
                </div>
                <!-- contact-success -->
                <div id="message-success">
                    <i class="fa fa-check"></i> Sua mensagem foi enviada, obrigado!<br>
                </div>
            </div>

        </div>
    </div>
</section> <!-- Contact Section End-->
<!-- footer
================================================== -->
<footer>
    <div class="row">
        <div class="twelve columns">
            <ul class="social-links">
                <li><a href="https://www.facebook.com/johnatanivini" ><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/johnatanivini" ><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://plus.google.com/+JohnatanIvini" ><i class="fa fa-google-plus"></i></a></li>
                <li><a href="https://br.linkedin.com/in/johnatanivin"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="https://www.instagram.com/johnatanivini/" ><i class="fa fa-instagram"></i></a></li>
                <li><a href="skype:johnatanivini?chat"><i class="fa fa-skype" ></i></a></li>
            </ul>
            <ul class="copyright">
                <li>&copy; Copyright 2017 Johnatan Ívini</li>
            </ul>
        </div>
        <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#home"><i class="icon-up-open"></i></a></div>
    </div>
</footer> <!-- Footer End-->
<!-- Java Script
================================================== -->

<script src="js/js.min.js" ></script>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-11199921-17', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>