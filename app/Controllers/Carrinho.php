<?php

class Carrinho extends Controller{

    

    public function resumo(){
        
        //Verifica si o formulario existe 
        $this->view('carrinho/resumo', $dados);
    }
  
    public function entrar(){
        
        //Verifica si o formulario existe 
        $this->view('carrinho/entrar', $dados);
    }
    public function endereco(){
        
        //Verifica si o formulario existe 
        $this->view('carrinho/endereco', $dados);
    }
    public function envio(){
        
        //Verifica si o formulario existe 
        $this->view('carrinho/envio', $dados);
    }
    public function pagamento(){
        
        //Verifica si o formulario existe 
        $this->view('carrinho/pagamento', $dados);
    }
}