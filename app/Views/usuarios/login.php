   <!-- Msg de usuario cadastrado com sucesso -->
   <div class="msg"><?=Sessao::mensagem('usuario')?></div>
     <!-- Msg usuario ou senha invalida com sucesso -->
     <div class="msg"><?=Sessao::mensagem('erro1')?></div>

   <form name="login" action="<?=URL?>/usuarios/login" method="post">
 <!-- formularios  registar-se -->
<fieldset class="fieldset_criar_conta">
  <legend>Já estás registado?</legend>
  <div style="margin-top: 5px;">
  <div>  
  <label ffor="email" >E-mail:</label>
    <input class="input_increver-se" type="text" name="email" id="email" placeholder="E-mail" value="<?=$dados['email']?>" >
    <small class="erro"><?= $dados['email_erro']?></small> 
    </div>
    <div>
    <label for="senha" style="margin-top: 3px;">Senha:</label>
    <input class="input_increver-se" type="text" name="senha" id="senha" placeholder="Senha" value="<?=$dados['senha']?>">
    <small class="erro"> <?= $dados['senha_erro']?></small> 
    </div> 
    <button class="btn_increver-se btn_entrar ml" type="submit">Entrar</button> 
     <a href="<?=URL?>/usuarios/solicitar_new_senha" class="btn_esquecer"  >Esqueceste da tua palavra-passe</a>
    </div>

     
  
</fieldset>
  </form>
<!-- Fim -->