<?php

class Carrinhos extends Controller{

    public function __construct()
    {
        $this->carrinhoModel = $this->model('Carrinho'); 
         
        if(!(isset($_SESSION['usuario_id']))):
            Url::redirecionar('usuarios/login');
        endif;
    }
    

    public function resumo(){
        
         
             //Verifica si o formulario existe
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($formulario)):
            //Dados vindo do formulario cadastrar
            $dados =[ 
             'id_livro' => $formulario['id_livro'],
                 'id_usuario' => $_SESSION['usuario_id'] 
          ];
         if($this->carrinhoModel->armazenar($dados)):
            Sessao::mensagem('livro','Livro adicionado ao carrinho');
            Url::redirecionar('paginas/index');
        else:
            Sessao::mensagem('livro', 'Erro ao  adicionar Livro ao carrinho');
            Url::redirecionar('paginas/index');
        endif;   
    else:
        $dados =[ 
            'itensCarrinho' => $this->carrinhoModel->lerItensCarrinho($_SESSION['usuario_id']),
            'QTI' =>$this->carrinhoModel->QTCarrinho($_SESSION['usuario_id']),
            'PTI' =>$this->carrinhoModel->PTCarrinho($_SESSION['usuario_id'])
                 
         ];
    endif;
   
        $this->view('carrinho/resumo', $dados);
    }
   
    public function deletarLivroCarrinho($id){
 
                if($this->carrinhoModel->destruirLivroCarrinho($id)):
                    Sessao::mensagem('livro', 'Livro retirado do carrinho');
                else:
                    Sessao::mensagem('livro', 'Erro ao retirar o livro do carrinho');
                endif;      
                Url::redirecionar('carrinhos/resumo');  

       
               
        
    }
   
    

    public function BaixarLivros(){
        $dados =[ 
            'itensCarrinho' => $this->carrinhoModel->lerItensCarrinho($_SESSION['usuario_id']),
            'QTI' =>$this->carrinhoModel->QTCarrinho($_SESSION['usuario_id']) 
                 
         ];
     
         $this->view('carrinho/BaixarLivros', $dados); 
     
     }

     public function RealizarCheckout(){
 
        $dados =[ 
             'itensCarrinho' => $this->carrinhoModel->lerItensCarrinho($_SESSION['usuario_id']),
        'QTI' =>$this->carrinhoModel->QTCarrinho($_SESSION['usuario_id']),
        'PTI' =>$this->carrinhoModel->PTCarrinho($_SESSION['usuario_id'])            
         ];

 
 
         $checkout = new Checkout();
         $checkout->RealizarCheckout($dados); 
     }
}