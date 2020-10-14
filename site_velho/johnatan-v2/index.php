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
          content="Cria&ccedil;&atilde;o de sites em WordPress e Sistemas web em PHP, Codeigniter e Laravel! Peça um or&ccedil;amento!">
    <meta name="author" content="Johnatan &Iacute;vini">
    <meta name="keywords" content="cria&ccedil;&atilde;o de sites, codeigniter, wordpress, laravel,  layouts, webdesign "/>
    <meta name="p:domain_verify" content="12bab10162856d4e49646b68b09fb347"/>
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#2C3E50">
    <meta name="msapplication-TileImage" content="ms-icon-144x144.png">
    <meta name="theme-color" content="#2C3E50">
    <meta name="og:title" content="Johnatan Ívini | Desenvolvedor Web"/>
    <meta name="og:description"
          content="Cria&ccedil;&atilde;o de sites em WordPress e Sistemas web em PHP, Codeigniter e Laravel! Pe&ccedil;a um or&ccedil;amento!"/>
    <meta name="og:author" content="Johnatan &Iacute;vini"/>
    <meta property="og:locale" content="pt_BR">
    <meta property="og:url" content="http://www.johnatanivini.eti.br/#about">
    <meta property="og:site_name" content="Johnatan &Iacute;vini">
    <meta property="og:image" content="https://avatars0.githubusercontent.com/u/2191326?v=3&s=460">
    <meta property="og:image:type" content="image/png">
    <meta property="og:type" content="website">
    <meta property="article:tag" content="WordPress, Codeigniter, Laravel, layouts, webdesign">
    <meta property="article:published_time" content="date_time">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/media-queries.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/alteracoes.css?<?=time();?>">

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
            <h1 class="responsive-headline">Johnatan Ívini</h1>
            <p>Olá, sou desenvolvedor web <span>PHP</span>, <span>Codeigniter</span>,
                <span>WordPress</span> e <span>Laravel</span>, com  ampla experiência em
                <span>designer gráfico</span>, <span>web designer</span>.<br> Se quiser saber mais sobre mim, <br>
                continue a <a class="smoothscroll" href="#about">descer</a>
                e aprenda mais <a class="smoothscroll" href="#about">sobre mim.</a>.</p>
            <hr/>
            <ul class="social">
                <li><a href="https://www.facebook.com/johnatanivini"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/johnatanivini"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://plus.google.com/+JohnatanIvini"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="https://br.linkedin.com/in/johnatanivin"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="https://www.instagram.com/johnatanivini/"><i class="fa fa-instagram"></i></a></li>
                <li><a href="skype:johnatanivini?chat"><i class="fa fa-skype"></i></a></li>
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
                <h1>Sobre Mim</h1>
                <p>Tecnólogo em Gestão em Tecnologia da Informação pela FATENE, Pós Graduado
                    em Análise, Projeto e Gerência de Sistema pela Faculdade Estácio, <br>
                    tenho grande experiência em desenvolvimento de sites com <b>WordPress</b>, e Framework <b>Codeigniter</b>,
                    a fim
                    de maior obter maior produtividade em novos projetos, estudo <b>Laravel</b>, converto <b>PSD</b>
                    para <b>HTML</b> e <b>WordPress</b>.</p>
                <div class="row">
                    <div class="columns contact-details">
                        <h2>Contato</h2>
                        <p class="address">
                            <span>Johnatan Ívini</span><br>
                            <span>Fortaleza,Ce </span><br>
                            <span>Tel.: (85) 9 8754-3565 (Whatsapp)</span><br>
                            <span>Email.: contato@johnatanivini.eti.br</span>
                        </p>
                    </div>
                    <div class="columns download">
                        <p>
                            <a href="arquivo/CV-Johnatan-Ivini-Programador-I.pdf" class="button" target="_blank"><i class="fa fa-download"></i>Baixe meu currículo</a>
                        </p>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end .main-col -->
        </div>
    </div>
