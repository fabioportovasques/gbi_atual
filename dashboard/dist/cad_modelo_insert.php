
<!DOCTYPE html>
<html>
<head>
	   <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="img/oleo.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title></title>

        <link rel="stylesheet" href="css/bootstrap.min.css">


        <script>
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
        });
    </script> 

    

</head>
<body>

</body>
</html>


<?php 


	/* inserir tabela modelo do veículo */

		/******Debugar******/

		/*

			?>
				<pre>
					<?php		
					var_dump($_POST);	
					?>
				</pre>
			<?php

		*/

			$conexao = new PDO("mysql:host=localhost;dbname=db-gbi","root","F@bio102030");
			$insert2 = "insert into modelo_veiculo values(null,?,?,?)";
			$dados2 = [$_REQUEST['modelo_veiculo'],$_REQUEST['marca_veiculo_codmarca_veiculo'],$_REQUEST['ano_cod_ano']]	;
			$stmt = $conexao->prepare($insert2);
			$result2 = $conexao->prepare($insert2);
			$result2 = $stmt->execute($dados2);


								
				print '<div class="alert alert-success" role="alert">
						  Inserido Com Sucesso!
						</div>';
						
				echo "<script>window.setTimeout(function(){window.location=\'cad-tipo-veiculo.php\';}, 2000);</script>";
		