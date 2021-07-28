<?php
session_start();
require '../../config.php';
if(empty($_SESSION['lg'])) {
    header("Location: ../../index.php");
    exit; 
}   

         require 'troca.class.php';

          $troca = new Troca();

         $lista = $troca->PesquisarTrocaOleo();
            foreach ($lista as $item):

  ?>
  <?php endforeach; ?>


<!DOCTYPE html>
<html>
<head>
	<title>Histórico de troca óleo</title>
</head>
	        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cadastrto de Clientes</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="css/styles.css" rel="stylesheet"/>
        <link href="css/style.css" rel="stylesheet"/>
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
         <!--javascript para API IBGE Valida cep-->
         <script type="text/javascript" src="./js/validaCep.js"></script>
           <!--javascript para validar CPF/CNPJ-->
         <script type="text/javascript" src="./js/validaCpfCnpj.js"></script>
         <!--javascript para mascara  CPF/CNPJ-->
         <script src="https://unpkg.com/imask"></script>
           <!--javascript para mascara telefone-->
       <script type="text/javascript" src="./js/masTelefone.js"></script>
               <!--Link para icones-->
       <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" />
       <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-glyphicons.css" rel="stylesheet">

       <!--estilo botão voltar-->
       <style type="text/css">
			.btn-custom {
				padding: 1px 15px 3px 2px;
				border-radius: 50px;
			}

			.btn-icon {
				padding: 8px;
				background: #ffffff;
			}
		</style>

<body>

	<p class="text-center text-sm-left">Histórico de Troca de òleo</p>
	<hr />
	<br />
	<div class="table-responsive-sm">
		  <table class="table">
				  <thead class="thead-dark">
				    <tr>
				      
				      <th scope="col">Nome Cliente</th>
				      <th scope="col">Sobrenome Cliente</th>
				      <th scope="col">Placa do Veículo</th>
				      <th scope="col">KM do Veículo</th>
				      <th scope="col">Modelo do Veículo</th>
				      <th scope="col">Tipo de óleo</th>
				      <th scope="col">Nome do Filtro de Combustível</th>
				       <th scope="col">Trocado Filtro de Combustível:S/N</th>
				      <th scope="col">Nome do Filtro de Cabine</th>
				      <th scope="col">Trocado Filtro de Cabine:S/N</th>
				      <th scope="col">Nome do Filtro de Ar</th>
				      <th scope="col">Trocado Filtro de Ar:S/N</th>
				      <th scope="col">Nome do Filtro de Óleo</th>
				      <th scope="col">Trocado Filtro de óleo:S/N</th>
				      <th scope="col">Obs da Troca</th>
				      <th scope="col">Data da Troca</th>
				      <th scope="col">Data próxima Troca</th>
				      
				    </tr>
				  </thead>
					  <tbody>

					  	<?php foreach ($lista as $item){
					  ?>
						    <tr>
						      
						      <td><?php echo $item['nome_cliente']; ?></td>
						      <td><?php echo $item['sobrenome_cliente']; ?></td>
						      <td><?php echo $item['placa_veiculo']; ?></td>
						      <td><?php echo $item['km']; ?></td>
						      <td><?php echo $item['modelo_veiculo']; ?></td>
						      <td><?php echo $item['tipo_oleo']; ?></td>
						      <td><?php echo $item['filtro_combustivel']; ?></td>
						       <td><?php echo $item['status_filtro_combustivel']; ?></td>
						       <td><?php echo $item['filtro_cabine']; ?></td>
						      <td><?php echo $item['status_filtro_cabine']; ?></td>
						      <td><?php echo $item['filtro_ar']; ?></td>
						      <td><?php echo $item['status_filtro_ar']; ?></td>
						      <td><?php echo $item['filtro_oleo']; ?></td>
						      <td><?php echo $item['status_filtro_oleo']; ?></td>
						      <td><?php echo $item['obs_troca']; ?></td>
						      <td>
						      	<?php 
						      		 echo date('d/m/Y', strtotime($item['data_troca']));
						       		?>
						      </td>
						      <td>	<?php 
						      		 echo date('d/m/Y', strtotime($item['proxima_troca']));
						       		?>
						       </td>
						      
						    </tr>

						    <?php
						}
						?>
						
					  </tbody>

		</table> 
</div>
	<!--Início da coluna-->     
	<div class="bot1 col-md-2">
		<a href="index.php" class="btn btn-secondary btn-custom">
			<span class="glyphicon glyphicon-arrow-left img-circle text-primary btn-icon"></span>
			Voltar
		</a>
	<!--Fim da coluna-->       
	</div>


</body>
</html>