</section> <!-- About Section End-->
<!-- Resume Section
================================================== -->
<section id="curriculo">
    <div id="resume">
        <!-- Education        ----------------------------------------------- -->
        <div class="row education">
            <div class="three columns header-col">
                <h2><span>Educação</span></h2>
            </div>
            <div class="nine columns main-col">
                <div class="row item">
                    <div class="twelve columns">
                        <h2>Estácio-FIC</h2>
                        <p class="info">Pós Graduação em Análise, Projeto e Gerência de Sistemas <span>&bull;</span> <em
                                    class="date">Abril
                                de 2017</em></p>
                    </div>
                </div> <!-- item end -->
                <div class="row item">
                    <div class="twelve columns">
                        <h2>Faculdade Terra Nordeste - FATENE</h2>
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
                <h2><span>Experiência</span></h2>
            </div>
            <div class="nine columns main-col">
                <div class="row item">
                    <div class="twelve columns">
                        <h2>Fabrica Info - Soluções Inteligentes</h2>
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
                        <h2>AG' Social Ideas</h2>
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
                        <h2>Neo PrintSites</h2>
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
                <h2><span>Habilidades</span></h2>
            </div>
            <div class="nine columns main-col">
                <div class="bars">
                    <ul class="skills">
                        <li><span class="bar-expand php"></span><em>PHP</em></li>
                        <li><span class="bar-expand wordpress"></span><em>WordPress</em></li>
                        <li><span class="bar-expand codeigniter"></span><em>Codeigniter</em></li>
                        <li><span class="bar-expand jquery"></span><em>jQuery</em></li>
                        <li><span class="bar-expand laravel"></span><em>Laravel</em></li>
                        <li><span class="bar-expand css"></span><em>CSS</em></li>
                        <li><span class="bar-expand html5"></span><em>HTML5</em></li>
                        <li><span class="bar-expand illustrator"></span><em>Illustrator</em></li>
                        <li><span class="bar-expand photoshop"></span><em>Photoshop</em></li>
                    </ul>
                </div><!-- end skill-bars -->
            </div> <!-- main-col end -->
        </div> <!-- End skills -->
    </div>
