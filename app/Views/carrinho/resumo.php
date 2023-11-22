 <!--inicio Links carrinho -->
<section class="links_encomenda"><div><a href="<?=URL?>/carrinho/resumo"><button>RESUMO</button></a></div><div><a href="<?=URL?>/carrinho/entrar"><button>ENTRAR</button></a></div><div><a href="<?=URL?>/carrinho/endereco"><button>ENDEREÇO</button></a></div><div><a href="<?=URL?>/carrinho/envio"><button>ENVIO</button></a></div><div><a href="<?=URL?>/carrinho/pagamento"><button>PAGAMENTO</button></a></div></section>
 <!-- fim Links carrinho-->

<!-- Msg editado com sucesso -->
<div class="msg"><?=Sessao::mensagem('livro')?></div>
  <!-- Fim -->

 <!-- preco total e quantidade de produtos -->
<section class="section_info">
  <span>O seu carrinho tens x livros</span>
  <span>Preço total:  <?php       ?> AKZ</span>
  
</section>
<!-- Fim -->




 <!-- Itens do carrinho -->
 <article class="itens_no_carrinho" >
  <?php   foreach($dados['itensCarrinho'] as $IC): 
     ?>
<section class="section_info_itens_no_carrinho1">
  <div class="div_capa_livro" style="height: 70px; width: 70px;"><img  src="<?= URL ?>/public/uploads/capa/<?= $IC->url_capa ?>"  alt=""></div> <div  class="info_itens_carrinho2"><span>Titulo: <?= $IC->titulo ?></span> <span>Categoria: <?= $IC->categoriaNome ?></span> <span>Autor: <?= $IC->autorNome ?></span> <span>Preço: <?= $IC->preco ?> Akz</span> </div> <DIV> 
            <form name="deletar" action="<?=URL?>/carrinhos/deletarLivroCarrinho/<?= $IC->id_carrinho ?>" method="post"><button class="btn_del_iten_carrinho" type="submit"><i class="fa-solid fa-delete-left"></i></button></form></DIV>
</section>
<?php endforeach ?>


  
  
</article>
  <!-- Fim -->
 
  <section class="section_btns_encomenda">
    <div><button class="btn_increver-se">Seguinte</button></div>
    <div><a href="" class="ctn_compra">« Continuar compra</a></div>
   
    <div><button class="btn_increver-se">Cons. preço</button></div>
  </section>