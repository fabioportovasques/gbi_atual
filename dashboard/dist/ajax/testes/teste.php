<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>

		<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" type="text/css" href="jquery-3.6.0.min.js">
	<link rel="stylesheet" type="text/css" href="js.js">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">

</head>
<body>

</body>
</html>


<?php


		include ('config.php');

		$conexao= 	$pdo = new PDO("mysql:dbname=db-gbi;host=localhost","root","F@bio102030");
		$pesquisa = "select * from cliente where cpf_cliente like ?";

		//$campo= $_POST['campo'];
		//echo $campo;

			$dados = ['%'.$_REQUEST['campo'].'%'];

			$stmt = $conexao->prepare($pesquisa);
			$stmt->execute($dados);
			$result = $stmt->fetchAll();


		foreach ( $result as $tupla ) {

			?>
			//codigo para aparcer os dados
			echo json_encode($dados);

		<?php }
?>