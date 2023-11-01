<div class="msg"><?=Sessao::mensagem('autor')?></div>
  <!-- formularios  cadastrar autor -->
 <form name="cadastrar" action="<?=URL?>/autores/cadastrar" method="post">

<fieldset class="fieldset_criar_conta" >
    <legend>Cadastrar autor:</legend>
    <div style="  margin-top: 5px;">
    <div>
      <label for="">Nome do autor:</label>
      <input class="input_increver-se" type="text" name="nome" id="nome" placeholder="Autor:" value="<?=$dados['nome']?>">
    <small class="erro"> <?= $dados['nome_erro']?></small> 
    </div>
      <button class="btn_increver-se btn_entrar ml" type="submit">Salvar</button> 
    
      </div> 
  </fieldset>
  <!-- Fim -->    </form>

  