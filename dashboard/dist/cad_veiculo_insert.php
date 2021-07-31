<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title></title>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	</head>
	<body>
		

	</body>
	</html>





<?php
		
			try {

			$pdo = new PDO("mysql:dbname=db-gbi;host=localhost","root","F@bio102030");

		} catch(PDOException $e) {
			echo "ERRO: ".$e->getMessage();
			exit;


				
		}



			$marcaveiculo = $_POST['marca_veiculo'];		
			//$ano_cod_ano = $_POST['ano_cod_ano'];
			$tipo_veiculo_codtipo_veiculo = $_POST['tipo_veiculo_codtipo_veiculo'];
			$marca_veiculo  = $_POST['marca_veiculo'];
				
		

			$conexao = new PDO("mysql:dbname=db-gbi;host=localhost","root","F@bio102030");

			/*Inserir na tabela marca_veiculo */

			
			
			$insert = "insert into marca_veiculo values(null,?,?)";
			$dados = [$_REQUEST['marca_veiculo'],$_REQUEST['tipo_veiculo_codtipo_veiculo']]	;
			$stmt = $conexao->prepare($insert);
			$result = $conexao->prepare($insert);
			$result = $stmt->execute($dados);

			/*****************Inserir na tabela ano*********************/

			/******Inservcao tabela ano******/

			/*

			$insert2 = "insert into ano values(null,?)";
			$dados2 = [$_REQUEST['ano']];
			$stmt = $conexao->prepare($insert2);
			$result2 = $conexao->prepare($insert2);
			$result2 = $stmt->execute($dados2);
		
			*/


			 include 'modal_cad_modelo.php';
		
			/* inserir tabela modelo do veículo */

			/*

			$insert2 = "insert into modelo_veiculo values(null,?,?,?)";
			$dados2 = [$_REQUEST['modelo_veiculo'],$_REQUEST['marca_veiculo_codmarca_veiculo'],$_REQUEST['ano_cod_ano']]	;
			$stmt = $conexao->prepare($insert2);
			$result2 = $conexao->prepare($insert2);
			$result2 = $stmt->execute($dados2);

			echo "Inserido com sucesso";
		
		
			*/
			
		/*

		$marcaveiculo = $_POST['marca_veiculo'];

		if (!empty ($_POST['marca_veiculo'])) {

			$pdo = $con->prepare('INSERT INTO marca_veiculo (marca_veiculo) VALUES (:marca_veiculo)');
			//$pdo->bindParam(1,"marca_veiculo");
			$pdo->execute();
		} else {

			echo "favor prencher o campo marca do veiculo";

		}

			

	 	/*
			if (!empty ($_POST['marca_veiculo'])) {


				$conexao =  new PDO("mysql:dbname=db-gbi;host=localhost","root","F@bio102030");
				$insert = "insert into marca_veiculo values ( ?,?)";
				$dados = [$_REQUEST['marca_veiculo']];
				$dados = [$_REQUEST['tipo_veiculo_codtipo_veiculo']];
				$stmt = $conexao->prepare($insert);
				$result = $stmt->execute($dados);	


			}else {
				echo "preencha o campo marca do veiculo";
			}

	*/
	

			

	//Debug
	
		/*
		

			if (!empty ($_POST['marca_veiculo'])) {	

				$marcaveiculo = $_POST['marca_veiculo'];		
				$modelo_veiculo = $_POST['modelo_veiculo'];
				$ano_cod_ano = $_POST['ano_cod_ano'];
				$tipo_veiculo = $_POST['tipo_veiculo'];
				$tipo_veiculo_codtipo_veiculo = $_POST['tipo_veiculo_codtipo_veiculo'];
				$marca_veiculo_codmarca_veiculo  = $_POST['marca_veiculo_codmarca_veiculo'];

				echo $tipo_veiculo ."<br/>";
				echo $marcaveiculo."<br/>";;
				echo $modelo_veiculo."<br/>";;
				echo $ano_cod_ano."<br/>";
				echo $tipo_veiculo_codtipo_veiculo."<br/>";
				echo $marca_veiculo_codmarca_veiculo;

			} else {
				echo "fabor prencer os campos";
			}		

		*/
	?>

	