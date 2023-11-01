  <!-- Msg editado com sucesso -->
<div class="msg"><?=Sessao::mensagem('autor')?></div>
  
  <!-- Fim -->

       <!-- Inicio tabela de Autores Cadastrados-->
       <article style="display:flex; justify-content:center;">
       <section class="section_tbl_hist_pedidos" style="display: block;"> <table class="tbl_hist_pedidos" border="1">
       <thead>
         <tr class="tr_first"><td colspan="3">Autores cadastradas</td></tr>
       <tr class="tr_cabecalho">
     <td style="text-align: left;">Nome</td> 
     <td>editar</td> 
     <td>Eliminar</td> 
       </tr>
      </thead>
        <tbody>  
        <?php foreach($dados['autores'] as $autor): ?>  
        <tr>
               <td style="text-align: left;"><?= $autor->nome ?></td> 
               <td ><form name="cadastrados" action="<?= URL.'/autores/editar/'.$autor->id_autor ?>" method="post"><button class="btn_azul_claro" type="submit">Editar</button></form></td>
               <td> <form name="deletar" action="<?= URL.'/autores/deletar/'.$autor->id_autor ?>" method="post">
        <button class="btn_deletar" type="submit">Eliminar</button></form></td> 
               
                 </tr>
                 <?php endforeach ?>
           
         
        </tbody>
           
     
           
      
     </table></section> </article>
      <!-- Fim tabela de Autores Cadastrados-->