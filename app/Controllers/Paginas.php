<?php

class Paginas extends Controller {

   
  
   
   

    public function index(){
      //Para carregar todos os autores
      $this->autorModel = $this->model('Autor');
      $dados = [
        'autores' => $this->autorModel->lerAutores()
    ];
    
    //Para carregar todas as categorias
    $this->categoriaModel = $this->model('Categoria');
    $dados = [
      'categorias' => $this->categoriaModel->lerCategorias()
  ];
     
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