<?php 

   require 'cliente.class.php';

          $cliente = new Cliente();

         $lista = $cliente->pesquisar();



         
          foreach ($lista as $item):

        ?>
          

          <?php endforeach; 

        
     
        
       ?> 


<input type="text" name="" value="<?php  echo $item['cpf_cliente']; ?>">
<input type="text" name="" value="<?php  echo $item['nome_cliente']; ?>"> 

  
