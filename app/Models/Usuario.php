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
}