<?php

class Carrinhos extends Controller{

    public function __construct()
    {
        
        $this->carrinhoModel = $this->model('Carrinho'); 
         

    }
    

    public function resumo(){
        
        //Verifica si o formulario existe 
          //Verifica si o formulario existe
         //Verifica si o formulario existe
         $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
         
           
            $dados =[ 
             'id_livro' => $formulario['id_livro'],
                 'id_usuario' => $_SESSION['usuario_id'] 
          ];
         if($this->carrinhoModel->armazenar($dados)):
            Sessao::mensagem('livro', 'Livro adicionado ao carrinho');
       
Url::redirecionar('paginas/index');
        else:
            Sessao::mensagem('livro', 'Erro ao  adicionar Livro ao carrinho');
       
            Url::redirecionar('paginas/index');
        endif;   
         

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