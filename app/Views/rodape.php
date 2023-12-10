<div id="btnTop">
    <i class="arrow up"></i>
</div>
<!-- Footer-->
<footer class="rodape">
<?php if(isset($_SESSION['usuario_id'])):?>
    <?php if($_SESSION['usuario_id'] == 6):?>
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
    <?php endif;?>
    <section>
        <div>
            <details id="categorias">
                <summary>
                    Contactos:
                </summary>
                <article>
                    <a href=""><i class="fa-brands fa-facebook-f"></i> Bookshopfree</a>
                    <br>
                    <a href="https://api.whatsapp.com/send?phone=244938092678"><i class="fa-brands fa-whatsapp"></i>
                        938092678</a>
                    <br>
                    <a href=""><i class="fa-brands fa-instagram"></i> Bookshopfree</a>
                </article>
            </details>
        </div>
    </section>
  
    <?php endif;?>
</footer>

<div class="fim_rodape">

    <span class="p_rodape">
        &COPY; 2023 Copyright-Developer L.C.M
    </span>

</div>