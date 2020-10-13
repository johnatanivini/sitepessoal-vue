
                                <h1 class="title bgverde">Seja bem vindo ao Papika.com.br</h1>
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
                                </article>
                                <div class="clearfix"></div>
                                <article class="info-form bgverde">
                                    <p>
                                        Para obter informações exclusivas e ter vantagens preencha o formulário abaixo:
                                    </p>
                                </article>
                                <section class="form">
                                    
                                    <form action="index_submit" method="post" accept-charset="utf-8" name="form-cadastra" id="form-cadastra">
                                        <label for="">Nome:*</label>
                                        <input type="text" name="nome" id="nome" placeholder="Seu nome" class="validate[required,onlyLetterSp,maxSize[20]]" maxlength="20"/>
                                        <label for="">Email:*</label>
                                        <input type="email" name="email" id="email" placeholder="Seu email" class="validate[required,onlyLetterSp,custom[email]]"/>
                                        <div class="cinperc">
                                            <label for="">Nome do bebê:*</label>
                                            <input type="text" name="nome_bebe" id="nome_bebe" placeholder="Nome do bebê" class="validate[required,onlyLetterSp,maxSize[30]]" maxlength="30"/>
                                        </div>
                                        <div class="cinperc" style="margin-right: 0">
                                            <label for="">Data de nasc.:*</label>
                                            <input type="text" name="data_nasc" id="data_nasc" placeholder="Data de nascimento" class="validate[required,custom[date]] mask-data" />
                                        </div>
                                        <div class="clear"></div>
                                        <div class="cinperc" >
                                            <label for="">Estado:*</label>
                                            <select name="estado" id="estado">
                                                <option value="AC">Acre</option>
                                                <option value="AL">Alagoas</option>
                                                <option value="AM">Amazonas</option>
                                                <option value="AP">Amapá</option>
                                                <option value="BA">Bahia</option>
                                                <option value="CE">Ceará</option>
                                                <option value="DF">Distrito Federal</option>
                                                <option value="ES">Espirito Santo</option>
                                                <option value="GO">Goiás</option>
                                                <option value="MA">Maranhão</option>
                                                <option value="MG" selected>Minas Gerais</option>
                                                <option value="MS">Mato Grosso do Sul</option>
                                                <option value="MT">Mato Grosso</option>
                                                <option value="PA">Pará</option>
                                                <option value="PB">Paraíba</option>
                                                <option value="PE">Pernambuco</option>
                                                <option value="PI">Piauí</option>
                                                <option value="PR">Paraná</option>
                                                <option value="RJ">Rio de Janeiro</option>
                                                <option value="RN">Rio Grande do Norte</option>
                                                <option value="RO">Rondônia</option>
                                                <option value="RR">Roraima</option>
                                                <option value="RS">Rio Grande do Sul</option>
                                                <option value="SC">Santa Catarina</option>
                                                <option value="SE">Sergipe</option>
                                                <option value="SP">São Paulo</option>
                                                <option value="TO">Tocantins</option>
                                            </select>

                                        </div>

                                        <div class="cinperc" style="margin-right: 0">
                                            <label for="">Cidade:*</label>
                                            <input type="text" name="cidade" id="cidade" placeholder="Sua cidade"  class="validate[required,onlyLettersSp,maxSize[30]]" maxlength="30"/>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="form-facebook">
                                            <div class="fb-like" data-send="false" data-layout="button_count" data-width="450" data-href="https://www.facebook.com/pages/Papika/545145225509025" data-show-faces="false" data-font="trebuchet ms"></div>
                                        </div>
                                        
                                        <input type="submit" value="cadastrar" />
                                        <button class="btn" id="indique" onclick="javascript:location.href='home/indique'; return false;">Indique para um amigo</button>
                     
                                        <div class="clear"></div>
                                        <div id="result"></div>
                                    </form>
                                    <div class="clear"></div>
                                </section>
                            </section>