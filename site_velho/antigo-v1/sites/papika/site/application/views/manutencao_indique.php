
                                <!--<h1 class="title bgverde">Seja bem vindo ao Papika.com.br</h1>
                                <div class="clearfix">
                                    &nbsp;
                                </div>
                                <article class="eight bgazul columns">
                                    <p>
                                        Todos nós sabemos as dificuldades que é sair de casa e enfrentar filas em supermercados quando se tem um bebê. Estamos chegando para resolver esse problema!
                                    </p>
                                </article>
                                <article class="eight bgazul columns">
                                    <p>
                                        A Papika é um clube de assinatura que leva até a sua casa mensalmente tudo que você precisa para a higiene e alimentação do seu bebê com descontos que podem chegar até 30%.
                                    </p>
                                </article>-->
                                <article class="info-form bgverde">
                                    <p>
                                        Indique para seus melhores amigos!
                                    </p>
                                </article>
                                <section class="form">
                                    
                                    <form action="index_submit" method="post" accept-charset="utf-8" name="form-indica" id="form-indica">
                                        <label for="">Seu Nome:*</label>
                                        <input type="text" name="nome" id="nome" placeholder="Seu nome" class="validate[required,onlyLetterSp,maxSize[20]]" maxlength="20"/>
                                        <label for="">Seu Email:*</label>
                                        <input type="email" name="email" id="email" placeholder="Seu email" class="validate[required,onlyLetterSp,custom[email]]"/>
                                        <label for="">Nome do amigo:*</label>
                                        <input type="text" name="nome" id="nome_amigo" placeholder="Seu nome" class="validate[required,onlyLetterSp,maxSize[20]]" maxlength="20"/>
                                        <label for="">Email do amigo :*</label>
                                        <input type="email" name="email" id="email_amigo" placeholder="Seu email" class="validate[required,onlyLetterSp,custom[email]]"/>
                                        
                                        <div class="clear"></div>
                                        <div class="form-facebook">
                                            <div class="fb-like" data-send="false" data-layout="button_count" data-width="450" data-href="http://www.facebook.com/papikasite" data-show-faces="false" data-font="trebuchet ms"></div>
                                        </div>
                                        
                                        <input type="submit" value="Indicar" />
                                        <button class="btn" id="indique" onclick="javascript:location.href='home'; return false;">&laquo; Voltar</button>
                     
                                        <div class="clear"></div>
                                        <div id="result"></div>
                                        <div class="show_indique" style="display: none;">
                                           <div id="indica_facebook" style="margin-top:0; float:left;">
                                            <div id="fb-root"></div>
                                                        <script>(function(d, s, id) {
                                                          var js, fjs = d.getElementsByTagName(s)[0];
                                                          if (d.getElementById(id)) return;
                                                          js = d.createElement(s); js.id = id;
                                                          js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=355292604579698";
                                                          fjs.parentNode.insertBefore(js, fjs);
                                                        }(document, 'script', 'facebook-jssdk'));</script>
                                            <div class="fb-send" data-href="http://www.papika.com.br"></div>
                                            </div>
                                            <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.papika.com.br" data-text="Papika" data-via="papika" data-lang="pt" data-count="none" data-hashtags="papika" data-dnt="true">Tweetar</a>
                                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                                        </div>
                                    </form>
                                    <div class="clear"></div>
                                </section>
                            </section>