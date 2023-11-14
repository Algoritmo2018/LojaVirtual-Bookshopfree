<?php

class Upload
{

    private $diretorio;
    private $arquivo;
    private $tamanho;
    private $nome;
    private $pasta;
    private $extensoesV;
    private $tiposV;
    private $valortamanho;
    private $resultado;
    private $erro;

    public function getResultado(): string
    {
        return $this->resultado;
    }

    public function getErro(): string
    {
        return $this->erro;
    }
    public function __construct(string $diretorio = null)
    {
        //Verifica si foi definido um diretorio, si não foi então ele define um com o nome que entre ''
        $this->diretorio =  $diretorio ?? 'uploads';
        //verifica si o diretorio não existe, si não existir ele cria automaticamente
        if (!file_exists($this->diretorio) && !is_dir($this->diretorio)) :
            //mkdir-função que permite criar o diretorio automaticamente
            mkdir($this->diretorio, 0777);
        endif;
    }

    public function imagem(array $imagem, string $nome = null, string $pasta = null, int $tamanho = null, $extensoesV=[], $tiposV=[])
    {
        $this->arquivo = $imagem;
        $this->nome = $nome ?? pathinfo($this->arquivo['name'], PATHINFO_FILENAME);
        $this->pasta = $pasta ?? 'usuarios';
        $this->tamanho = $tamanho ?? 1;

        $extensao = pathinfo($this->arquivo['name'], PATHINFO_EXTENSION);

        $extensoesValida = $extensoesV;

        //Tipos de arquivos validos
        $tiposValidos = $tiposV;
        //Tamanho do arquivo a ser enviado
        $tamanho = $_FILES['arquivo']['size'];
        //Compara  a extensão do arquivo a ser enviado com as estensões permitidas
        if (!in_array($extensao, $extensoesValida)) :
            $this->erro = 'A extensão não é permitida';
            $this->resultado = false;
        elseif (!in_array($this->arquivo['type'], $tiposValidos)) :
            $this->erro = 'Tipo não valido';
            $this->resultado = false;
        elseif ($this->arquivo['size'] > $this->tamanho * 1024  * 1024) :
            $this->erro = 'Arquivo muito grande';
            $this->resultado = false;
        else :
            $this->criarPasta();

            $this->renomearArquivo();
            $this->moverArquivo();
        endif;
    }


    private function renomearArquivo()
    {
        $arquivo = $this->nome . strrchr($this->arquivo['name'], '.');
        if (file_exists($this->diretorio .DIRECTORY_SEPARATOR.$this->pasta. DIRECTORY_SEPARATOR . $arquivo)) :
            $arquivo = $this->nome . '-' . uniqid() . strrchr($this->arquivo['name'], '.');
        endif;

        $this->nome = $arquivo;
    }

    private function criarPasta(){
           //verifica si o diretorio não existe, si não existir ele cria automaticamente
           if (!file_exists($this->diretorio).DIRECTORY_SEPARATOR.$this->pasta && !is_dir($this->pasta.DIRECTORY_SEPARATOR.$this->pasta)) :
            //mkdir-função que permite criar o diretorio automaticamente
            mkdir($this->diretorio.DIRECTORY_SEPARATOR.$this->pasta, 0777);
        endif;
    }

    private function moverArquivo()
    {
        if (move_uploaded_file($this->arquivo['tmp_name'], $this->diretorio .DIRECTORY_SEPARATOR.$this->pasta. DIRECTORY_SEPARATOR . $this->nome)) :

            $this->resultado = $this->nome;

        else :
            $this->resultado = false;
            $this->resultado = 'Erro ao mover arquivo';

        endif;
    }
}
