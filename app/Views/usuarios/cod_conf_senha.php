 
  <!-- formularios  solicitar nova senha -->
 <form name="solicitar_new_senha" action="<?=URL?>/usuarios/cod_conf_senha" method="POST">

<fieldset class="fieldset_criar_conta" >
    <legend>Solicitar nova senha:</legend>
    <div style="  margin-top: 5px;">
    <div>
      <label for="">Codigo de confirmação:</label>
      <input class="input_increver-se" type="text" name="cod_confirmacao" id="cod_confirmacao" placeholder="Digite o seu codigo de confirmação:" value="<?=$dados['cod_confirmacao']?>">
    <small class="erro"> <?= $dados['cod_confirmacao_erro']?></small> 
    </div>
      <button class="btn_increver-se btn_entrar ml" type="submit">Solicitar</button> 
    
      </div> 
  </fieldset>
  <!-- Fim -->    </form>

  