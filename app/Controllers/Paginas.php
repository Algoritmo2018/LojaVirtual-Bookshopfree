<?php

class Paginas extends Controller {

   
    public function __construct()
    {
        
        $this->autorModel = $this->model('Autor'); 
        $this->categoriaModel = $this->model('Categoria');
        $this->postModel = $this->model('Post');

    }
   
   

    public function index(){
      //Para caregar todos os livros
      

     
   
      $dados = [
        'autores' => $this->autorModel->lerAutores(), 
         'livros' => $this->postModel->lerLivros(),
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