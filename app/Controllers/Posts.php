<?php

class Posts extends Controller{
  
    public function __construct()
    {
        
        $this->autorModel = $this->model('Autor'); 
        $this->categoriaModel = $this->model('Categoria');
        $this->postModel = $this->model('Post');

    }

    public function cadastrar(){
 
         /*
        unset($_SESSION['capa']);
        unset($_SESSION['pdf']);
        session_destroy();
 */
        //Verifica si o formulario existe
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($formulario)):
            //Dados vindo do formulario cadastrar
            $dados =[ 
                'titulo' => trim ($formulario['titulo']),
        'preco' => trim ($formulario['preco']),
        'autor' => trim ($formulario['autor']),    
            'categoria' => trim ($formulario['categoria']),
        'capa' =>trim($_FILES['capa']['name']),
        'pdf' => trim($_FILES['pdf']['name']),
                'titulo_erro' => '',
                'preco_erro' => '',
                'capa_erro' => '',
                'pdf_erro' => '',
                'categorias' => $this->categoriaModel->lerCategorias(),
                'autores'  => $this->autorModel->lerAutores()
            ];
            

            //Validando os campos do formulario
            //in_array()- verifica si no array existe campo vazio
            if(in_array("", $formulario)):
          

                if(empty($formulario['titulo'])):
                    $dados['titulo_erro'] = 'Preencha o campo titulo';
                endif;
                if(empty($formulario['preco'])):
                    $dados['preco_erro'] = 'Preencha o campo preco';
                endif; 
                if($_FILES['capa']['name']==""):
                    $dados['capa_erro'] = 'Faça upload da capa do livro';
                endif; 
                if($_FILES['pdf']['name']==""):
                    $dados['pdf_erro'] = 'Faça upload do livro no formato pdf';
                endif;
            else:
             
         
   //Upload da capa do livro          
if($_FILES['pdf']['type']== "application/pdf" and isset($_FILES['capa']) and $_SESSION['capa']==""):
       //Extensões validas
       $dados['extensoes'] = [
        'png',
        'jpg'
    ];

    //Tipos de arquivos validos
    $dados['tipos'] = [
        'image/png',
        'image/jpeg'
    ];
                $upload = new Upload();
                $upload->imagem($_FILES['capa'], null, 'capa', 2, $dados['extensoes'], $dados['tipos']);
                if ($upload->getResultado()) :
                    $_SESSION['capa'] =$upload->getResultado();
                    $dados['capa']= $_SESSION['capa'];
                    $dados['capa_erro'] ='Upload de capa feito com sucesso';
 
                else :
                    $dados['capa_erro'] = $upload->getErro();
                endif;
          
            
            endif;
       

            
   //Upload do livro  em pdf        
if(  $_SESSION['capa']<>"" and $_SESSION['pdf']==""):
    //Extensões validas
    $dados['extensoes'] = [
     'pdf'
 ];

 //Tipos de arquivos validos
 $dados['tipos'] = [
    "application/pdf"
 ];
             $upload = new Upload();
             $upload->imagem($_FILES['pdf'], null, 'Livros_pdf', 100, $dados['extensoes'], $dados['tipos']);
             if ($upload->getResultado()) :
                 $_SESSION['pdf'] =$upload->getResultado();
                $dados['pdf']= $_SESSION['pdf'];
                 $dados['pdf_erro'] ='Upload do livro em formato pdf foi feito com sucesso';
                     
                if($this->postModel->armazenar($dados)):
                    Sessao::mensagem('livro', 'Livro cadastrado com sucesso');
                   
                    unset($_SESSION['capa']);
        unset($_SESSION['pdf']);
        session_destroy();
        Url::redirecionar('paginas/index');
                else:
                    Sessao::mensagem('livro', 'Erro ao  cadastrar Livro no banco de dados');
                    unset($_SESSION['capa']);
                    unset($_SESSION['pdf']);
                    session_destroy();
                    Url::redirecionar('paginas/index');
                endif;  

