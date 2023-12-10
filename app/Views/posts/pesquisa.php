 <!-- Msg editado com sucesso -->
 <div class="msg"><?=Sessao::mensagem('livro')?></div>
  
  <!-- Fim -->
<!-- Inicio filtro -->

<section class="section_filtro" id="section_filtro">
    <div>
        <details id="categorias">
            <summary>
                Categorias:
            </summary>
            <article>

                <?php foreach($dados['categorias'] as $categoria): ?>
                <input type="radio" name="categoria" id="categoria" value="s"><span><?= $categoria->nome ?></span>
                <br>
                <?php endforeach ?>

            </article>
        </details>
    </div>
    <div>
        <details id="autores">
            <summary>
                Autores:
            </summary>
            <article>
                <?php foreach($dados['autores'] as $autor): ?>
                <input type="radio" name="autor" id="autor" value="s"><span><?= $autor->nome ?></span>
                <br>
                <?php endforeach ?>

            </article>
        </details>
    </div>
    <button class="btn_increver-se">Filtrar</button>
</section>

<!-- Fim filtro -->
<!-- Corpo -->

<!--inicio Livros carregados-->

<section class="section_livros">
    <?php foreach($dados['livros'] as $livro): ?>
    <article class="main_livro article">
        <div class="div_capa_livro div-imagem"><img src="<?= URL ?>/public/uploads/capa/<?= $livro->url_capa ?>" alt="">
        </div>
        <div class="artibutos_livro div-spans">
            <span class="nome_livro"><?= $livro->titulo ?></span>
            <span class="categoria_livro"><?= $livro->categoriaNome ?></span>
            <span class="autor_livro"><?= $livro->autorNome ?></span>
            <span class="preco_livro">USD <?= $livro->preco ?></span>
        </div>
        <div class="div_btn_livro div-botao"><button><i class="fa-solid fa-heart"></i></button>
            <button><i class="fa-solid fa-cart-plus"></i></button>
            <form name="editar" action="<?=URL?>/posts/editar/<?= $livro->id_livro ?>" method="post">
                <button><i class="fa-solid fa-pen-to-square"></i></button>
            </form>
            <form name="editar" action="<?=URL?>/posts/deletar/<?= $livro->id_livro ?>" method="post">
                <input type="hidden" name="capa" value="<?= $livro->url_capa ?>">
                <input type="hidden" name="pdf" value="<?= $livro->url_livro ?>">
                <button><i class="fa-solid fa-delete-left"></i></button>
            </form>
        </div>
    </article>

    <?php endforeach ?>

</section>
<!--Fim Livros carregados-->
<!-- Fim corpo -->

<div class="div_mostrar_mais"><a href="">Mostrar outros livros</a></div>