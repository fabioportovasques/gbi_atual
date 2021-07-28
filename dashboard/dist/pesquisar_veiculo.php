<?php

  require 'cliente.class.php';

          $cliente = new Cliente();
 
         $lista = $cliente->pesquisar_veiculo();
            foreach ($lista as $item):

         

  ?>
  <?php endforeach; ?>