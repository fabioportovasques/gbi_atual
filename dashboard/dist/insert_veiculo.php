<?php

/*Debugar*/

/*
?>
<pre>
	<?php
var_dump($_POST);
$fabricante =$_POST['fabricante'];
	?>
</pre>	
<?php

*/


	

	include 'veiculo.class.php';

	$veiculo = new Veiculo();



		

	if (!empty($_POST['placa_veiculo'])) {

		/*remove a mascara do campo cpf/cnpj para inserir no banco*/
		
		

		$placa_veiculo= $_POST['placa_veiculo'];
		$tipo_veiculo = $_POST['tipo_veiculo'];
		$cor_veiculo = $_POST['cor_veiculo'];
		$modelo_veiculo= $_POST['modelo_veiculo'];
		$fabricante_veiculo = $_POST['fabricante'];
		$ano_fabricacao_veiculo = $_POST['ano_fabricacao_veiculo'];
		$km_veiculo = $_POST['km_veiculo'];
		$obs_veiculo= $_POST['obs_veiculo'];
		$cliente_codcliente= $_POST['cliente_codcliente'];
		
		//$cliente ->verificaCpf($cpf_cliente);

		$veiculo ->adicionar($placa_veiculo,$tipo_veiculo,$cor_veiculo,
		$modelo_veiculo,$fabricante_veiculo,$ano_fabricacao_veiculo,$km_veiculo,
		$obs_veiculo,$cliente_codcliente);

	

	}else{

		print '<div class="alert alert-warning" role="alert">
				  Favor Preencher o Campo CPF/CNPJ!
				</div>';
		print '<script>window.setTimeout(function(){window.location=\'cad-veiculo.php\';}, 2000);</script>';

	}

	