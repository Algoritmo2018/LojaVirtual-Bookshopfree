 
 
 

  <!-- formularios editar conta-->
  <form name="editar" action="<?=URL?>/usuarios/definir_nova_senha/<?=  $_SESSION['usuario_id_temp']; ?>" method="post">
<fieldset class="fieldset_criar_conta">
  <legend>Definir Nova senha:</legend>
   
  <div>
  <div style="display:none;">  
  <label for="" style="margin-top: 3px;">E-mail:</label>
  <input class="input_increver-se" type="text" name="email" id="" placeholder="E-mail:" value="<?= $dados['email']?>">
    <small class="erro"> <?= $dados['email_erro']?></small> 
    </div>
    <div style="margin-left: 7px; display: none; align-items: center; color: rgb(202, 202, 202);" ><span style="margin-right: 2px;">Titulo:</span><input type="radio" name="titulo" id="" value="Sr."  <?= $dados['titulo'] == 
    "Sr." ? 'checked' : '' ?>>Sr. <input type="radio" style="margin-left: 2px;" name="titulo" id="" value="Sra." <?= $dados['titulo'] == 
    "Sra." ? 'checked' : '' ?>>Sra.  <small class="erro"> <?= $dados['titulo_erro']?></small> 
  </div>
    <div style="display:none;">
    <label for="" style="margin-top: 3px;">Nome:</label>
    <input class="input_increver-se" type="text" name="nome" id="" placeholder="Nome:" value="<?= $dados['nome']?>">
    <small class="erro"> <?= $dados['nome_erro']?></small> 
    </div>
    <div style="display:none;">
    <label for="" style="margin-top: 3px;">Apelido:</label>
    <input class="input_increver-se" type="text" name="apelido" id="" placeholder="Apelido:" value="<?= $dados['apelido']?>">
    <small class="erro"> <?= $dados['apelido_erro']?></small> 
  </div>
  <div style="display:none;">
    <label for="" style="margin-top: 3px;">Data de nascimento:</label>
    <input class="input_increver-se" type="date" name="data_nascimento" id="" value="<?= $dados['data_nascimento']?>">
    <small class="erro"> <?= $dados['data_nascimento_erro']?></small> 
  </div>

  <div>
  <label for="" style="margin-top: 3px;">Senha:</label>
    <input class="input_increver-se" type="text" name="senha" id="" placeholder="Senha:" value="<?= $dados['senha']?>">
    <small class="erro"> <?= $dados['senha_erro']?></small> 
  </div>
  
  
  <div> 
    <label for="" style="margin-top: 3px;">Confirmar senha:</label>
    <input class="input_increver-se" type="text" name="confirmar_senha" id="" placeholder="Confirmar senha:" value="<?= $dados['confirmar_senha']?>">  <small class="erro"> <?= $dados['confirmar_senha_erro']?></small> 
  </div>
   <button class="btn_increver-se ml" type="submit">Definir</button>
    </form>
    
  </div>
</fieldset>

<!-- Fim -->

