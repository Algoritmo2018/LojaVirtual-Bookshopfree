<?php 
session_start();

include './../app/configuracao.php';
include './../app/autoload.php';
require './../composer/vendor/autoload.php';


?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NOME ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
    <link rel="stylesheet" href="<?=URL?>/public/css/style.css" >
    <link rel="stylesheet" href="<?=URL?>/public/fontawesome/css/all.css" >
</head>
<body>
 
 

 
<?php
    
 
  
        include '../app/Views/topo.php';
        $rotas = new Rota();
        include '../app/Views/rodape.php';
        

      
    ?>

 
<script src="<?=URL?>/public/js/scripts.js" ></script>

</body>
</html>