<?php

class Post{

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
    //INNER JOIN -permite usar o operador de comparação para comparar  valores  de colun provinientes de tabelas associadaas
    public function lerPosts(){
        $this->db->query("SELECT *,
        posts.id as postId,
        posts.criado_em as postDataCadastro,
        usuarios.id as usuarioId,
        usuarios.criado_em as usuarioDataCadastro
         FROM posts
         INNER JOIN usuarios ON
         posts.usuario_id = usuarios.id
          ORDER BY posts.id DESC ");
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
        $this->db->query("UPDATE posts SET titulo = :titulo, texto =:texto WHERE id = :id");

        $this->db->bind("id", $dados['id']);
        $this->db->bind("titulo", $dados['titulo']);
        $this->db->bind("texto", $dados['texto']);

        if ($this->db->executa()):
            return true;
        else:
            return false;
        endif;
    }


     

    public function destruir($id){
        $this->db->query("DELETE  FROM  posts WHERE id = :id");
        $this->db->bind("id", $id);

        if ($this->db->executa()):
            return true;
        else:
            return false;
        endif;
    }

}