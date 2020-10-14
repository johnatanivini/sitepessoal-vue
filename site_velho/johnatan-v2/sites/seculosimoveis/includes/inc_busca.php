<div class="sidebar">
    <h2 class="laranja">BUSCA POR CÓDIGO</h2>
    <form action="#" method="post" class="busca_codigo">
        <span><input type="text" id="busca" name="busca" value="" /></span>
        <input type="submit" id="enviar" name="enviar" value="ENVIAR" class="btn_codigo" />
    </form>
    <div class="clear"></div>
    <div class="bg_busca">
        <h2 class="laranja">PESQUISA DE IMÓVEIS</h2>
        <form action="#" method="post">
            <table width="100%">
                <tr>
                    <td width="50%"><input type="radio"  name="tipo" value="pre-lancamento"/>Pré lançamento</td>
                    <td><input type="radio"  name="tipo" value="lancamento" checked="checked"/>Lançamento</td>
                </tr>
                <tr>
                    <td><input type="radio"  name="tipo" value="revenda"/>Pontos de revenda</td>
                    <td><input type="radio"  name="tipo" value="terrenos"/>Terrenos</td>
                </tr>
                <tr>
                    <td><input type="radio"  name="tipo" value="aluguel"/>Aluguel</td>
                    <td></td>
                </tr>

            </table>
            <p>ESTADO:</p>
            <label for="estado">
                <select id="estado" name="estado" class="styled" style="width:285px;">
                    <option value="1">Ceará</option>
                </select>
            </label>
            <p>CIDADE:</p>
            <label for="cidade">
                <select id="cidade" name="cidade" class="styled" style="width:285px">
                    <option value="1">Fortaleza</option>
                </select>
            </label>
            <p>BAIRRO:</p>
            <label for="bairro">
                <select id="bairro" name="bairro" class="styled" multiple="multiple" style="width:285px">
                    <option value="1">Aldeota</option>
                    <option value="1">Meireles</option>
                </select>
            </label>
            <p>TIPOS:</p>
            <label for="tipo">
                <select id="tipo" name="tipo" class="styled" multiple="multiple" style="width:285px">
                    <option value="1">Apartamento </option>
                    <option value="1">Casa</option>
                </select>
            </label>
            <label for="bairros_proximos">
                Incluir bairros próximos
                <input type="radio" id="bairros_proximos" name="bairro_proximo" value="s" />Sim
                <input type="radio"  name="bairro_proximo" value="n" />Não
            </label>
            <div class="clear"></div>
            <div class="bg_prec">
                <p>QUARTOS:</p>
                <table>
                    <tr>
                        <td>
                            <label for="de_quarto">De:<input type="text"  name="de_quarto" size="10" id="de_quarto"/></label>
                            <label for="ate_quarto">Até: <input type="text"  name="ate_quarto" size="10" id="ate_quarto"/></label>
                        </td>
                    </tr>
                </table>
                <p> VALOR:</p>
                <table>
                    <tr>
                        <td >
                            <label for="de_valor">De:<input type="text"  name="de" size="10" id="de_valor"/></label>
                            <label for="ate_valor">Até: <input type="text"  name="ate" size="10" id="ate_valor"/></label>
                        </td>
                    </tr>
                </table>
            </div>
            <input type="submit"   value="ENVIAR" class="right"/>
        </form>
    </div>  
    <div class="redes">
        <div class="facebook">
            <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.seculosimoveis.com.br&amp;send=false&amp;layout=button_count&amp;width=0&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=trebuchet+ms&amp;height=21&amp;appId=387671547914839" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;width:100px" allowTransparency="true"></iframe>
        </div>
        <div class="twitter">
            <a href="https://twitter.com/share" class="twitter-share-button" data-text="Confira este site" data-lang="pt" data-hashtags="imoveis">Tweetar</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
        <div class="plus">
            <g:plusone></g:plusone>

            <script type="text/javascript">
                window.___gcfg = {
                    lang: 'en-US'
                };

                (function() {
                    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                    po.src = 'https://apis.google.com/js/plusone.js';
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                })();
            </script>
        </div>
    </div>
    <div class="corretor_online">
        <a href="#"><img src="css/i/corretor_online.jpg" alt="Corretor online"/></a>
    </div>
</div>
