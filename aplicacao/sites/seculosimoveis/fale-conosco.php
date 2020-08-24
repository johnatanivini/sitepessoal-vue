<?php include('includes/inc_header.php'); ?>
<?php include('includes/inc_busca.php'); ?>
<div class="paginas">
    <div class="breadcumb">
        <p>Voce está em: <a href="#">Fale Conosco</a></p>
    </div>
    <h1>Fale Conosco<span class="right" style="width:60px"><a href="#" id="diminui">A- </a><a id="aumenta" href="#">A+ </a></span></h1>
    <p>Aguardamos seu contato através do formulário abaixo:</p>
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
    <h1 style="margin-top: 20px">Nossa Localização:</h1>
    <iframe style="border:solid 1px #D2E0E6" width="680" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.br/maps?hl=pt-BR&amp;q=Rua+Jos%C3%A9+Rodrigues+Pereira+1138+-+Bairro+Buritis&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Jos%C3%A9+Rodrigues+Pereira,+1138+-+Buritis,+Belo+Horizonte+-+Minas+Gerais,+30455-640&amp;gl=br&amp;sqi=2&amp;z=15&amp;vpsrc=0&amp;iwloc=A&amp;ll=-19.969449,-43.963345&amp;output=embed"></iframe><br /><br /><small><a href="http://maps.google.com.br/maps?hl=pt-BR&amp;q=Rua+Jos%C3%A9+Rodrigues+Pereira+1138+-+Bairro+Buritis&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Jos%C3%A9+Rodrigues+Pereira,+1138+-+Buritis,+Belo+Horizonte+-+Minas+Gerais,+30455-640&amp;gl=br&amp;sqi=2&amp;z=15&amp;vpsrc=0&amp;iwloc=A&amp;ll=-19.969449,-43.963345&amp;source=embed" class="leiaMais">Exibir mapa ampliado</a></small>


    <?php include('includes/inc_atendimento.php'); ?>
</div> 
<?php include('includes/inc_footer.php') ?>
 