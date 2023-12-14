<!-- Footer-->
<?php if(isset($_SESSION['usuario_id']) and $_SESSION['usuario_id'] == 6):?>
<footer class="rodape">
 
    
    <section>
        <div>
            <details id="categorias">
                <summary>
                    Livros:
                </summary>
                <article>
                    <a href="<?=URL?>/posts/cadastrar">Cadastrar</a>
                    <br>
                    <a href="<?=URL?>/posts/editar">Editar</a>
                    <br>
                    <a href="">Deletar</a>
                </article>
            </details>
        </div>
    </section>
    <section>
        <div>
            <details id="categorias">
                <summary>
                    Categorias:
                </summary>
                <article>
                    <a href="<?=URL?>/categorias/cadastrar">Cadastrar</a>
                    <br>
                    <a href="<?=URL?>/categorias/cadastrados">cadastrados</a>
                    <br>
                    <a href="">Deletar</a>
                </article>
            </details>
        </div>
    </section>
    <section>
        <div>
            <details id="categorias">
                <summary>
                    Autores:
                </summary>
                <article>
                    <a href="<?=URL?>/autores/cadastrar">Cadastrar</a>
                    <br>
                    <a href="<?=URL?>/autores/cadastrados">cadastrados</a>
                    <br>
                    <a href="">Deletar</a>
                </article>
            </details>
        </div>
    </section>
  
    
  
</footer>
  <?php endif;?>
