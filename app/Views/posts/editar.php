 
 <!-- formularios  editar livro -->
<fieldset class="fieldset_criar_conta" >
    <legend>Editar livro:</legend>
    <div class="div_capa_livro" style="height: 70px; width: 70px; margin-bottom: 10px; margin: 10px; padding-bottom: 15px;"><img  src="<?=URL?>/public/img/capa_do_livro/IronMan.png"  alt=""></div>
    <div style="  margin-top: 5px;">
      <label for="">Nome do livro:</label>
      <input class="input_increver-se" type="text" name="" id="" placeholder="Nome do livro:">
      <label for="" style="margin-top: 3px;">Preço do livro:</label>
      <input class="input_increver-se" type="text" name="" id="" placeholder="Preço do livro:">
      <div style="  margin-top: 2px; margin-left: 2px;">
        <label for="">Autor:</label>
        <select name="f_cor" class="input_increver-se"> 
            <option value="ip3d7">Augusto Curry</option> 
        <option value="t98">Napolian Hill</option> 
      </select>
        </div>
        <div style="  margin-top: 2px;  margin-left: 2px;">
          <label for="">Categoria:</label>
          <select name="f_cor" class="input_increver-se"> 
              <option value="ip3d7">Aventura</option> 
          <option value="t98">Conto</option> 
        </select>
          </div>

          <label for="">Carregar capa do livro:</label>
      <input class="input_increver-se" type="file" name="" id="" placeholder="Upload capa:">
      <label for="">Carregar livro:</label>
      <input class="input_increver-se" type="file" name="" id="" placeholder="Nome do livro:">
      
      </div>
  
     <div style="margin: 10px;"><button class="btn_increver-se btn_entrar"  type="submit" style="display: block; margin-bottom: 5px;">Salvar</button> 
      <button class="btn_esquecer btn_del_livro"     type="submit">Eliminar livro</button></div>
    
  </fieldset>
  <!-- Fim -->

  