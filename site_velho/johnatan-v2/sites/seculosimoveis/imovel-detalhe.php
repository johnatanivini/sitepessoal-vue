<?php include('includes/inc_header.php'); ?>
<?php include('includes/inc_busca.php'); ?>
<script type="text/javascript">
    document.write('<style>.noscript { display: none; }</style>');
</script>
<div class="paginas">
    <div class="breadcumb">
        <p>Voce está em: <a href="#"> Imóveis</a> &rsaquo; <a href="#"> Detalhes do imóvel </a></p>
    </div>
    <h1>Nome do imóvel <span style="float:right">COD.: 345TH</span></h1>
    <div class="foto-detalhe">
        <div id="gallery" class="content">
            <div id="controls" class="controls"></div>
            <div class="slideshow-container">
                <div id="loading" class="loader"></div>
                <div id="slideshow" class="slideshow"></div>
            </div>
            <!--            <div id="caption" class="caption-container"></div>-->
        </div>
        <div id="thumbs" class="navigation">
            <ul class="thumbs noscript">
                <?php $i = 0;
                while ($i <= 20): ?>
                    <li>
                        <a class="thumb" name="leaf_<?= $i + 1; ?>"  href="http://www.fantastiko2.com.br/fotos/foto_protegida.php?imobiliaria_logo=042&imobiliaria=042&foto=imovel_4793_30558.jpg&pos=0&transicao=50" title="titulo da imagem">
                            <img src="http://www.fantastiko2.com.br/fotos/thumb.php?foto=042/imovel_4793_30558.jpg&largura=90&altura=72" alt="titulo da imagem" />
                        </a>
                        <!--<div class="caption">
                            <div class="image-title">Titulo #0</div>
                            <div class="image-desc">Descricao</div>
                        </div>-->
                    </li>
                    <?php $i++;
                endwhile; ?>
            </ul>
        </div>
    </div>
    <div class="clear"></div>
    <div class="tabs tabs2">
        <!-- tabs -->
        <ul class="tabNavigation">
            <li><a href="#dados">Dados</a></li>
            <li><a href="#detalhes">Detalhes</a></li>
            <li><a href="#perfil">Perfil</a></li>
            <li><a href="#complemento">Complemento</a></li>
        </ul>
        <!-- tab containers -->
        <div id="dados" class="box detalhe-imovel">

            <div class="dados">
                <table width="100%" border="0" cellpadding="0" cellspacing="0" class="detalhes_dados">
                    <tbody><tr class="impar">
                            <td class="campos">Tipo do imóvel:</td>
                            <td class="coluna2">Apartamento</td>
                            <td class="campos">Situação:</td>
                            <td>Venda</td>
                        </tr>
                        <tr class="par">
                            <td class="campos">Bairro:</td>
                            <td class="coluna2">Buritis</td>
                            <td class="campos">Cidade:</td>
                            <td>Belo Horizonte</td>
                        </tr>
                        <tr class="impar">
                            <td class="campos">Valor:</td>
                            <td class="coluna2">R$ 760.000,00</td>
                            <td class="campos">Condominio:</td>
                            <td>R$ 550,00</td>
                        </tr>
                        <tr class="par">
                            <td class="campos">IPTU:</td>
                            <td class="coluna2">R$ 160,00</td>
                            <td class="campos">Idade ap. do imóvel:</td>
                            <td>1</td>
                        </tr>
                    </tbody></table>
            </div>
        </div>
        <div id="detalhes" class="box detalhe-imovel">
            <div class="dados">
                <table width="100%" border="0" cellpadding="0" cellspacing="0" class="detalhes_dados">
                    <tbody><tr class="impar">
                            <td class="campos">Área total:</td>
                            <td class="coluna2">150&nbsp;
                                m²</td>
                            <td class="campos">Área construída:</td>
                            <td>150&nbsp;m²
                            </td>
                        </tr>
                        <tr class="par">
                            <td class="campos">Área do lote/Terreno:</td>
                            <td class="coluna2">-</td>
                            <td class="campos">Frente:</td>
                            <td>-</td>
                        </tr>
                        <tr class="impar">
                            <td class="campos">Salas:</td>
                            <td class="coluna2">2</td>
                            <td class="campos">Quartos:</td>
                            <td>4</td>
                        </tr>
                        <tr class="par">
                            <td class="campos">Banheiros:</td>
                            <td class="coluna2">4</td>
                            <td class="campos">Suítes:</td>
                            <td>2</td>
                        </tr>
                        <tr class="impar">
                            <td class="campos">Varandas:</td>
                            <td class="coluna2">1</td>
                            <td class="campos">Vagas:</td>
                            <td>4</td>
                        </tr>
                        <tr class="par">
                            <td class="campos">Unidades por andar:</td>
                            <td class="coluna2">1</td>
                            <td class="campos">Nº de pavimentos:</td>
                            <td class="coluna2">9</td>
                        </tr>
                    </tbody></table>
            </div>
        </div>
        <div id="perfil" class="box detalhe-imovel">
            <div class="dados">
                <table width="100%" border="0" cellpadding="0" cellspacing="0" class="detalhes_dados">
                    <tbody><tr class="impar">
                            <td class="coluna1" style="padding:5px;">
                                <img src="css/i/tick.gif" alt="D.C.E." width="12" height="12">
                                D.C.E. </td>
                            <td class="coluna1" style="padding:5px;">
                                <img src="css/i/tick.gif" alt="Lavabo" width="12" height="12">
                                Lavabo </td>
                            <td class="coluna1" style="padding:5px;">
                                <img src="css/i/tick.gif" alt="Área de lazer" width="12" height="12">
                                Área de lazer </td>
                            <td class="coluna1" style="padding:5px;"> 
                                <img src="css/i/tick.gif" alt="Piscina" width="12" height="12">
                                Piscina </td>
                        </tr>
                        <tr class="par">
                            <td class="coluna1" style="padding:5px;">
                                <img src="css/i/tick.gif" alt="Salão de festas" width="12" height="12">
                                Salão de festas </td>
                            <td class="coluna1" style="padding:5px;"> 
                                <img src="css/i/tick.gif" alt="Salão de jogos" width="12" height="12">
                                Salão de jogos </td>
                            <td class="coluna1" style="padding:5px;">
                                <img src="css/i/tick.gif" alt="Quadras esportes" width="12" height="12">
                                Quadras esportes </td>
                            <td class="coluna1" style="padding:5px;"> 
                                <img src="css/i/tick.gif" alt="Interfone" width="12" height="12">
                                Interfone </td>
                        </tr>
                    </tbody></table>
            </div>
        </div>
        <div id="complemento" class="box detalhe-imovel">
            <div class="dados">
                <div class="complemento">
                    <p>Predio de luxo, otimo acabamento, jardins, fachada com blindex, aquecimento solar, pe direito duplo, lazer com salao de festas, salao fitness, piscina, quadra, espaço gourmet, vista para mata de preservação, rua tranquila, 4 vagas de garagem e box de despejo. Apartamento: Ampla sala para 3 ambientes, piso em porcelanato, lavabo, 4 quartos sendo 2 suites, rouparia, banho social, ampla cozinha com bancada de lanche rapito em granito, area de serviço ampla, DCE, todas as torneiras com agua quente e chuveiros.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <h1 style="padding:10px 0">Solicite maiores informações</h1>
    <form name="form1" method="post" action="#" >
        <table width="500">
            <tr>
                <td class="conteudo editor">
                    <input name="campos_obrigatorios" type="hidden" id="campos_obrigatorios" value="nome,email,telefone">
                    <input name="mensagem_preenchidos" type="hidden" id="mensagem_preenchidos" value="Favor informar o Nome!,Favor informar o E-mail!,Favor informar o Telefone!">
                    <input name="dest" type="hidden" id="dest" value="seculosimoveis@seculosimoveis.com.br">
                    <input name="campos" type="hidden" id="campos" value="nome,email,telefone,mensagem">
                    <input name="campos_descricao" type="hidden" id="campos_descricao" value="Nome: ,E-mail: ,Telefone: ,Mensagem: ">
                    <input name="titulo_formulario" type="hidden" id="titulo_formulario" value="Contato pelo site">
                    <input name="assunto" type="hidden" id="assunto" value="Contato pelo site">
                    <input name="retorno" type="hidden" id="retorno" value="conf.php">
                    <table border="0" align="center" cellpadding="5" cellspacing="3">
                        <tr>
                            <td align="right">Nome:</strong></td>
                            <td><input name="nome" type="text" class="Formulario" id="nome" ></td>
                        </tr>
                        <tr>
                            <td align="right">E-mail:</strong></td>
                            <td><input name="email" type="text" class="Formulario" id="email" ></td>
                        </tr>
                        <tr>
                            <td align="right">Telefone:</strong></td>
                            <td><input name="telefone" type="text" class="Formulario" id="telefone" ></td>
                        </tr>
                        <tr>
                            <td align="right" valign="top">Mensagem:</strong></td>
                            <td><textarea name="mensagem" rows="8" class="Formulario" id="mensagem" style="width: 300px; overflow: auto;"></textarea></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><label for="Submit"></label>
                                <input name="Enviar" type="submit" class="Formulario" id="Enviar" value="Enviar" style="background: #666; border: 1px solid #000; color: #fff;">
                                <label for="label"></label>
                                <input name="Limpar" type="reset" class="Formulario" id="label" value="Limpar" style="background: #666; border: 1px solid #000; color: #fff;"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>seculosimoveis@seculosimoveis.com.br</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>
    <div class="clear"></div>
    <p>Os preços e informações exibidos, poderão sofrer mudanças sem prévio aviso.<br/>
Por este motivo estes deverão ser confirmados pelo departamento comercial da Séculos Imóveis .</p>
    <?php include('includes/inc_atendimento.php') ?>
</div>
<?php include('includes/inc_footer.php') ?>
