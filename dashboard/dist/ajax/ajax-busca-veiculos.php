         <?php 


            try {

               $pdo = new PDO("mysql:dbname=db-gbi;host=localhost","root","F@bio102030");

            } catch(PDOException $e) {
               echo "ERRO: ".$e->getMessage();
               exit;

            }

           
                 $tipoveiculo = $_GET['tipo_veiculo'];

                  $sql = "select * from marca_veiculo where tipo_veiculo_codtipo_veiculo = $tipoveiculo";

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
