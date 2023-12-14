   <!-- Msg editado com sucesso -->
<div class="msg"><?=Sessao::mensagem('livro')?></div>
  
  <!-- Fim -->
 
 <!-- formularios  cadastrar livro -->
 <form name="cadastrar" action="<?=URL?>/posts/cadastrar" method="post" enctype="multipart/form-data">

<fieldset class="fieldset_criar_conta" >
    <legend>Cadastrar livro:</legend>
    <div style="  margin-top: 5px;">
    <div>
      <label for="">Titulo do livro:</label>
      <input class="input_increver-se" type="text" name="titulo" id="" placeholder="Titulo do livro:" value="<?=$dados['titulo']?>">
      <small class="erro"> <?= $dados['titulo_erro']?></small> 
    </div>
    <div>
      <label for="" style="margin-top: 3px;">Preço do livro:</label>
      <input class="input_increver-se" type="text" name="preco" id="" placeholder="Preço do livro:" value="<?=$dados['preco']?>">
      <small class="erro"> <?= $dados['preco_erro']?></small> 
    </div>
      <div style="  margin-top: 2px; margin-left: 2px;">
        <label for="">Autor:</label>
        <select name="autor" class="input_increver-se">
        <?php foreach($dados['autores'] as $autor): ?>  
            <option  value="<?= $autor->id_autor ?>"><?= $autor->nome ?></option> 
            <?php endforeach ?>
      </select>
        </div>
        <div style="  margin-top: 2px;  margin-left: 2px;">
          <label for="">Categoria:</label>
          <select name="categoria" class="input_increver-se"> 
          <?php foreach($dados['categorias'] as $categoria): ?>    
              <option value="<?= $categoria->id_categoria ?>"><?= $categoria->nome ?></option> 
              <?php endforeach ?>
        </select>
          </div>
          <div>
          <label for="">Carregar capa do livro:</label>
      <input class="input_increver-se" type="file" name="capa" id="" value="<?=$dados['capa']?>">
      <small class="erro"> <?= $dados['capa_erro']?></small> 
    </div>
    <div>
      <label for="">Carregar livro:</label>
      <input class="input_increver-se" type="file" name="pdf" id=""  value="<?=$dados['pdf']?>">
      <small class="erro"> <?= $dados['pdf_erro']?></small> 
    </div>
      <button class="btn_increver-se btn_entrar ml" type="submit">Salvar</button> 
       
      </div>
  
     
    
  </fieldset>
  </form>
  <!-- Fim -->

 
 