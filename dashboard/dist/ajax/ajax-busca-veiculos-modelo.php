

         <?php 


            try {

               $pdo = new PDO("mysql:dbname=db-gbi;host=localhost","root","F@bio102030");

            } catch(PDOException $e) {
               echo "ERRO: ".$e->getMessage();
               exit;

            }



                   $marcaveiculo = $_GET['marca_veiculo'];

                  $sql = "select * from modelo_veiculo where marca_veiculo_codmarca_veiculo = $marcaveiculo";

                 //  $sql = "select * from marca_veiculo where marca_veiculo_codmarca_veiculo = $marcaveiculo";

                  $sql = $pdo->query($sql);

                  
                  

                  if($sql->rowCount() > 0)
                  {
                     $array = $sql->fetchAll();

                     echo json_encode($array);
                  }
                  else
                  {
                     $array = Array();
                     echo json_encode($array);
                  }

