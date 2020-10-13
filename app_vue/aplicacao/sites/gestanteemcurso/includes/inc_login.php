<h2><img src="css/i/link_menu.jpg" width="4" height="8" alt=""  class="seta"/>Sala de Aula</h2>
<form action="#" name="form_login" id="form_login" method="post" class="form">
    <label for="login">Login</label>
    <input type="text" id="login" name="login" value="" size="210" />
    <label for="senha">Senha</label>
    <input type="password" id="senha" name="senha" value="***" size="210" />
    <label class="small-text"><a href="">Esqueci minha senha</a></label>
    <label for="aluno">Aluno
        <input type="radio" id="aluno"  name="tipo" value="Aluno"  /></label>
    <label for="professor">Professor
        <input type="radio" id="professor" name="tipo" value="Professor" /></label>
    <br />
    <h2><img src="css/i/link_menu.jpg" width="4" height="8" alt="" class="seta"/> Escolha seu curso</h2>
       <select name="seu_curso" style="width:178px">
        <option value="1">Amamentação</option>
        <option value="2">Planejamento Familiar</option>
    </select>
    <br />
    <label>
        <input type="submit" id="submit" name="enviar" value="logar" />
    </label>
    <div class="clear"></div>
</form>