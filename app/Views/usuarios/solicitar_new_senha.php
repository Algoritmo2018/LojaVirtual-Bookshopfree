 
  <!-- formularios  solicitar nova senha -->
 <form name="solicitar_new_senha" action="<?=URL?>/usuarios/solicitar_new_senha" method="POST">

<fieldset class="fieldset_criar_conta" >
    <legend>Solicitar nova senha:</legend>
    <div style="  margin-top: 5px;">
    <div>
      <label for="">Email:</label>
      <input class="input_increver-se" type="text" name="email" id="email" placeholder="Digite o seu email:" value="<?=$dados['email']?>">
    <small class="erro"> <?= $dados['email_erro']?></small> 
    </div>
      <button class="btn_increver-se btn_entrar ml" type="submit">Solicitar</button> 
    
      </div> 
  </fieldset>
  <!-- Fim -->    </form>

  