</section> <!-- Resume Section End-->
<!-- Portfolio Section
================================================== -->
<section id="trabalhos">
    <div id="portfolio">
        <div class="row">
            <div class="twelve columns collapsed">
                <h1>Confira alguns de meus trabalhos</h1>
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
                                                <h2><?= $dados['title']; ?></h2>
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
                                        <h2><?= $dados['title']; ?></h2>
                                        <p><?= $dados['descricao']; ?></p>
                                        <span class="categories"><i class="fa fa-tag"></i><?= $dados['tags']; ?></span>
                                    </div>
                                    <div class="link-box">
                                        <?php if (!empty($dados['url'])) { ?>
                                            <a href="<?= $dados['url']; ?>" target="_blank">Detalhes</a>
                                        <?php } ?>
                                        <a class="popup-modal-dismiss">Close</a>
                                    </div>
                                </div><!-- modal-01 End -->
                            </div> <!-- item end -->
                        <?php } ?>
                    <?php
                        foreach ($portfolio->getLogotipos() as $key => $dados) {
                            ?>
                            <div class="columns portfolio-item grid-item">
                                <div class="item-wrap">

                                    <a href="#logo-<?= $key ?>" title="<?= $dados['title']; ?>">
                                        <img alt="<?= $dados['title']; ?> " src="<?= $dados['imagem']; ?>">
                                        <div class="overlay">
                                            <div class="portfolio-item-meta">
                                                <h2><?= $dados['title']; ?></h2>
                                                <p><?= $dados['tags']; ?></p>
                                            </div>
                                        </div>
                                        <div class="link-icon"><i class="icon-plus"></i></div>
                                    </a>
                                </div>
                                <!-- Modal Popup  --------------------------------------------------------------- -->
                                <div id="logo-<?= $key ?>" class="popup-modal mfp-hide">
                                    <div style="text-align: center">
                                        <img class="scale-with-grid" src="<?= $dados['imagem']; ?>"
                                             alt="<?= $dados['title']; ?>"/>
                                    </div>
                                    <div class="description-box">
                                        <h2><?= $dados['title']; ?></h2>
                                        <p><?= $dados['descricao']; ?></p>
                                        <span class="categories"><i class="fa fa-tag"></i><?= $dados['tags']; ?></span>
                                    </div>
                                    <div class="link-box">
                                        <?php if (!empty($dados['url'])) { ?>
                                            <a href="<?= $dados['url']; ?>" target="_blank">Details</a>
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
<!-- servicos
================================================== -->
<section id="call-to-action">
    <div class="row">
        <div class="two columns header-col">
            <h1><span>Serviços</span></h1>
        </div>
        <div class="ten columns flex-container">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <h2>Webdesign</h2>
                        <p>Criação de layouts em PSD, .AI, de sites institucionais, e-commerce, interfaces com base nas
                            tendências atuais.</p>
                    </li>
                    <li>
                        <h2>Criação de Sites</h2>
                        <p>Desenvolvimento de sites institucionais,blogs, portais de notícias, vitrines virtuais, e
                            e-comerce em WordPress, Codeigniter ou Laravel</p>
                    </li>
                    <li>
                        <h2>Manutenção de Sistemas</h2>
                        <p>Serviço de alteração, modificação no seu website em WordPress, Codeigniter, ou sites
                            estáticos. </p>
                    </li>
                    <li>
                        <h2>Sistemas Web</h2>
                        <p>Análise e desenvolvimentos de sistemas especificos para empresas, agências, e demais tipos de
                            mercados.</p>
                    </li>
                    <li>
                        <h2>Aplicativos Web</h2>
                        <p>Desenvolvimento de aplicações web híbridas, em html e css, compatível com IOS e Android.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section> <!-- Call-To-Action Section End-->
<!-- Contact Section
================================================== -->
<section id="contato">
    <div id="contact">
        <div class="row section-head">
            <div class="two columns header-col">
                <h1><span>Entre em contato</span></h1>
            </div>
            <div class="ten columns">
                <p class="lead">Use o formulário abaixo para entrar em contato, tirar dúvidas ou solicitar algum
                    serviço. Terei a maior satisfação em respondê-lo.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="eight columns">
                <!-- form -->
                <form action="" method="post" id="contactForm" name="contactForm">
                    <fieldset>
                        <div>
                            <label for="contactName">Nome <span class="required">*</span></label>
                            <input value="" size="35" id="contactName" name="contactName">
                        </div>
                        <div>
                            <label for="contactEmail">Email <span class="required">*</span></label>
                            <input value="" size="35" id="contactEmail" name="contactEmail">
                        </div>
                        <div>
                            <label for="contactSubject">Assunto</label>
                            <input value="" size="35" id="contactSubject" name="contactSubject">
                        </div>
                        <div>
                            <label for="contactMessage">Mensagem <span class="required">*</span></label>
                            <textarea cols="50" rows="5" id="contactMessage" name="contactMessage"></textarea>
                        </div>
                        <div>
                            <label for="contactSubject">Quanto é 80+9? <span class="required">*</span></label>
                            <input value="" size="35" id="contactCaptcha" name="contactCaptcha">
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
                <div id="message-warning">Ops, alguma coisa aconteceu!</div>
                <!-- contact-success -->
                <div id="message-success">
                    <i class="fa fa-check"></i>Sua mensagem foi enviada, obrigado!<br>
                </div>
            </div>
            <aside class="four columns footer-widgets">
                <div class="widget widget_contact">
                    <h2>Informações</h2>
                    <p class="address">
                       <i class="fa fa-user"></i> Johnatan Ívini<br>
                        <i class="fa fa-location-arrow"></i> Fortaleza, CE <br>
                    <i class="fa fa-phone"></i> (85) 9 8754.3565 <br>
                    <i class="fa fa-envelope"></i> contato@johnatanivini.eti.br <br>
                    <i class="fa fa-skype"></i> Skype: johnatanivini<br>
                    </p>
                </div>
            </aside>
        </div>
    </div>
</section> <!-- Contact Section End-->
<!-- footer
================================================== -->
<footer>
    <div class="row">
        <div class="twelve columns">
            <ul class="social-links">
                <li><a href="https://www.facebook.com/johnatanivini"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/johnatanivini"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://plus.google.com/+JohnatanIvini"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="https://br.linkedin.com/in/johnatanivin"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="https://www.instagram.com/johnatanivini/"><i class="fa fa-instagram"></i></a></li>
                <li><a href="skype:johnatanivini?chat"><i class="fa fa-skype"></i></a></li>
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/waypoints.js"></script>
<script src="js/jquery.fittext.js"></script>
<script src="js/magnific-popup.js"></script>
<script src="js/mansonry.js"></script>
<script src="js/init.js"></script>
</body>
</html>