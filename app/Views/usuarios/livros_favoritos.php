<!--inicio Links do usuario -->
<section class="links_encomenda">
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

    
  <!-- Itens do carrinho -->
  <article class="itens_no_carrinho" >
  <?php foreach($dados['livros_favoritos'] as $LF): ?>
<section class="section_info_itens_no_carrinho1">
  <div class="div_capa_livro" style="height: 70px; width: 70px;"><img  src="<?= URL ?>/public/uploads/capa/<?= $LF->url_capa ?>"  alt=""></div> <div  class="info_itens_carrinho2"><span>Titulo: <?= $LF->titulo ?></span> <span>Categoria: <?= $LF->categoriaNome ?></span> <span>Autor: <?= $LF->autorNome ?></span> <span>Preço: <?= $LF->preco ?> Akz</span> </div> <DIV> 
            <form name="editar" action="<?=URL?>/usuarios/destruirLivroFavoritos/<?= $LF->id_livros_favoritos ?>" method="post"><button class="btn_del_iten_carrinho" type="submit"><i class="fa-solid fa-delete-left"></i></button></form></DIV>
</section>
<?php endforeach ?>


  
  
</article>
  <!-- Fim -->