             else :
                 $dados['pdf_erro'] = $upload->getErro();
             endif;
                  
         endif;
    
            
 
            endif;
        else:
          $dados =[ 
                'titulo' => '',
        'preco' => '',
        'autor' => '',    
            'categoria' => '',
        'capa' => '',
        'pdf' => '',
                'titulo_erro' => '',
                'preco_erro' => '',
                'autor_erro' => '',
                'categoria_erro' => '',
                'capa_erro' => '',
                'pdf_erro' => '',
                'categorias' => $this->categoriaModel->lerCategorias(),
            'autores'  => $this->autorModel->lerAutores() 
            ]; 
        endif;
       
 var_dump($_FILES);
      
        $this->view('posts/cadastrar', $dados);
    }
    public function editar($id){
        
        //Verifica si o formulario existe
         //Verifica si o formulario existe
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($formulario)):
            //Dados vindo do formulario cadastrar
           $dados =[ 
            'id' => $id,
                'titulo' => trim ($formulario['titulo']),
        'preco' => trim ($formulario['preco']),
        'autor' => trim ($formulario['autor']),    
            'categoria' => trim ($formulario['categoria']),
            'CategoriaRegistada' => trim ($formulario['categoriaregistada']),
                'AutorRegistado' => trim ($formulario['autorregistado']),
        'capa' =>trim($_FILES['capa']['name']),
        'pdf' => trim($_FILES['pdf']['name']),
                'titulo_erro' => '',
                'preco_erro' => '',
                'capa_erro' => '',
                'pdf_erro' => '',
                'categorias' => $this->categoriaModel->lerCategorias(),
                'autores'  => $this->autorModel->lerAutores()
            ];
 
            //Validando os campos do formulario
            //in_array()- verifica si no array existe campo vazio
            if(in_array("", $formulario)):
                if(empty($formulario['titulo'])):
                    $dados['titulo_erro'] = 'Digite o titulo do livro';
                endif;
   if(empty($formulario['preco'])):
                    $dados['preco_erro'] = 'Insira o preço do livro ';
                endif;
                if($_FILES['capa']['name']==""):
                    $dados['capa_erro'] = 'Faça upload da capa do livro';
                endif; 
                if($_FILES['pdf']['name']==""):
                    $dados['pdf_erro'] = 'Faça upload do livro no formato pdf';
                endif; 
                
            else:
          /*      
               if($this->autorModel->atualizar($dados)):
                    Sessao::mensagem('autor','O nome do autor foi atualizado com sucesso');
                    Url::redirecionar('autores/cadastrados');
                else:
                    die("Erro ao atualizar o nome do autor no banco de dados");
                endif;  */  
                    
   //Upload da capa do livro          
if( $_FILES['capa']['type']== "image/jpeg" or $_FILES['capa']['type']== "image/png" and $_SESSION['capa']==""):
       //Extensões validas
       $dados['extensoes'] = [
        'png',
        'jpg'
    ];

    //Tipos de arquivos validos
    $dados['tipos'] = [
        'image/png',
        'image/jpeg'
    ];
                $upload = new Upload();
                $upload->imagem($_FILES['capa'], null, 'capa', 2, $dados['extensoes'], $dados['tipos']);
                if ($upload->getResultado()) :
                    $_SESSION['capa'] =$upload->getResultado();
                    $dados['capa']= $_SESSION['capa'];
                    $dados['capa_erro'] ='Upload de capa feito com sucesso';
                $upload = new Upload();
                $upload->apagarcapa($_SESSION['url_capa']);
                else :
                    $dados['capa_erro'] = $upload->getErro();
                    
                endif;
          
            else:
               $dados['capa']= $_SESSION['url_capa'];
                
            endif;
       

            
   //Upload do livro  em pdf        
