<?php

class Autor{

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
    
    public function lerAutores(){
        $this->db->query("SELECT * FROM autor order by nome");
        return $this->db->resultados(); 
    }

    public function armazenar($dados){
        $this->db->query("INSERT INTO autor(nome) VALUES (:nome)");
         
$this->db->bind("nome", $dados['nome']); 

        if($this->db->executa()):
            return true;
        else:
            return false;
        endif;

    }
 
    public function destruir($id){
        $this->db->query("DELETE  FROM  autor WHERE id_autor = :id");
        $this->db->bind("id", $id);

        if ($this->db->executa()):
            return true;
        else:
            return false;
        endif;
    }
 

    public function lerAutorPorId($id){
        $this->db->query("SELECT * FROM autor WHERE id_autor = :id");
        $this->db->bind("id", $id);

        return $this->db->resultado();
    }

    public function atualizar($dados){
        $this->db->query("UPDATE autor SET nome = :nome WHERE id_autor = :id");

        $this->db->bind("id", $dados['id']);
        $this->db->bind("nome", $dados['nome']);

        if ($this->db->executa()):
            return true;
        else:
            return false;
        endif;
    }
}