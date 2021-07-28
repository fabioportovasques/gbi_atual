<?php

	include 'cliente.class.php';

	$cliente = new Cliente();

		$cliente ->editar($nome_cliente,$sobrenome_cliente,$telefone1_cliente,
		$telefone2_cliente,$cpf_cliente,$rg_cliente,$rua_cliente,$numero_rua_cliente,
		$cidade_cliente,$uf_cliente,$data_nascimento_cliente,$sexo_cliente,$bairro_cliente,$cep_cliente);
