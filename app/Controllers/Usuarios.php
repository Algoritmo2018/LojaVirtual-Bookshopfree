<?php

class Usuarios extends Controller
{

    public function __construct()
    {
        $this->usuarioModel = $this->model('Usuario');
    }


    

public function cadastrar(){
        
    
        //Verifica si o formulario existe
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) :
            //Dados vindo do formulario cadastrar
            $dados = [
                'titulo' => trim($formulario['titulo']),
                'nome' => trim($formulario['nome']),
                'apelido' => trim($formulario['apelido']),
                'email' => trim($formulario['email']),
                'senha' => trim($formulario['senha']),
                'confirmar_senha' => trim($formulario['confirmar_senha']),
                'data_nascimento' => trim($formulario['data_nascimento']),
                'titulo_erro' => '',
                'nome_erro' => '',
                'apelido_erro' => '',
                'email_erro' => '',
                'senha_erro' => '',
                'confirmar_senha_erro' => '',
                'data_nascimento_erro' => ''
            ];

            //Validando os campos do formulario
            //in_array()- verifica si no array existe campo vazio
            if (in_array("", $formulario)) :
                if (empty($formulario['nome'])) :
                    $dados['nome_erro'] = 'Preencha o campo nome';
                endif;

                if (empty($formulario['apelido'])) :
                    $dados['apelido_erro'] = 'Digite o seu apelido';
                endif;
 
                if (empty($formulario['email'])) :
                    $dados['email_erro'] = 'Preencha o campo email';
                endif;

               
                if (empty($formulario['titulo'])) :
                    $dados['titulo_erro'] = 'Selecione um titulo';
                endif; 
                if (empty($formulario['senha'])) :
                    $dados['senha_erro'] = 'Preencha o campo senha';
                endif;
                if (empty($formulario['confirmar_senha'])) :
                    $dados['confirmar_senha_erro'] = 'Preencha o campo confirmar senha';
                endif;

    if (empty($formulario['data_nascimento'])) :
                    $dados['data_nascimento_erro'] = 'Preencha o campo data de nascimento';
                endif;
            else :

               if (Checa::checarNome($formulario['nome'])) :
                    $dados['nome_erro'] = 'O nome informado é invalido';

                elseif (Checa::checarEmail($formulario['email'])) :
                    $dados['email_erro'] = 'O e-mail informado é invalido';
             elseif ($this->usuarioModel->checarEmail($formulario['email'])) :
                    $dados['email_erro'] = 'O e-mail informado já está cadastrado';
 

                elseif (strlen($formulario['senha']) < 6) :
                    $dados['senha_erro'] = 'A senha deve ter no minimo 6 caracteres ';
                elseif ($formulario['senha'] != $formulario['confirmar_senha']) :
                    $dados['confirmar_senha_erro'] = 'As senhas são diferentes';
                else :
                /*$dados['senha'] = password_hash($formulario['senha'], PASSWORD_DEFAULT);*/  

                    if ($this->usuarioModel->armazenar($dados)) :
                        Sessao::mensagem('usuario', 'Usuario cadastrado com sucesso');
                        Url::redirecionar('usuarios/login');
                    else :
                        die("Erro ao armazenar usuario no banco de dados");
                    endif;


                endif;
            endif;
        else :
            $dados = [
                'titulo' => '',
                'nome' => '',
                'apelido' => '',
                'email' => '',
                'senha' => '',
                'confirmar_senha' => '',
                'data_nascimento' => '', 
                'titulo_erro' => '',
                'nome_erro' => '',
                'apelido_erro' => '',
                'email_erro' => '',
                'senha_erro' => '',
                'confirmar_senha_erro' => '',
                'data_nascimento_erro' => ''

            ];
        endif;

        

