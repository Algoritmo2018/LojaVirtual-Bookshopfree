 <!--inicio Links carrinho -->
<section class="links_encomenda"><div><a href="<?=URL?>/carrinho/resumo"><button>LIVROS NO CARRINHO</button></a></div></section>
 <!-- fim Links carrinho-->

<!-- Msg editado com sucesso -->
<div class="msg"><?=Sessao::mensagem('livro')?></div>
  <!-- Fim -->

 <!-- preco total e quantidade de produtos -->
<section class="section_info">
  <span>O seu carrinho tens <?php echo $dados['QTI'][0]->{'count(*)'}; ?> livros</span>
  <span>Preço total: <?php echo number_format($dados['PTI'][0]->{'SUM(livro.preco)'}, 0,',','.'); ?>  USD</span>
  
</section>
<!-- Fim -->




 <!-- Itens do carrinho -->
 <article class="itens_no_carrinho" >
  <?php   foreach($dados['itensCarrinho'] as $IC): 
     ?>
<section class="section_info_itens_no_carrinho1">
  <div class="div_capa_livro" style="height: 70px; width: 70px;"><img  src="<?= URL ?>/public/uploads/capa/<?= $IC->url_capa ?>"  alt=""></div> <div  class="info_itens_carrinho2"><span>Titulo: <?= $IC->titulo ?></span> <span>Categoria: <?= $IC->categoriaNome ?></span> <span>Autor: <?= $IC->autorNome ?></span> <span>Preço: <?= number_format($IC->preco, 0,',','.') ?> USD</span> </div> <DIV> 
            <form name="deletar" action="<?=URL?>/carrinhos/deletarLivroCarrinho/<?= $IC->id_carrinho ?>" method="post"><button class="btn_del_iten_carrinho" type="submit"><i class="fa-solid fa-delete-left"></i></button></form></DIV>
</section>
<?php endforeach ?>


  
  
</article>
  <!-- Fim -->
 
  <section class="section_btns_encomenda">
  <?php if( $dados['QTI'][0]->{'count(*)'}<>0): ?> <div> <form name="checkout" action="<?=URL?>/carrinhos/RealizarCheckout" method="post"><button class="btn_increver-se" type="submit">Pagar</button></form></div>
    <?php endif; ?>
    <div><a href="<?= URL ?>/paginas/home" class="ctn_compra">« Continuar compra</a></div>
   
   
  </section>