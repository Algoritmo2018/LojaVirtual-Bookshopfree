<div class="msg"><?=Sessao::mensagem('categoria')?></div>
  <!-- formularios  cadastrar categoria -->
 <form name="cadastrar" action="<?=URL?>/categorias/cadastrar" method="post">

<fieldset class="fieldset_criar_conta" >
    <legend>Cadastrar categoria:</legend>
    <div style="  margin-top: 5px;">
    <div>
      <label for="">Nome da categoria:</label>
      <input class="input_increver-se" type="text" name="nome" id="nome" placeholder="Categoria:" value="<?=$dados['nome']?>">
    <small class="erro"> <?= $dados['nome_erro']?></small> 
    </div>
      <button class="btn_increver-se btn_entrar ml" type="submit">Salvar</button> 
    
      </div> 
  </fieldset>
  <!-- Fim -->    </form>

  