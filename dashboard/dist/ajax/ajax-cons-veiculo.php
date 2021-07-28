<?php 

try {

	$pdo = new PDO("mysql:dbname=db-gbi;host=localhost","root","F@bio102030");

} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;



}

$cpf = $_GET['cpf_cliente'];

//$sql = "SELECT * FROM cliente WHERE cpf_cliente = '$cpf'";

$sql = 
	"
	select  c.nome_cliente,c.sobrenome_cliente,c.cpf_cliente, v.tipo_veiculo,v.cor_veiculo, v.fabricante_veiculo,
		 v.modelo_veiculo,v.placa_veiculo,v.cliente_codcliente
		FROM cliente AS c
		JOIN veiculo AS v ON c.codcliente = v.cliente_codcliente
		WHERE cpf_cliente = '$cpf'

	";								

$sql = $pdo->query($sql);



if($sql->rowCount() > 0){

	$array = $sql->fetch();
	echo json_encode($array);
}
else{
	echo json_encode("erro");
}