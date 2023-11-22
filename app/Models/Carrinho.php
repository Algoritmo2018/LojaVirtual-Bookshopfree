<?php

class Carrinho{

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
    
   

    public function armazenar($dados){
        $this->db->query("INSERT INTO carrinho(id_usuario, id_livro) VALUES (:id_usuario, :id_livro)");
         
$this->db->bind("id_usuario", $dados['id_usuario']); 
$this->db->bind("id_livro", $dados['id_livro']); 
        if($this->db->executa()):
            return true;
        else:
            return false;
        endif;

    }

     //INNER JOIN -permite usar o operador de comparação para comparar  valores  de colun provinientes de tabelas associadaas
     public function lerItensCarrinho($id_usuario){
        $this->db->query("SELECT *,
        livro.id_livro as livroId,
        categoria.id_categoria as categoriaId,
        categoria.nome as categoriaNome,
        autor.id_autor as autorId,
        autor.nome as autorNome
         FROM carrinho
         INNER JOIN livro ON
         carrinho.id_livro = livro.id_livro
         INNER JOIN categoria ON
         livro.id_categoria = categoria.id_categoria
          INNER JOIN autor ON
          livro.id_autor = autor.id_autor 
          WHERE  carrinho.id_usuario = :id_usuario  
          ORDER BY carrinho.id_livro DESC ");
            $this->db->bind("id_usuario",$id_usuario);
        return $this->db->resultados(); 
    } 

    public function QTCarrinho($id_usuario){
        $this->db->query("SELECT count(*) 
         FROM carrinho
         
          WHERE  carrinho.id_usuario = :id_usuario  
          ");
            $this->db->bind("id_usuario",$id_usuario);
        return $this->db->resultados(); 
    } 

    
     //INNER JOIN -permite usar o operador de comparação para comparar  valores  de colun provinientes de tabelas associadaas
     public function PTCarrinho($id_usuario){
        $this->db->query("SELECT SUM(livro.preco),
        livro.id_livro as livroId,
        categoria.id_categoria as categoriaId,
        categoria.nome as categoriaNome,
        autor.id_autor as autorId,
        autor.nome as autorNome
         FROM carrinho
         INNER JOIN livro ON
         carrinho.id_livro = livro.id_livro
         INNER JOIN categoria ON
         livro.id_categoria = categoria.id_categoria
          INNER JOIN autor ON
          livro.id_autor = autor.id_autor 
          WHERE  carrinho.id_usuario = :id_usuario  
            ");
            $this->db->bind("id_usuario",$id_usuario);
        return $this->db->resultados(); 
    } 
   
 
    public function destruirLivroCarrinho($id){
        $this->db->query("DELETE  FROM carrinho WHERE id_carrinho = :id");
        $this->db->bind("id", $id);

        if ($this->db->executa()):
            return true;
        else:
            return false;
        endif;
    }
}