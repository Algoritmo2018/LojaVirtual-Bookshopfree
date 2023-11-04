

  <!-- formularios criar conta-->
<form name="cadastrar" action="<?=URL?>/usuarios/cadastrar" method="post">
<fieldset class="fieldset_criar_conta">
  <legend>Criar conta</legend>
  <span>*Por favor insere o teu e-mail para criar a sua conta.</span>
  <div>
  <div>  
  <input class="input_increver-se" type="text" name="email" id="" placeholder="E-mail:">
    <small class="erro"> <?= $dados['email_erro']?></small> 
    </div>
    <div style="margin-left: 7px; display: flex; align-items: center; color: rgb(202, 202, 202);" ><span style="margin-right: 2px;">Titulo:</span><input type="radio" name="titulo" id="" value="Sr.">Sr. <input type="radio" style="margin-left: 2px;" name="titulo" id="" value="Sra.">Sra.  <small class="erro"> <?= $dados['titulo_erro']?></small> 
  </div>
    <div>
    <label for="" style="margin-top: 3px;">Nome:</label>
    <input class="input_increver-se" type="text" name="nome" id="" placeholder="Nome:">
    <small class="erro"> <?= $dados['nome_erro']?></small> 
    </div>
    <div>
    <label for="" style="margin-top: 3px;">Apelido:</label>
    <input class="input_increver-se" type="text" name="apelido" id="" placeholder="Apelido:">
    <small class="erro"> <?= $dados['apelido_erro']?></small> 
  </div>
  <div>
    <label for="" style="margin-top: 3px;">Data de nascimento:</label>
    <input class="input_increver-se" type="date" name="data_nascimento" id="">
    <small class="erro"> <?= $dados['data_nascimento_erro']?></small> 
  </div>

  <div>
  <label for="" style="margin-top: 3px;">Senha:</label>
    <input class="input_increver-se" type="text" name="senha" id="" placeholder="Senha:">
    <small class="erro"> <?= $dados['senha_erro']?></small> 
  </div>
  
  
  <div> 
    <label for="" style="margin-top: 3px;">Confirmar senha:</label>
    <input class="input_increver-se" type="text" name="confirmar_senha" id="" placeholder="Confirmar senha:">  <small class="erro"> <?= $dados['confirmar_senha_erro']?></small> 
  </div>
   <button class="btn_increver-se ml" type="submit">Criar</button>
  </div>
</fieldset>
</form>
<!-- Fim -->