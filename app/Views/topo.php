 <section class="section2">
     <div class="div_logo">
         <img class="logotipo" src="<?=URL?>/public/img/logotipo/log.png" alt="" />
     </div>
     <div class="s2_itens2">
         <?php if(isset($_SESSION['usuario_id'])):?>
         <div>
             <a href="<?=URL?>/paginas/home"><i class="fa-solid fa-house"></i></a>
             <p>HOME</p>
         </div>
         <div>

             <button id="btn_filtro" onclick="AbrirFecharFiltro()"><i id="icone_filtro"
                     class="fa-solid fa-greater-than"></i> </button>
             <p>Filtro</p>

         </div>
         <div>

         <a href="<?=URL?>/paginas/enviar_feedback"><i class="fa-solid fa-message"></i></a>
<p>Feedback</p>

</div>
         <?php endif;?>
         <div>
             <a href="<?=URL?>/paginas/sobre_nos"><i class="fa-solid fa-exclamation"></i></a>
             <P>SOBRE NÓS</P>
         </div>
     </div>
     <div class="s2_itens_right">
         <?php if(isset($_SESSION['usuario_id'])):?>
         <div class="div_carrinho"><a href="<?=URL?>/usuarios/livros_favoritos"><i class="fa-solid fa-user"></i></a>
         </div>
         <div class="div_carrinho"><a href="<?=URL?>/carrinhos/resumo"><i class="fa-solid fa-cart-shopping"></i></a>
         </div>
         <div class="div_carrinho">
             <button onclick="AbrirMenuPesquisar()"><i class="fa-solid fa-search"></i></button>
         </div>
         <div class="div_carrinho"><button onclick="AbrirMsgConf()"><i class="fa-solid fa-power-off"></i></button>
             <?php else: ?>
             <div class="div_carrinho"><a href="<?=URL?>/usuarios/cadastrar">Cadastrar-se</a> </div>
             <div class="div_carrinho"><a href="<?=URL?>/usuarios/login">Login</a> </div>

             <?php endif;?>
         </div>

 </section>
 <section id="section3" class="section3">
     <div class="div_fechar_menu_pesquisar">
         <p class="fechar_pesquisa" onclick="FecharMenuPesquisar()">X</p>
     </div>

     <form name="pesquisar" action="<?=URL?>/posts/pesquisa" method="post">
         <div class="div_pesquisar2"><input type="search" class="input_pesquisar" name="titulo" id=""
                 placeholder="Digite o titulo do livro:"> <button type="submit"
                 class="btn_increver-se">Pesquisar</button></div>
 </section>
 </form>
 <article class="article_msg_conf" id="article_msg_conf">
     <section class="section_confirmar">
         <div class="div_conf">Confirmação:</div>
         <div class="div_msg">Clique em confirmar para encerrar a conta. </div>
         <div class="div_btns_conf">
             <form name="encerrar_conta" action="<?=URL?>/usuarios/sair" method="post"><button class="btn_increver-se"
                     type="submit">Confirmar</button></form> <button class="btn_increver-se"
                 onclick="FecharMsgConf()">Cancelar</button>
         </div>
     </section>
 </article>

 
 