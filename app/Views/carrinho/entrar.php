 <!--inicio Links carrinho -->
 <section class="links_encomenda"><div><a href="<?=URL?>/carrinho/resumo"><button>RESUMO</button></a></div><div><a href="<?=URL?>/carrinho/entrar"><button>ENTRAR</button></a></div><div><a href="<?=URL?>/carrinho/endereco"><button>ENDEREÇO</button></a></div><div><a href="<?=URL?>/carrinho/envio"><button>ENVIO</button></a></div><div><a href="<?=URL?>/carrinho/pagamento"><button>PAGAMENTO</button></a></div></section>
 <!-- fim Links carrinho-->


<!-- formularios criar -->
<fieldset class="fieldset_criar_conta">
  <legend>Criar conta</legend>
  <span>*Por favor insere o teu e-mail para criar a conta.</span>
  <div>
    <input class="input_increver-se" type="text" name="" id="" placeholder="E-mail"> <button class="btn_increver-se" type="submit">Criar</button>
  </div>
</fieldset>
<!-- Fim -->

<!-- formularios  registar-se -->
<fieldset class="fieldset_criar_conta">
  <legend>Já estás registado?</legend>
  <div style="  margin-top: 5px;">
    <label for="">E-mail:</label>
    <input class="input_increver-se" type="text" name="" id="" placeholder="E-mail">
    <label for="" style="margin-top: 3px;">Palavra-passe:</label>
    <input class="input_increver-se" type="text" name="" id="" placeholder="Palavra-passe">
     <button class="btn_increver-se btn_entrar" type="submit">Entrar</button> 
     <button class="btn_esquecer"    type="submit">Esqueceste da tua palavra-passe</button>
    </div>

    <div style="  margin-top: 5px; margin-left: 2px;">
      <span>*Tambem podes entrar com a tua conta de facebook,</span>
      <button class="btn_esquecer"   type="submit">Entrar com facebok</button>
      
    </div>
  
</fieldset>
<!-- Fim -->


<!-- formulario  checkout -->
<fieldset class="fieldset_criar_conta">
  <legend>Checkout Instantâneo</legend>
  <div style="  margin-top: 5px;">
    <label for="">E-mail:</label>
    <input class="input_increver-se" type="text" name="" id="" placeholder="E-mail">
    </div>
    <div style="margin-left: 2px; display: flex; align-items: center; color: rgb(202, 202, 202);" ><span style="margin-right: 2px;">Titulo:</span><input type="radio" name="titulo" id="">Sr. <input type="radio" style="margin-left: 2px;" name="titulo" id="">Sra.</div>
<div>
  <label for="">Nome:</label>
  <input class="input_increver-se" type="text" name="" id="" placeholder="Nome Proprio">
    </div>
    <div>
      <label for="">Apelido:</label>
       <input class="input_increver-se" type="text" name="" id="" placeholder="Apelido">
        </div>
    <div >
      <label for="">Data de nascimento:</label>
    <input class="input_increver-se" type="date" name="" id="" >
    </div>
    <div style="margin-left: 5px; display: flex; align-items: center;"><input class=" " type="checkbox" name="" id="" placeholder="E-mail"><span>Subscreve a nossa newsletter</span>
    </div>
  
</fieldset>
<!-- Fim --> 

<!-- formulario  Endereço de entrega -->
<fieldset class="fieldset_criar_conta">
  <legend>Endereço de Entrega</legend>
  <div style="  margin-top: 5px;">
    <label for="">Endereço:</label>
    <input class="input_increver-se" type="text" name="" id="" placeholder="Endereço:">
    </div>
    <div style="  margin-top: 2px;">
      <label for="">Empresa:</label>
      <input class="input_increver-se" type="text" name="" id="" placeholder="Empresa:">
      </div>
      <div style="  margin-top: 2px; ">
        <label for="">País:</label>
        <select name="f_cor" class="input_increver-se"> 
          <option value="ip3d7">Angola</option>
          <option value="t98">Zambia</option> 
         </select>
        </div>
        <div style="  margin-top: 2px; ">
          <label for="">Cidade:</label>
          <input class="input_increver-se" type="text" name="" id="" placeholder="Cidade:">
          </div>
          <div style="  margin-top: 2px; ">
            <label for="">Provincia:</label>
            <select name="f_cor" class="input_increver-se"> 
              <option value="t98">Bie</option>  <option value="ip3d7">Luanda</option> 
             </select>
            </div>
      <div style="  margin-top: 2px;">
        <label for="">Telemovel:</label>
        <input class="input_increver-se" type="text" name="" id="" placeholder="Telemovel:">
        </div>
        <div style="margin-left: 5px; display: flex; align-items: center;"><input class=" " type="checkbox" name="" id="" placeholder="E-mail"><span>Por Favor usa outro endereço para a fatura</span>
        </div>
</fieldset>
<!-- Fim --> 

<section class="section_btns_encomenda">
    <div><button class="btn_increver-se">Seguinte</button></div> 
  </section>