       $this->view('usuarios/cadastrar', $dados);
    }


    public function login(){ 

         //Verifica si o formulario existe
         $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
         if (isset($formulario)) :
             //Dados vindo do formulario cadastrar
             $dados = [
                 'email' => trim($formulario['email']),
                 'senha' => trim($formulario['senha']),
                 'email_erro' => '',
                 'senha_erro' => ''
             ];
             //Validando os campos do formulario
             //in_array()- verifica si no array existe campo vazio
             if (in_array("", $formulario)) :
                 if (empty($formulario['email'])) :
                     $dados['email_erro'] = 'Preencha o campo email';
                 endif;
 
                 if (empty($formulario['senha'])) :
                     $dados['senha_erro'] = 'Preencha o campo senha';
                 endif;
             else :
 
                 if (Checa::checarEmail($formulario['email'])) :
                     $dados['email_erro'] = 'O e-mail informado é invalido';
                
                     else :
                     $usuario = $this->usuarioModel->checarLogin($formulario['email'], $formulario['senha']);
                     
                     if($usuario):
                        $this->criarSessaoUsuario($usuario);
                     else :
                         Sessao::mensagem('erro1', 'Usuario ou senha invalidos', 'erro1');
                     endif;
   
                 endif;
                 
             endif;
         else :
             $dados = [
                 'email' => '',
                 'senha' => '',
                 'email_erro' => '',
                 'senha_erro' => ''
             ];
         endif;
      
         $this->view('usuarios/login', $dados);
     }

     
    //Cria uma sessão
    private function criarSessaoUsuario($usuario)
    {
        $_SESSION['usuario_id'] = $usuario->id_usuario;
        $_SESSION['usuario_nome'] = $usuario->nome;
        $_SESSION['usuario_email'] = $usuario->email;

        Url::redirecionar('paginas/index');
    }

    //Destruir sessão
    public function sair()
    {
        unset($_SESSION['usuario_id']);
        unset($_SESSION['usuario_nome']);
        unset($_SESSION['usuario_email']);

        session_destroy();

        Url::redirecionar('usuarios/login');
    }

  

   
    
    //Editar perfil do usuario
    public function meu_perfil($id){

        if($_SESSION['usuario_id'] == $id):
           //Verifica si o formulario existe
           $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
           if(isset($formulario)):
               //Dados vindo do formulario cadastrar
               $dados = [
                'id' => $id,
                'titulo' => trim($formulario['titulo']),
                'nome' => trim($formulario['nome']),
                'apelido' => trim($formulario['apelido']),
                'email' => trim($formulario['email']),
                'senha' => trim($formulario['senha']),
                'confirmar_senha' => trim($formulario['confirmar_senha']),
                'data_nascimento' => trim($formulario['data_nascimento']),
                'titulo_erro' => '',
                'nome_erro' => '',
                'apelido_erro' => '',
                'email_erro' => '',
                'senha_erro' => '',
                'confirmar_senha_erro' => '',
                'data_nascimento_erro' => ''
            ];
   
               //Validando os campos do formulario
               //in_array()- verifica si no array existe campo vazio
               if(in_array("", $formulario)):
                if (empty($formulario['nome'])) :
                    $dados['nome_erro'] = 'Preencha o campo nome';
                endif;

                if (empty($formulario['apelido'])) :
                    $dados['apelido_erro'] = 'Digite o seu apelido';
                endif;
 
                if (empty($formulario['email'])) :
                    $dados['email_erro'] = 'Preencha o campo email';
                endif;

               
                if (empty($formulario['titulo'])) :
                    $dados['titulo_erro'] = 'Selecione um titulo';
                endif; 
                if (empty($formulario['senha'])) :
                    $dados['senha_erro'] = 'Preencha o campo senha';
                endif;
                if (empty($formulario['confirmar_senha'])) :
                    $dados['confirmar_senha_erro'] = 'Preencha o campo confirmar senha';
                endif;

    if (empty($formulario['data_nascimento'])) :
                    $dados['data_nascimento_erro'] = 'Preencha o campo data de nascimento';
                endif;
   
                   
               else:
                   
                  if($this->usuarioModel->atualizar($dados)):
                       Sessao::mensagem('usuario','Os seus dados foram atualizados com sucesso');
                       
                   else:
                       die("Erro ao atualizar os seus dados no banco de dados");
                   endif;   
                   echo 'Preparado para atualizar os dados do usuario';   
               endif;
           else:
               
               $usuario = $this->usuarioModel->lerUsuarioPorId($id);
    
               $dados = [
                'id' => $usuario->id_usuario,
                'titulo' => $usuario->titulo,
                'nome' => $usuario->nome,
                'apelido' => $usuario->apelido,
                'email' => $usuario->email,
                'senha' => '',
                'data_nascimento' => $usuario->data_nascimento,
                'confirmar_senha' => '',
                'titulo_erro' => '',
                'nome_erro' => '',
                'apelido_erro' => '',
                'email_erro' => '',
                'senha_erro' => '',
                'confirmar_senha_erro' => '',
                'data_nascimento_erro' => ''
            ];
                 
           endif;
        else:
            Sessao::mensagem('livro', 'Você não tem autorização para acessar está conta');
            Url::redirecionar('paginas/index');
        endif;
   
        $this->view('usuarios/meu_perfil', $dados);
     }
     
     public function historico_pedidos(){
     
        $this->view('usuarios/historico_pedidos', $dados);
     }

     //Eliminar conta
     public function deletar($id){

        $id = filter_var($id, FILTER_VALIDATE_INT);
            $metodo = filter_input(INPUT_SERVER, 'REQUEST_METHOD', FILTER_SANITIZE_STRING);
 
            if($metodo == 'POST'):  
                if($this->usuarioModel->destruir($id)):
                  
                    Sessao::mensagem('usuario', 'Conta deletada com sucesso');

                    Url::redirecionar('usuarios/cadastrar');
                endif;
            else:
                Sessao::mensagem('usuario', 'Você não têm autorização pra deletar essa conta','erro');
                Url::redirecionar('usuarios/cadastrar');
            endif; 
             
    }


    public function solicitar_new_senha(){
     
        //Verifica si o formulario existe
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) :
            //Dados vindo do formulario cadastrar
            $dados = [ 
                'email' => trim($formulario['email']), 
                
                'email_erro' => '' 
            ]; 
            //Validando os campos do formulario
            //in_array()- verifica si no array existe campo vazio
            if (in_array("", $formulario)) :
               
                if (empty($formulario['email'])) :
                    $dados['email_erro'] = 'Preencha o campo email';
                endif; 
            else :
                
               if (Checa::checarEmail($formulario['email'])) :
                    $dados['email_erro'] = 'O e-mail informado é invalido';
               else:

 
               if ($this->usuarioModel->checarEmail($formulario['email'])) :
                $dados_temp['email']=$formulario['email'];
                $usuario = $this->usuarioModel->lerUsuarioEmail($dados);
                $_SESSION['usuario_nome'] = $usuario->nome;
                $_SESSION['usuario_email'] = $usuario->email;
  $dados['cod_confirmacao'] = random_int(100,10000);
  
  $email = new Email();
  $assunto="Este é o seu codigo de confirmação para redifinir a sua senha na loja bookshopfree ".$dados['cod_confirmacao'];
  $email->enviar_email($_SESSION['usuario_email'], $_SESSION['usuario_nome'], $assunto);
  
  if($email->resultado == "Email enviado com sucesso!<br>"):
    if ($this->usuarioModel->armazenar_cod_conf($dados)) : 
        Sessao::mensagem('livro', 'Foi enviado um código de confirmação no seu email, introduza na input');
         Url::redirecionar('usuarios/cod_conf_senha');
         
   else :
    $dados['email_erro'] ="Erro ao armazenar usuario no banco de dados";
   endif;
    
  else:
      Sessao::mensagem('livro', "Ligue a sua máquina a internet e tente novamente", 'erro1');
      
  endif;
  
