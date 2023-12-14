<?php

class Usuario {
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function checarEmail($email){
        $this->db->query("SELECT email FROM usuario WHERE email = :e");
        $this->db->bind(":e",$email);
        if($this->db->resultado()):
            return true;
        else: 
            return false;
        endif;
    }

    public function armazenar($dados){
        $this->db->query("INSERT INTO usuario (titulo, nome, apelido, email, data_nascimento, senha) VALUES (:titulo, :nome, :apelido, :email, :data_nascimento, :senha)");
        
        $this->db->bind("titulo",$dados['titulo']);
        $this->db->bind("nome",$dados['nome']);
        $this->db->bind("apelido",$dados['apelido']);
        $this->db->bind("email",$dados['email']);
        $this->db->bind("data_nascimento",$dados['data_nascimento']);
        $this->db->bind("senha",$dados['senha']);

        if($this->db->executa()):
            return true;
        else:
            return false;
        endif;

    }

    public function atualizar($dados){
        $this->db->query("UPDATE usuario SET id_usuario = :id, titulo = :titulo, nome = :nome, apelido = :apelido, email = :email, data_nascimento = :data_nascimento, senha = :senha WHERE id_usuario = :id");

        $this->db->bind("id", $dados['id']);
        $this->db->bind("titulo", $dados['titulo']);
        $this->db->bind("nome", $dados['nome']);
        $this->db->bind("apelido", $dados['apelido']);
        $this->db->bind("email", $dados['email']);
        $this->db->bind("data_nascimento", $dados['data_nascimento']);
        $this->db->bind("senha", $dados['senha']);
        

        if ($this->db->executa()):
            return true;
        else:
            return false;
        endif;
    }
  

    public function checarLogin($email, $senha){
        $this->db->query("SELECT * FROM usuario WHERE email = :email");
        $this->db->bind(":email",$email);

        if($this->db->resultado()):
            $resultado = $this->db->resultado();
            if($senha == $resultado->senha):
                return $resultado;
            else:
                return false; 
            endif;
        else: 
            return false;
        endif;
    }

    public function lerUsuarios(){
        $this->db->query("SELECT * FROM usuario ");
        return $this->db->resultados(); 
    }

    public function lerUsuarioPorId($id){
        $this->db->query("SELECT * FROM usuario WHERE id_usuario = :id");
        $this->db->bind("id", $id);

        return $this->db->resultado();
    }
 
    
    public function destruir($id){
        $this->db->query("DELETE  FROM  usuario WHERE id_usuario = :id");
        $this->db->bind("id", $id);

        if ($this->db->executa()):
            return true;
        else:
            return false;
        endif;
    }


    public function armazenar_cod_conf($dados){
        $this->db->query("INSERT INTO cod_de_confirmacao_de_senha (email, cod_confirmacao) VALUES ( :email, :cod_confirmacao)");
        
 
        $this->db->bind("email",$dados['email']);
        $this->db->bind("cod_confirmacao",$dados['cod_confirmacao']);
  

        if($this->db->executa()):
            return true;
        else:
            return false;
        endif;

    }
    public function lerCodConfSenha($dados){
        $this->db->query("SELECT * FROM cod_de_confirmacao_de_senha WHERE cod_confirmacao = :cod_confirmacao");
        $this->db->bind("cod_confirmacao", $dados['cod_confirmacao']);

        return $this->db->resultado();
    }

    public function lerUsuarioEmail($dados_temp){
        $this->db->query("SELECT * FROM usuario WHERE email = :email");
        $this->db->bind(":email", $dados_temp['email']);

        return $this->db->resultado();
    }


    public function onaraosFavoritos($dados){
        $this->db->query("INSERT INTO livros_favoritos (id_usuario, id_livro, cor) VALUES ( :id_usuario, :id_livro, :cor)");
        
 
        $this->db->bind("id_usuario",$dados['id_usuario']);
        $this->db->bind("id_livro",$dados['id_livro']);
        $this->db->bind("cor",$dados['cor']);

        if($this->db->executa()):
            return true;
        else:
            return false;
        endif;

    }
    public function checarListaDosFavoritos($dados){
        $this->db->query("SELECT * FROM livros_favoritos WHERE id_usuario = :id_usuario and id_livro = :id_livro");
        $this->db->bind("id_usuario",$dados['id_usuario']);
        $this->db->bind("id_livro",$dados['id_livro']);
        if($this->db->resultado()):
            return true;
        else: 
            return false;
        endif;
    }

     //INNER JOIN -permite usar o operador de comparação para comparar  valores  de colun provinientes de tabelas associadaas
     public function lerLivrosFavoritos($id_usuario){
        $this->db->query("SELECT *,
        livro.id_livro as livroId,
        categoria.id_categoria as categoriaId,
        categoria.nome as categoriaNome,
        autor.id_autor as autorId,
        autor.nome as autorNome
         FROM livros_favoritos
         INNER JOIN livro ON
         livros_favoritos.id_livro = livro.id_livro
         INNER JOIN categoria ON
         livro.id_categoria = categoria.id_categoria
          INNER JOIN autor ON
          livro.id_autor = autor.id_autor 
          WHERE  livros_favoritos.id_usuario = :id_usuario  
          ORDER BY livros_favoritos.id_livro DESC ");
            $this->db->bind("id_usuario",$id_usuario);
        return $this->db->resultados(); 
    } 

    

    public function destruirLivroFavoritos($id){
        $this->db->query("DELETE  FROM  livros_favoritos WHERE id_livros_favoritos = :id");
        $this->db->bind("id", $id);

        if ($this->db->executa()):
            return true;
        else:
            return false;
        endif;
    }

    public function destruirLivroFavoritos2($id){
        $this->db->query("DELETE  FROM  livros_favoritos WHERE id_livro = :id");
        $this->db->bind("id", $id);

        if ($this->db->executa()):
            return true;
        else:
            return false;
        endif;
    }
}