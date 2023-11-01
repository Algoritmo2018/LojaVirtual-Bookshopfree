  <!-- Msg editado com sucesso -->
<div class="msg"><?=Sessao::mensagem('categoria')?></div>
  
  <!-- Fim -->

       <!-- Inicio tabela de Autores Cadastrados-->
       <article style="display:flex; justify-content:center;">
       <section class="section_tbl_hist_pedidos" style="display: block;"> <table class="tbl_hist_pedidos" border="1">
       <thead>
         <tr class="tr_first"><td colspan="3">Categorias cadastradas</td></tr>
       <tr class="tr_cabecalho">
     <td style="text-align: left;">Nome</td> 
     <td>editar</td> 
     <td>Eliminar</td> 
       </tr>
      </thead>
        <tbody>  
        <?php foreach($dados['categorias'] as $categoria): ?>  
        <tr>
               <td style="text-align: left;"><?= $categoria->nome ?></td> 
               <td ><form name="cadastrados" action="<?= URL.'/categorias/editar/'.$categoria->id_categoria ?>" method="post"><button class="btn_azul_claro" type="submit">Editar</button></form></td>
               <td> <form name="deletar" action="<?= URL.'/categorias/deletar/'.$categoria->id_categoria ?>" method="post">
        <button class="btn_deletar" type="submit">Eliminar</button></form></td> 
               
                 </tr>
                 <?php endforeach ?>
           
         
        </tbody>
           
     
           
      
     </table></section> </article>
      <!-- Fim tabela de Autores Cadastrados-->