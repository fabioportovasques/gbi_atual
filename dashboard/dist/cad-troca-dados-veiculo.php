<?php
session_start();
require '../../config.php';
if(empty($_SESSION['lg'])) {
    header("Location: ../../index.php");
    exit; 
}   

         require 'cliente.class.php';

          $cliente = new Cliente();

         $lista = $cliente->PesquisarCpfCliente();
            foreach ($lista as $item):


  ?>
  <?php endforeach; ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
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


	<div class="table-responsive-sm">
		  <table class="table">
				  <thead class="thead-light">
				    <tr>
				      
				      <th scope="col">PLaca do Veículo</th>
				      <th scope="col">Tipo do Veículo</th>
				      <th scope="col">Fabricante do Veículo</th>
				      <th scope="col">Modelo do Veículo</th>
				      
				    </tr>
				  </thead>
					  <tbody>
					  	<?php foreach ($lista as $item){
					  ?>
						    <tr>
						      <td><?php echo $item['placa_veiculo']; ?></td>
						      <td><?php echo $item['topo_veiculo']; ?></td>
						      <td><?php echo $item['fabricante_veiculo']; ?></td>
						      <td><?php echo $item['modelo_veiculo']; ?></td>
						    </tr>
						 <?php
		}
?>   
					  </tbody>
		</table> 
</div>



</body>
	     <!--javascript para mascara  CPF/CNPJ-->
     <script type="text/javascript">
        var maskCpfOuCnpj = IMask(document.getElementById('cpf_cnpj'), {
    mask:[
        {
            mask: '000.000.000-00',
            maxLength: 11
        },
        {
            mask: '00.000.000/0000-00'
        }
    ]
});
</script>

</html>