if(  $_FILES['pdf']['type']== "application/pdf" and $_SESSION['pdf'] ==""):
    //Extensões validas
    $dados['extensoes'] = [
     'pdf'
 ];

 //Tipos de arquivos validos
 $dados['tipos'] = [
    "application/pdf"
 ];
             $upload = new Upload();
             $upload->imagem($_FILES['pdf'], null, 'Livros_pdf', 100, $dados['extensoes'], $dados['tipos']);
             if ($upload->getResultado()) :
                 $_SESSION['pdf'] =$upload->getResultado();
                $dados['pdf']= $_SESSION['pdf'];
                 $dados['pdf_erro'] ='Upload do livro em formato pdf foi feito com sucesso';
                 $upload = new Upload();
                       $upload->apagarpdf($_SESSION['url_pdf']);
              

             else :
                 $dados['pdf_erro'] = $upload->getErro();
             endif;
                   else:
              $dados['pdf']=  $_SESSION['url_pdf'];
              
  
         endif;
    
          if($this->postModel->atualizar($dados)):
                    Sessao::mensagem('livro', 'Livro atualizado com sucesso');
                Url::redirecionar('paginas/index');
                else:
                    Sessao::mensagem('livro', 'Erro ao  cadastrar Livro no banco de dados');
                endif;
                if (isset($_SESSION['capa'])):
                    unset($_SESSION['capa']);
                    unset($_SESSION['url_capa']);
        session_destroy();
                endif;
 if(isset($_SESSION['pdf'])):
  unset($_SESSION['pdf']);
  unset($_SESSION['url_capa']);
        session_destroy();                
endif; 
            endif;
            
        else:
            
            $livro = $this->postModel->lerLivroPorId($id);
 
            $dados =[
                'id_livro' => $livro->id_livro,
                'titulo' => $livro->titulo,
                'CategoriaRegistada' => $livro->categoriaNome,
                'AutorRegistado' => $livro->autorNome,
                'url_capa' => $livro->url_capa,
                'url_livro' => $livro->url_livro,
                'preco' => $livro->preco,
                 'titulo_erro' => '',
                'preco_erro' => '',
                'capa_erro' => '',
                'pdf_erro' => '',
                'categorias' => $this->categoriaModel->lerCategorias(),
                'autores'  => $this->autorModel->lerAutores() 
            ]; 
             $_SESSION['url_capa']= $dados['url_capa'];
             $_SESSION['url_pdf']= $dados['url_livro'];  
        endif;
 
       var_dump($_SESSION['capa']);
    
        $this->view('posts/editar', $dados);
    }

     public function deletar($id){
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($formulario)):
            $_SESSION['url_capa']= $formulario['capa'];
             $_SESSION['url_pdf']= $formulario['pdf'];  
        endif;
         
                if($this->postModel->destruir($id)):
                     $upload = new Upload();
                       $upload->apagarpdf($_SESSION['url_pdf']);
                        $upload->apagarcapa($_SESSION['url_capa']);
                    Sessao::mensagem('livro', 'Livro deletado com sucesso');
                    Url::redirecionar('paginas/index');
                endif;
        
        
    }

    public function pesquisa(){
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $dados = [
           
           'livros' => $this->postModel->pesquisaLivro(trim($formulario['titulo'])), 
           'autores' => $this->autorModel->lerAutores(), 
           'categorias' => $this->categoriaModel->lerCategorias()
      ]; 
      Sessao::mensagem('livro', 'Resultado da pesquisa');
         $this->view('posts/pesquisa', $dados);
      }

      public function PesquisaPorFiltro(){
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);



        $dados = [
           
           'livros' => $this->postModel->PesquisaPorFiltro(trim($formulario['categoria']), trim($formulario['autor'])), 
           'autores' => $this->autorModel->lerAutores(), 
           'categorias' => $this->categoriaModel->lerCategorias()
      ];
      Sessao::mensagem('livro', 'Resultado da filtragem');
      
        $this->view('posts/pesquisa', $dados);
      }
   
 }