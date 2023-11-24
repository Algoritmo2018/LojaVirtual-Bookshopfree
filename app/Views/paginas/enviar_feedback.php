<!-- Msg editado com sucesso -->
<div class="msg"><?=Sessao::mensagem('livro')?></div>
  
  <!-- Fim -->
 <!-- formulario  Enviar feedback -->
 
 <form name="editar" action="<?=URL?>/paginas/enviar_feedback" method="post">
 <fieldset class="fieldset_criar_conta" >
    <legend>Enviar feedback :</legend>
    <div style="  margin-top: 5px; margin-left: 10px;">
       
    <label for="" style="margin-left: 0px;">*Para casos de duvidas, sugestão ou elogios:</label>
       
      <textarea class="textarea_responsiva" style="border-radius: 10px; padding-left: 5px;" name="conteudo" id=""   placeholder="Escreva:"><?= $dados['conteudo']?></textarea>
      <small class="erro"> *<?= $dados['conteudo_erro']?></small> 
    </div>
      <button class="btn_increver-se btn_entrar ml" style="display: block; margin-top: 3px;" type="submit">Enviar</button>  
      </div> 
  </fieldset>
  </form>
  <!-- Fim -->