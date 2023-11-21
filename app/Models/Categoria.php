<?php

class Categoria{

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
    
    public function lerCategorias(){
        $this->db->query("SELECT * FROM categoria order by nome");
        return $this->db->resultados(); 
    }

    public function armazenar($dados){
        $this->db->query("INSERT INTO categoria(nome) VALUES (:nome)");
         
$this->db->bind("nome", $dados['nome']); 

        if($this->db->executa()):
            return true;
        else:
            return false;
        endif;

    }
 
    public function destruir($id){
        $this->db->query("DELETE  FROM  categoria WHERE id_categoria = :id");
        $this->db->bind("id", $id);

        if ($this->db->executa()):
            return true;
        else:
            return false;
        endif;
    }
 

    public function lerCategoriaPorId($id){
        $this->db->query("SELECT * FROM categoria WHERE id_categoria = :id");
        $this->db->bind("id", $id);

        return $this->db->resultado();
    }

    public function atualizar($dados){
        $this->db->query("UPDATE categoria SET nome = :nome WHERE id_categoria = :id");

        $this->db->bind("id", $dados['id']);
        $this->db->bind("nome", $dados['nome']);

        if ($this->db->executa()):
            return true;
        else:
            return false;
        endif;
    }
    
    public function checarCategoria($dados){
        $this->db->query("SELECT * FROM categoria WHERE nome = :nome ");
        $this->db->bind("nome",$dados['nome']);
        if($this->db->resultado()):
            return true;
        else: 
            return false;
        endif;
    }
}