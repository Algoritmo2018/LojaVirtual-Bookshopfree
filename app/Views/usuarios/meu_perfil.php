<!--inicio Links do usuario -->
<section class="links_encomenda">
     <div><a href="<?= URL ?>/usuarios/livros_favoritos">Favoritos</a>
     </div>
     <div><a href="<?= URL ?>/usuarios/meu_perfil">Perfil</a>
     </div>
     <div><a href="<?= URL ?>/usuarios/meus_enderecos">Endereços</a>
     </div>
     <div><a href="<?= URL ?>/usuarios/historico_pedidos">Hist. pedidos</a>
    </div>
 </section>
 <!-- fim Links do usuario-->

 <!-- formulario  informaçõ pessoal -->
<fieldset class="fieldset_criar_conta"  >
  <legend>A tua informação pessoal</legend>

    <div style="margin-left: 2px; display: flex; align-items: center; color: rgb(202, 202, 202);" ><span style="margin-right: 2px;">Titulo:</span><input type="radio" name="titulo" id="">Sr. <input type="radio" style="margin-left: 2px;" name="titulo" id="">Sra.</div>
<div>
  <label for="">Nome:</label>
  <input class="input_increver-se" type="text" name="" id="" placeholder="Nome Proprio">
    </div>
    <div>
      <label for="">Apelido:</label>
       <input class="input_increver-se" type="text" name="" id="" placeholder="Apelido">
        </div>
        <div style="  margin-top: 5px;">
          <label for="">E-mail:</label>
          <input class="input_increver-se" type="text" name="" id="" placeholder="E-mail">
          </div>
    <div >
      <label for="">Data de nascimento:</label>
    <input class="input_increver-se" type="date" name="" id="" >
    </div>
 
    <div style="  margin-top: 5px;">
      <label for="">Palavra-passe atual:</label>
      <input class="input_increver-se" type="text" name="" id="" placeholder="Palavra-passe atual:">
      </div>
      <div style="  margin-top: 5px;">
        <label for="">Nova palavra-passe:</label>
        <input class="input_increver-se" type="text" name="" id="" placeholder="Nova palavra-passe:">
        </div>
        <div style="  margin-top: 5px;">
          <label for="">Confirmação da palavra-passe:</label>
          <input class="input_increver-se" type="text" name="" id="" placeholder="Confirmação da palavra-passe:">
          </div>
          <button class="btn_esquecer" style="font-size: 20px; display: block; margin-left:10px;"   type="submit">Guardar</button>
          <button class="btn_esquecer" style=" margin-left:10px;    color: rgb(199, 16, 16);"  type="submit">Eliminar conta</button>
     
</fieldset>
<!-- Fim --> 