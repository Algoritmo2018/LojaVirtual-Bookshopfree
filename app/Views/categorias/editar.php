 
   <!-- formulario  Editar categoria -->
   <form name="editar" action="<?=URL?>/categorias/editar/<?=$dados['id']?>" method="post">
<fieldset class="fieldset_criar_conta" >
    <legend>Editar categoria:</legend>
    <div style="  margin-top: 5px;">
    <div>  
    <label for="">Nome da categoria:</label>
      <input class="input_increver-se" type="text" name="nome" id="nome" placeholder="Categoria:" Value="<?=$dados['nome']?>">
      <small class="erro"> <?= $dados['nome_erro']?></small> 
    </div>
      <button class="btn_increver-se btn_entrar ml" type="submit">Salvar</button>  
      </div> 
  </fieldset>
  <!-- Fim -->
  </form>