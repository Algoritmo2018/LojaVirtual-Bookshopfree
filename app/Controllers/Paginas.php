<?php

class Paginas extends Controller {

   
    public function __construct()
    {
        
        $this->autorModel = $this->model('Autor'); 
        $this->categoriaModel = $this->model('Categoria');
        $this->postModel = $this->model('Post');
        $this->usuarioModel = $this->model('Usuario');
    }
   
   

    public function index(){
      //Para caregar todos os livros
      

     
   
      $dados = [
        'autores' => $this->autorModel->lerAutores(), 
         'livros' => $this->postModel->lerLivros(),
         'livros_favoritos' => $this->usuarioModel->lerLivrosFavoritos($_SESSION['usuario_id']),
         'categorias' => $this->categoriaModel->lerCategorias()
    ];
    
     var_dump($_SESSION);
       $this->view('paginas/home', $dados);
    }
      
    public function carrinho(){
        $dados = [ 
        ];
       $this->view('paginas/carrinho', $dados);
    }
   
 
    public function enviar_feedback(){
        //Verifica si o formulario existe
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($formulario)):
            //Dados vindo do formulario cadastrar
            $dados =[ 
                'conteudo' => trim ($formulario['conteudo']),
                'conteudo_erro' => ''
            ];

            //Validando os campos do formulario
            //in_array()- verifica si no array existe campo vazio
            if(in_array("", $formulario)):
          

                if(empty($formulario['conteudo'])):
                    $dados['conteudo_erro'] = 'Escreva alguma cena, na  caixa acima!';
                endif;
            
        else:
            $email = new Email();
            $email->enviar_email($_SESSION['usuario_email'], $_SESSION['usuario_nome'], $dados['conteudo']);
            if($email->resultado == "Email enviado com sucesso!<br>"):
                Sessao::mensagem('livro', $email->getResultado());
               
            
            else:
                Sessao::mensagem('livro', $email->getResultado(), 'erro1');
            endif;
        endif;
        else:
            $dados =[
                'conteudo' => '', 
                'conteudo_erro' => ''
            ]; 
        endif;
        
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