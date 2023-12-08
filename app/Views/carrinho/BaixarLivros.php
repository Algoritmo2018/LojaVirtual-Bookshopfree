 <!--inicio Links do usuario -->
<section class="links_encomenda">
   <div><a href="<?= URL ?>/carrinhos/BaixarLivros">Baixar</a>
     </div>
     <div><a href="<?= URL ?>/usuarios/livros_favoritos">Favoritos</a>
     </div>
     <div><a href="<?= URL ?>/usuarios/meu_perfil/<?= $_SESSION['usuario_id']; ?>">Perfil</a>
     </div>
     <div><a href="<?= URL ?>/usuarios/meus_enderecos">Endereços</a>
     </div>
     <div><a href="<?= URL ?>/usuarios/historico_pedidos">Hist. pedidos</a>
    </div>
   
 </section>
 <!-- fim Links do usuario-->

 <!-- Msg editado com sucesso -->
 <div class="msg"><?=Sessao::mensagem('livro')?></div> 
  <!-- Fim -->
 
  <!-- preco total e quantidade de produtos -->
<section class="section_info">
  <span>O seu carrinho tens <?php echo $dados['QTI'][0]->{'count(*)'}; ?> livros</span>
   
</section>
<!-- Fim -->




 <!-- Itens do carrinho -->
 <article class="itens_no_carrinho" >
  <?php   foreach($dados['itensCarrinho'] as $IC): 
     ?>
<section class="section_info_itens_no_carrinho1">
  <div class="div_capa_livro" style="height: 70px; width: 70px;"><img  src="<?= URL ?>/public/uploads/capa/<?= $IC->url_capa ?>"  alt=""></div> <div  class="info_itens_carrinho2"><span>Titulo: <?= $IC->titulo ?></span> <span>Categoria: <?= $IC->categoriaNome ?></span> <span>Autor: <?= $IC->autorNome ?>  </div> <DIV> 
               <a class="btn_del_iten_carrinho" style="color:#6060c9;" href="<?= URL ?>/public/uploads/Livros_pdf/<?= $IC->url_livro ?>" download><i class="fa-solid fa-download"></i></a> </DIV>
</section>
<?php endforeach ?>
 
</article>
  <!-- Fim -->
  