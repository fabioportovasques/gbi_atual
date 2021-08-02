<?php   







     $conexao = new PDO("mysql:host=localhost;dbname=db-gbi","root","F@bio102030");
      $select = $conexao->prepare("select * from veiculo");
      $select ->execute();
      $fetchAll = $select->fetchAll();

      foreach ($fetchAll as $item){
                                                                
      	var_dump($item);
      }
      









?>