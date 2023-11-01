

<!-- Inicio filtro -->
 
<section class="section_filtro"   id="section_filtro">
  <div>
  <details id="categorias">
    <summary>
       Categorias:
    </summary>
    <article>

    <?php foreach($dados['categorias'] as $categoria): ?>  
                <input type="radio" name="categoria" id="categoria" value="s"  ><span><?= $categoria->nome ?></span>
      <br>
      <?php endforeach ?>
      
      </article></details>
</div>
<div>
    <details id="autores">
      <summary>
Autores:
      </summary>
      <article>
      <?php foreach($dados['autores'] as $autor): ?>  
                <input type="radio" name="autor" id="autor" value="s"  ><span><?= $autor->nome ?></span>
      <br>
      <?php endforeach ?>
      
      </article></details>
  </div>
  <button class="btn_increver-se">Filtrar</button>
  </section>
   
<!-- Fim filtro -->
<!-- Corpo -->

<!--inicio Livros carregados-->
<section class="section_livros">
  <article class="main_livro article">
    <div class="div_capa_livro div-imagem"><img src="<?= URL ?>/public/img/capa_do_livro/IronMan.png" alt="">
    </div>
    <div class="artibutos_livro div-spans">
      <span class="nome_livro">Iron Man</span>
      <span class="categoria_livro">Conto</span>
      <span class="autor_livro">Eoin Cofle</span>
      <span class="preco_livro">kz 10.000,00</span>
    </div>
    <div class="div_btn_livro div-botao"><button><i class="fa-solid fa-heart"></i></button>  
      <button><i class="fa-solid fa-cart-plus"></i></button>
    </div>
  </article>



</section>
<!--Fim Livros carregados-->
<!-- Fim corpo -->

<div class="div_mostrar_mais"><a href="">Mostrar outros livros</a></div>