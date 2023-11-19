<?php

class Post{

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
    //INNER JOIN -permite usar o operador de comparação para comparar  valores  de colun provinientes de tabelas associadaas
    public function lerLivros(){
        $this->db->query("SELECT *,
        livro.id_livro as livroId,
        categoria.id_categoria as categoriaId,
        categoria.nome as categoriaNome,
        autor.id_autor as autorId,
        autor.nome as autorNome
         FROM livro
         INNER JOIN categoria ON
         livro.id_categoria = categoria.id_categoria
          INNER JOIN autor ON
          livro.id_autor = autor.id_autor 
          ORDER BY livro.id_livro DESC ");
        return $this->db->resultados(); 
    }
    public function pesquisaLivro($titulo){
        $this->db->query("SELECT *,
        livro.id_livro as livroId,
        categoria.id_categoria as categoriaId,
        categoria.nome as categoriaNome,
        autor.id_autor as autorId,
        autor.nome as autorNome
         FROM livro
         INNER JOIN categoria ON
         livro.id_categoria = categoria.id_categoria
          INNER JOIN autor ON
          livro.id_autor = autor.id_autor 
          WHERE livro.titulo LIKE '%$titulo%' 
          ORDER BY livro.id_livro DESC ");
       
        return $this->db->resultados(); 
    }

    public function PesquisaPorFiltro($categoria=null,$autor=null){
        $this->db->query("SELECT *,
        livro.id_livro as livroId,
        categoria.id_categoria as categoriaId,
        categoria.nome as categoriaNome,
        autor.id_autor as autorId,
        autor.nome as autorNome
         FROM livro
         INNER JOIN categoria ON
         livro.id_categoria = categoria.id_categoria
          INNER JOIN autor ON
          livro.id_autor = autor.id_autor 
          WHERE categoria.nome = :categoria or autor.nome = :autor 
          ORDER BY livro.id_livro DESC ");
        $this->db->bind("categoria", $categoria);
        $this->db->bind("autor", $autor);
        return $this->db->resultados(); 
    }

    public function armazenar($dados){
        $this->db->query("INSERT INTO livro(url_capa, url_livro, titulo, preco, id_categoria, id_autor) VALUES (:capa, :pdf, :titulo, :preco, :categoria, :autor)");
        
        $this->db->bind("capa",$dados['capa']);
        $this->db->bind("pdf",$dados['pdf']);
        $this->db->bind("titulo",$dados['titulo']);
        $this->db->bind("preco",$dados['preco']);
        $this->db->bind("categoria",$dados['categoria']);
        $this->db->bind("autor",$dados['autor']);

        if($this->db->executa()):
            return true;
        else:
            return false;
        endif;

    }

    public function atualizar($dados){
        $this->db->query("UPDATE livro SET url_capa = :capa, url_livro = :pdf, titulo = :titulo, preco = :preco, id_categoria = :categoria, id_autor = :autor  WHERE id_livro = :id");

        $this->db->bind("id", $dados['id']);
       $this->db->bind("capa",$dados['capa']);
        $this->db->bind("pdf",$dados['pdf']);
        $this->db->bind("titulo",$dados['titulo']);
        $this->db->bind("preco",$dados['preco']);
        $this->db->bind("categoria",$dados['categoria']);
        $this->db->bind("autor",$dados['autor']);
        if ($this->db->executa()):
            return true;
        else:
            return false;
        endif;
    }

public function lerLivroPorId($id){
        $this->db->query("SELECT *,
        livro.id_livro as livroId,
        categoria.id_categoria as categoriaId,
        categoria.nome as categoriaNome,
        autor.id_autor as autorId,
        autor.nome as autorNome
         FROM livro
         INNER JOIN categoria ON
         livro.id_categoria = categoria.id_categoria
          INNER JOIN autor ON
          livro.id_autor = autor.id_autor  
          WHERE id_livro = :id ");
          $this->db->bind("id", $id);
        return $this->db->resultado(); 
    }
     

    public function destruir($id){
        $this->db->query("DELETE  FROM  livro WHERE id_livro = :id");
        $this->db->bind("id", $id);

        if ($this->db->executa()):
            return true;
        else:
            return false;
        endif;
    }

}