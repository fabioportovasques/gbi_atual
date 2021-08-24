<?php
session_start();
require '../../config.php';
if(empty($_SESSION['lg'])) {
    header("Location: ../../index.php");
    exit; 
}   

         require 'cliente.class.php';

          $cliente = new Cliente();

         $lista = $cliente->PesquisarPlacaVeiculo();
            foreach ($lista as $item):


  ?>
  <?php endforeach; ?>


<!DOCTYPE html>
<html>
<head>
	<title>Relatório de Veiculos</title>
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

	<p class="text-center text-sm-left">Relatório de Veículo por Cliente</p>
	<hr />
	<br />
	<div class="table-responsive-sm">
		  <table class="table">
				  <thead class="thead-dark">
				    <tr>
				      
				      <th scope="col">Nome Cliente</th>
				      <th scope="col">Sobrenome Cliente</th>
				      <th scope="col">CPF/CNPJ Cliente</th>
				      <th scope="col">Tipo Veículo</th>
				      <th scope="col">Fabricante do Veículo</th>
				      <th scope="col">Modelo Do Veículo</th>
				      <th scope="col">PLaca do Veículo</th>
				      <th colspan="2">Ações</th>
				      
				    </tr>
				  </thead>
					  <tbody>
						    <tr>




						      
						      <td><?php echo $item['nome_cliente']; ?></td>
						      <td><?php echo $item['sobrenome_cliente']; ?></td>
						      <td><?php echo $item['cpf_cliente']; ?></td>
						      <td><?php echo $item['tipo_veiculo']; ?></td>
						      <td><?php echo $item['fabricante_veiculo']; ?></td>
						      <td><?php echo $item['modelo_veiculo']; ?></td>
						      <th scope="row"><?php echo $item['placa_veiculo']; ?></th>
						      <th> 
						       	   <a class="btn btn-outline-light"  href="editar_troca.php?cod_veiculo=<?php echo $item['cod_veiculo']; ?>"  role="button"> <img src= "img/oleo-de-carro.png" width="25px" style="color:red;">Trocar Agora</a>

						       </th>
						    </tr>
						  
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