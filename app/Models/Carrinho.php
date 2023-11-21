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
 
}