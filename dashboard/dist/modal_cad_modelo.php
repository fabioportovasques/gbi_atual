<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Modal para cadastro de modelo de veículos</title>

	
        
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

        
                <!--Link para icones-->

                <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>


      	
   			<div class="modal fade" id="modal-mensagem">
   <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                <h4 class="modal-title">Cadastrar Modelo do Veículo</h4>
            </div>
            <div class="modal-body">
               

              <div class="row">

                <form action="" method="POST">

                 <!--Início da coluna-->         
                          <div class="marcado1r col-md-4">

                                    

                                            <div class="form-group">
                                                    <div class="   col">
                                                        <label for="cidade">Modelo do Veículo</label>
                                                        <span class="campo-obrigatorio">*</span>
                                                           <input type="text" name="modelo_veiculo" id="modelo_veiculo" required="" class="form-control">                                                        
                                                        
                                                    </div>
                                          </div>

                                           

                        <!--Fim da coluna-->  
                        </div>



                         <!--Início da coluna-->         
                          <div class="marcado1r col-md-4">

                          <form action="cad_veiculo_insert.php" method="POST">
                                        <label for="">Marca do  Veículo</label>
                                       <!--<input type="text" name="tipo_veiculo" id="tipo_veiculo" class="form-control" placeholder="Tipo "  autocomplete="off" 
                                        target="_blank" data-toggle="tooltip"  title="Insira o Tipo do Veículo, ex: 'carro,moto ou caminhão'" value="<?php // echo $item['tipo_veiculo']; ?>" >-->
                                        <select class="form-control" name="tipo_veiculo_codtipo_veiculo">
                                           <?php 
                                                  $conexao = new PDO("mysql:host=localhost;dbname=db-gbi","root","F@bio102030");
                                                  $select = $conexao->prepare("select * from marca_veiculo");
                                                  $select ->execute();
                                                  $fetchAll = $select->fetchAll();

                                                       echo '<option>Selecionar</option>';
                                                      foreach($fetchAll as  $marca_veiculo){
                                                          echo '<option value="'.$marca_veiculo['codmarca_veiculo'].'">'.$marca_veiculo['marca_veiculo'].'</option>';
                                                      }
                                          ?>
                                        </select>

                         <!--Fim da coluna-->  
                        </div>
                     
                         <!--Início da coluna-->         
                          <div class="marcado1r col-md-4">

                             <div class="form-group">
                                                    <div class="   col">
                                                        <label for="cidade">Ano de Fabricação</label>
                                                        <span class="campo-obrigatorio">*</span>
                                                                    
                                                          <select class="form-control" name="tipo_veiculo_codtipo_veiculo">
                                                               <?php 
                                                                      $conexao = new PDO("mysql:host=localhost;dbname=db-gbi","root","F@bio102030");
                                                                      $select = $conexao->prepare("select * from ano");
                                                                      $select ->execute();
                                                                      $fetchAll = $select->fetchAll();

                                                                           echo '<option>Selecionar</option>';
                                                                          foreach($fetchAll as  $ano){
                                                                              echo '<option value="'.$ano['cod_ano'].'">'.$ano['ano'].'</option>';
                                                                          }
                                                              ?>
                                                            </select>

                                                    </div>
                                          </div>

                        <!--Fim da coluna-->  
                        </div>

                        </form>
                
              </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Cadastrar</button>
            </div>
        </div>
    </div>
</div>


<button class="btn btn-primary" data-toggle="modal" data-target="#modal-mensagem">
Pŕoximo Passo...
</button>

</body>
</html>