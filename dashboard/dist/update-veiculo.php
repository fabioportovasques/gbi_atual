<?php

	
	include 'veiculo.class.php';

	$veiculo = new Veiculo();

		$veiculo ->editar($placa_veiculo,$tipo_veiculo,$cor_veiculo,
		$modelo_veiculo,$fabricante_veiculo,$ano_fabricacao_veiculo,$km_veiculo ,$obs_veiculo,
		$cliente_codcliente);

	
		/*

		$cliente_codcliente =  $_POST['cliente_codcliente'];
		echo $cliente_codcliente;

		*/