else:
    $dados['email_erro'] = 'O e-mail informado não está cadastrado no nosso banco de dados';
endif;
                endif;
            endif;
        else :
            $dados = [
                'email' => '',
                'email_erro' => '' 
            ];
        endif; 
      
        $this->view('usuarios/solicitar_new_senha', $dados);
     }
  
     public function cod_conf_senha(){
      //Verifica si o formulario existe
      $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      if(isset($formulario)):
          //Dados vindo do formulario cadastrar
          $dados = [ 
           'cod_confirmacao' => trim($formulario['cod_confirmacao']),
           'cod_confirmacao_erro' => ''
       ];

          //Validando os campos do formulario
          //in_array()- verifica si no array existe campo vazio
          if(in_array("", $formulario)):
           if (empty($formulario['cod_confirmacao'])) :
               $dados['cod_confirmacao_erro'] = 'Digite o seu codigo de confirmação';
           endif;     
          else:
              
             
            $dados_temp = $this->usuarioModel-> lerCodConfSenha($dados);
            $dados_temp2 = [ 
                'email' => $dados_temp->email 
            ];
            
            $dados_usuario = $this->usuarioModel-> lerUsuarioEmail($dados_temp2); 
             

            $dados_usuario2 = [
                'id' => $dados_usuario->id_usuario, 
                
            ];
           
            
            $this->criarSessaoUsuario2($dados_usuario2);
         
            
            
             
              
          endif;
      else:
          
         

          $dados = [ 
           'cod_confirmacao' => '',
           'cod_confirmacao_erro' => ''
       ];
            
      endif;
 
        $this->view('usuarios/cod_conf_senha', $dados);
     }
  //Cria uma sessão
  private function criarSessaoUsuario2($dados_usuario2)
  {      
      $_SESSION['usuario_id_temp'] =  $dados_usuario2['id'];
      Url::redirecionar2('usuarios/definir_nova_senha/',$_SESSION['usuario_id_temp']);
  }
  public function sair2()
  {
      unset($_SESSION['usuario_id_temp']);
      

      session_destroy();

      Url::redirecionar('usuarios/login');
  }


  public function definir_nova_senha($id){
    //Verifica si o formulario existe
    $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    if(isset($formulario)):
        //Dados vindo do formulario cadastrar
        $dados = [
         'id' => $id,
         'titulo' => trim($formulario['titulo']),
         'nome' => trim($formulario['nome']),
         'apelido' => trim($formulario['apelido']),
         'email' => trim($formulario['email']),
         'senha' => trim($formulario['senha']),
         'confirmar_senha' => trim($formulario['confirmar_senha']),
         'data_nascimento' => trim($formulario['data_nascimento']),
         'titulo_erro' => '',
         'nome_erro' => '',
         'apelido_erro' => '',
         'email_erro' => '',
         'senha_erro' => '',
         'confirmar_senha_erro' => '',
         'data_nascimento_erro' => ''
     ];

        //Validando os campos do formulario
        //in_array()- verifica si no array existe campo vazio
        if(in_array("", $formulario)):
         if (empty($formulario['nome'])) :
             $dados['nome_erro'] = 'Preencha o campo nome';
         endif;

         if (empty($formulario['apelido'])) :
             $dados['apelido_erro'] = 'Digite o seu apelido';
         endif;

         if (empty($formulario['email'])) :
             $dados['email_erro'] = 'Preencha o campo email';
         endif;

        
         if (empty($formulario['titulo'])) :
             $dados['titulo_erro'] = 'Selecione um titulo';
         endif; 
         if (empty($formulario['senha'])) :
             $dados['senha_erro'] = 'Preencha o campo senha';
         endif;
         if (empty($formulario['confirmar_senha'])) :
             $dados['confirmar_senha_erro'] = 'Preencha o campo confirmar senha';
         endif;

if (empty($formulario['data_nascimento'])) :
             $dados['data_nascimento_erro'] = 'Preencha o campo data de nascimento';
         endif;

            
        else:
            
           if($this->usuarioModel->atualizar($dados)):
                Sessao::mensagem('usuario','Os seus dados foram atualizados com sucesso');
             $this->sair2();   
            else:
                die("Erro ao atualizar os seus dados no banco de dados");
            endif; 
        endif;
    else:
        
        $usuario = $this->usuarioModel->lerUsuarioPorId($id);

        $dados = [
         'id' => $usuario->id_usuario,
         'titulo' => $usuario->titulo,
         'nome' => $usuario->nome,
         'apelido' => $usuario->apelido,
         'email' => $usuario->email,
         'senha' => $usuario->senha,
         'data_nascimento' => $usuario->data_nascimento,
         'confirmar_senha' => '',
         'titulo_erro' => '',
         'nome_erro' => '',
         'apelido_erro' => '',
         'email_erro' => '',
         'senha_erro' => '',
         'confirmar_senha_erro' => '',
         'data_nascimento_erro' => ''
     ];
          
    endif;


 $this->view('usuarios/definir_nova_senha', $dados);
}
      public function AdicionaraosFavoritos($id){
    //Verifica si o formulario existe
    $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    $dados = [
        'id_livro' => $id,
        'id_usuario' => trim($formulario['id_usuario']),
        'cor' => "color: rgb(161, 83, 114);"
    ];
    if($this->usuarioModel->checarListaDosFavoritos($dados)):

        if($this->usuarioModel->destruirLivroFavoritos2($dados['id_livro'])):
                 
            Sessao::mensagem('livro', 'Livro deletado da lista dos favoritos');
        else:
            Sessao::mensagem('livro', 'Erro ao deletar Livro da lista dos favoritos');
            
        endif;
         
        Url::redirecionar('paginas/index');
    else:
    if($this->usuarioModel-> AdicionaraosFavoritos($dados)):
        Sessao::mensagem('livro','Livro adicionado a lista dos favoritos');
        Url::redirecionar('paginas/index');
    else:
        die("Erro ao adicionar livro a lista dos favoritos no banco de dados");
        Url::redirecionar('paginas/index');
    endif; 
     
    endif;
     
 
}

public function painel(){
   
    $dados = [
    
   ];

   if($_SESSION['usuario_id']<> 6):
    Url::redirecionar('paginas/index');
endif;
   
    $this->view('usuarios/painel', $dados);
 }

public function livros_favoritos(){
   

    $dados = [
        
         'livros_favoritos' => $this->usuarioModel-> lerLivrosFavoritos($_SESSION['usuario_id'])
        
    ];
    
   
    $this->view('usuarios/livros_favoritos', $dados);
 }

 public function destruirLivroFavoritos($id){
   
     
            if($this->usuarioModel->destruirLivroFavoritos($id)):
                 
                Sessao::mensagem('livro', 'Livro deletado da lista dos favoritos');
            else:
                Sessao::mensagem('livro', 'Erro ao deletar Livro da lista dos favoritos');
                
            endif;
    Url::redirecionar('usuarios/livros_favoritos');
    
}
 


}


