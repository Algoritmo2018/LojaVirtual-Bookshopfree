<?php
/*
*Arquivo de configuração 
*/

const DB = [
    'HOST' => 'localhost',
    'USUARIO' => 'root',
    'SENHA' => '',
    'BANCO' => 'framework2',
    'PORTA' => '3306'
];

//__FILE__ - Constante Mágica. Retorna o caminho completo e o nome do arquivo que esta sendo executado
//dirname -Retorna o caminho/patch do directorio pai, ou seja, elimina o ultimo beco do caminho
// define para declaração de valores constantes
define('APP', dirname(__FILE__));

define('URL', 'http://localhost/Loja_Virtual_Bookshopfree');

define('APP_NOME','Loja Virtual');

//const para declaração de valores constantes
const APP_VERSAO = '1.0.0';