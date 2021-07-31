<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Modal para cadastro de modelo de veículos</title>

	
        
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

 <style type="text/css">

     .bot {
            width: 140px;
            position: relative;            
            margin: 5px;
            padding:5px;
            top: -2px;

          }

      </style>   
        
                <!--Link para icones-->

                <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>

        <!-- Inicio do modal -->

      	
   			<div class="modal fade" id="modal-mensagem">
   <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                <h4 class="modal-title">Cadastrar Modelo do Veículo</h4>
            </div>
            <div class="modal-body">
               

              <div class="row">

                <form action="cad_modelo_insert.php" method="POST">

                 <!--Início da coluna-->         
                          <div class="marcado1r col-md-4">

                                          
                          <form  method="POST">

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

                                        <label for="">Marca do  Veículo</label>
                                       <!--<input type="text" name="tipo_veiculo" id="tipo_veiculo" class="form-control" placeholder="Tipo "  autocomplete="off" 
                                        target="_blank" data-toggle="tooltip"  title="Insira o Tipo do Veículo, ex: 'carro,moto ou caminhão'" value="<?php // echo $item['tipo_veiculo']; ?>" >-->
                                        <select class="form-control" name="marca_veiculo_codmarca_veiculo ">
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
                                                                    
                                                          <select class="form-control" name="ano_cod_ano">
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

                        
                
              </div>


            </div>
            <div class="modal-footer">
              <button type="submit"  class="btn  btn-success bot" > Cadastrar </button>  
            </div>

            </form>
        </div>
    </div>
</div>



<!-- Botão para chamar o modal -->

<button class="btn btn-primary bot" data-toggle="modal" data-target="#modal-mensagem">
Pŕoximo Passo...
</button>

<a class="btn btn-primary bot" href="cad-tipo-veiculo.php" role="button">Voltar</a>


</body>
</html>