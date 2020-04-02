<?php

class Paginas extends Controller {
    
   

    public function index(){

        if(Sessao::estarLogado()):
            Url::redirecionar('posts');
        endif;

     
       $this->view('paginas/home', $dados);
    }
      
    public function carrinho(){
        $dados = [ 
        ];
       $this->view('paginas/carrinho', $dados);
    }
   
 
    public function enviar_feedback(){
        $dados = [ 
        ];
       $this->view('paginas/enviar_feedback', $dados);
    }
    public function estatisticas(){
        $dados = [ 
        ];
       $this->view('paginas/estatisticas', $dados);
    }
   
     public function sobre_nos(){
       
       $this->view('paginas/sobre_nos', $dados);
    }
}