  <!-- Msg editado com sucesso -->
  <div class="msg"><?=Sessao::mensagem('livro')?></div>

  <!-- Fim -->
  <!-- formularios  editar livro -->
  <form name="cadastrar" action="<?=URL?>/posts/editar/<?= $dados['id_livro']?>" method="post"
      enctype="multipart/form-data">

      <fieldset class="fieldset_criar_conta">
          <legend>Editar livro:</legend>
          <div class="div_capa_livro"
              style="height: 70px; width: 70px; margin-bottom: 10px; margin: 10px; padding-bottom: 15px;"><img
                  src="<?=URL?>/public/uploads/capa/<?= $dados['url_capa']?>" alt=""></div>
          <div style="  margin-top: 5px;">
              <div>
                  <label for="">Titulo do livro:</label>
                  <input class="input_increver-se" type="text" name="titulo" id="" placeholder="Titulo do livro:"
                      value=" <?=$dados['titulo']?>">
                  <small class="erro"> <?= $dados['titulo_erro']?></small>
              </div>
              <div>
                  <label for="" style="margin-top: 3px;">Preço do livro:</label>
                  <input class="input_increver-se" type="text" name="preco" id="" placeholder="Preço do livro:"
                      value=" <?= $dados['preco']?>">
                  <small class="erro"> <?= $dados['preco_erro']?></small>
              </div>
              <div style="  margin-top: 2px; margin-left: 2px;">
                  <label for="" style="margin-top: 3px; color:#ababab;">Autor registado :</label>
                  <input class="input_increver-se" type="text" name="autorregistado" id=""
                      value="<?= $dados['AutorRegistado']?>">
                  <label for="" style="margin-top: 3px; color:#ababab;">Categoria registado :</label>
                  <input class="input_increver-se" type="text" name="categoriaregistada" id=""
                      value="<?= $dados['CategoriaRegistada']?>">
              </div>
              <div style="  margin-top: 2px; margin-left: 2px;">
                  <label for="">Autor:</label>
                  <select name="autor" class="input_increver-se">
                      <?php foreach($dados['autores'] as $autor): ?>
                      <option value="<?= $autor->id_autor ?>"><?= $autor->nome ?></option>
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
                  <input class="input_increver-se" type="file" name="capa" id="" placeholder="Upload capa:" value="">
                  <small class="erro"> <?= $dados['capa_erro']?></small>
              </div>
              <div>
                  <label for="">Carregar livro:</label>
                  <input class="input_increver-se" type="file" name="pdf" id="" placeholder="Nome do livro:">
                  <small class="erro"> <?= $dados['pdf_erro']?></small>
              </div>
          </div>

          <div style="margin: 10px;"><button class="btn_increver-se btn_entrar" type="submit"
                  style="display: block; margin-bottom: 5px;">Salvar</button>
              <button class="btn_esquecer btn_del_livro" type="submit">Eliminar livro</button>
          </div>

      </fieldset>
  </form>
  <!-- Fim -->